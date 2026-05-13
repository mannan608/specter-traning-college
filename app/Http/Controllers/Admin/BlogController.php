<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Repositories\Interfaces\BlogRepositoryInterface;
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
     * Display blogs list
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
     * Show create form
     */
    public function create()
    {
        return view('backend.pages.blogs.create');
    }

    /**
     * Store new blog
     */
    public function store(BlogStoreRequest $request)
    {
        $data = $request->validated();

        /*
        |--------------------------------------------------------------------------
        | Image Upload
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('featured_image')) {

            $data['featured_image'] = $request
                ->file('featured_image')
                ->store('blogs', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Slug
        |--------------------------------------------------------------------------
        */

        $data['slug'] = Str::slug($request->title);

        /*
        |--------------------------------------------------------------------------
        | Published Time
        |--------------------------------------------------------------------------
        */

        if ($request->status == 'published') {
            $data['published_at'] = now();
        }

        /*
        |--------------------------------------------------------------------------
        | Author
        |--------------------------------------------------------------------------
        */

        $data['author_id'] = auth()->id();

        $this->blogRepository->create($data);

        return redirect()
            ->route('backend.pages.blogs.index')
            ->with(
                'success',
                'Blog created successfully.'
            );
    }

    /**
     * Show blog details
     */
    public function show($id)
    {
        $blog = $this->blogRepository
            ->findById($id);

        return view(
            'backend.pages.blogs.show',
            compact('blog')
        );
    }

    /**
     * Show edit form
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
     * Update blog
     */
    public function update(
        BlogUpdateRequest $request,
        $id
    ) {
        $blog = $this->blogRepository
            ->findById($id);

        $data = $request->validated();

        /*
        |--------------------------------------------------------------------------
        | Update Image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('featured_image')) {

            if (
                $blog->featured_image &&
                Storage::disk('public')->exists(
                    $blog->featured_image
                )
            ) {
                Storage::disk('public')->delete(
                    $blog->featured_image
                );
            }

            $data['featured_image'] = $request
                ->file('featured_image')
                ->store('blogs', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Update Slug
        |--------------------------------------------------------------------------
        */

        $data['slug'] = Str::slug($request->title);

        /*
        |--------------------------------------------------------------------------
        | Published Time
        |--------------------------------------------------------------------------
        */

        if (
            $request->status == 'published' &&
            !$blog->published_at
        ) {
            $data['published_at'] = now();
        }

        $this->blogRepository->update(
            $id,
            $data
        );

        return redirect()
            ->route('blogs.index')
            ->with(
                'success',
                'Blog updated successfully.'
            );
    }

    /**
     * Delete blog
     */
    public function destroy($id)
    {
        $blog = $this->blogRepository
            ->findById($id);

        /*
        |--------------------------------------------------------------------------
        | Delete Image
        |--------------------------------------------------------------------------
        */

        if (
            $blog->featured_image &&
            Storage::disk('public')->exists(
                $blog->featured_image
            )
        ) {
            Storage::disk('public')->delete(
                $blog->featured_image
            );
        }

        $this->blogRepository->delete($id);

        return redirect()
            ->route('backend.pages.blogs.index')
            ->with(
                'success',
                'Blog deleted successfully.'
            );
    }
}