<?php

namespace App\Repositories\Eloquent;

use App\Models\Blog;
use App\Repositories\Interfaces\BlogRepositoryInterface;

class BlogRepository implements BlogRepositoryInterface
{
    public function all()
    {
        return Blog::with('author')
            ->latest()
            ->get();
    }

    public function paginate($limit = 10)
    {
        return Blog::with('author')
            ->latest()
            ->paginate($limit);
    }

    public function findById($id)
    {
        return Blog::with('author')
            ->findOrFail($id);
    }

    public function findBySlug($slug)
    {
        return Blog::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
    }

    public function create(array $data)
    {
        
        return Blog::create($data);
    }

    public function update($slug, array $data)
    {
        $blog = $this->findBySlug($slug);

        $blog->update($data);

        return $blog;
    }

    public function delete($slug)
    {
        return Blog::destroy($slug);
    }
}
