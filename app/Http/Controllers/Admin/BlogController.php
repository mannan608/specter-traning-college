<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use App\Repositories\Interfaces\BlogRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    protected $blogRepository;

    public function __construct(
        BlogRepositoryInterface $blogRepository
    ) {
        $this->blogRepository = $blogRepository;
    }

    /**
     * Blog List
     */
    public function index()
    {
        $blogs = $this->blogRepository
            ->paginate(15);

        return view(
            'backend.pages.blogs.index',
            compact('blogs')
        );
    }

    /**
     * Create Page
     */
    public function create()
    {
        return view(
            'backend.pages.blogs.create'
        );
    }

    /**
     * Store Blog
     */
    public function store(BlogStoreRequest $request) {
        DB::beginTransaction();

      

        try {

            $data = $request->validated();
            $data['slug'] = $this->generateUniqueSlug(
                $request->title
            );

            $data['author_id'] = auth()->id();

            $data['is_featured'] = $request->boolean(
                'is_featured'
            );

            if (
                $request->status === 'published'
            ) {
                $data['published_at'] = now();
            }

            if (
                $request->hasFile('featured_image')
            ) {

                $data['featured_image'] = $request
                    ->file('featured_image')
                    ->store('blogs', 'public');
            }

            $this->blogRepository
                ->create($data);

            DB::commit();

            return redirect()
                ->route('backend.blogs.index')
                ->with(
                    'success',
                    'Blog created successfully.'
                );
        } catch (\Exception $e) {

            DB::rollBack();

            return back()
                ->withInput()
                ->with(
                    'error',
                    $e->getMessage()
                );
        }
    }

    /**
     * Edit Page
     */
    public function edit($id)
    {
        $blog = $this->blogRepository
            ->findById($id);

        return view(
            'backend.pages.blogs.edit',
            compact('blog')
        );
    }

    /**
     * Update Blog
     */
    public function update(
        BlogUpdateRequest $request,
        $id
    ) {
        DB::beginTransaction();

        try {

            $blog = $this->blogRepository
                ->findById($id);

            $data = $request->validated();

            if (
                $blog->title !== $request->title
            ) {
                $data['slug'] = $this->generateUniqueSlug(
                    $request->title
                );
            }

            $data['is_featured'] = $request
                ->boolean('is_featured');

            if (
                $request->status === 'published' &&
                !$blog->published_at
            ) {
                $data['published_at'] = now();
            }

            if (
                $request->hasFile('featured_image')
            ) {

                if (
                    $blog->featured_image &&
                    Storage::disk('public')->exists(
                        $blog->featured_image
                    )
                ) {

                    Storage::disk('public')
                        ->delete(
                            $blog->featured_image
                        );
                }

                $data['featured_image'] = $request
                    ->file('featured_image')
                    ->store('blogs', 'public');
            }

            $this->blogRepository
                ->update($id, $data);

            DB::commit();

            return redirect()
                ->route('admin.blogs.index')
                ->with(
                    'success',
                    'Blog updated successfully.'
                );
        } catch (\Exception $e) {

            DB::rollBack();

            return back()
                ->withInput()
                ->with(
                    'error',
                    $e->getMessage()
                );
        }
    }

    /**
     * Delete Blog
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        try {

            $blog = $this->blogRepository
                ->findById($id);

            if (
                $blog->featured_image &&
                Storage::disk('public')->exists(
                    $blog->featured_image
                )
            ) {

                Storage::disk('public')
                    ->delete(
                        $blog->featured_image
                    );
            }

            $this->blogRepository
                ->delete($id);

            DB::commit();

            return redirect()
                ->route('admin.blogs.index')
                ->with(
                    'success',
                    'Blog deleted successfully.'
                );
        } catch (\Exception $e) {

            DB::rollBack();

            return back()
                ->with(
                    'error',
                    $e->getMessage()
                );
        }
    }

    /**
     * Generate Unique Slug
     */
    private function generateUniqueSlug(
        $title
    ) {

        $slug = Str::slug($title);

        $count = Blog::where(
            'slug',
            'LIKE',
            "{$slug}%"
        )->count();

        return $count
            ? "{$slug}-" . ($count + 1)
            : $slug;
    }
}
