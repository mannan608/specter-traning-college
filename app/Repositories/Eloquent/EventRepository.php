<?php

namespace App\Repositories\Eloquent;

use App\Models\Event;
use App\Repositories\Interfaces\EventRepositoryInterface;

class EventRepository implements EventRepositoryInterface
{
    public function all()
    {
        return Event::latest()->get();
    }

    public function paginate($limit = 10)
    {
        return Event::latest()
            ->paginate($limit);
    }

    public function findById($id)
    {
        return Event::findOrFail($id);
    }

    public function findBySlug($slug)
    {
        return Event::where(
            'slug',
            $slug
        )->firstOrFail();
    }

    public function create(array $data)
    {
        return Event::create($data);
    }

    public function update(
        $id,
        array $data
    ) {
        $event = $this->findById($id);

        $event->update($data);

        return $event;
    }

    public function delete($id)
    {
        return Event::destroy($id);
    }
}