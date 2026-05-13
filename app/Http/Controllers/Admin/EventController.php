<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Repositories\Interfaces\EventRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventController extends Controller
{
    protected $eventRepository;

    public function __construct(
        EventRepositoryInterface $eventRepository
    ) {
        $this->eventRepository = $eventRepository;
    }

    /**
     * Events List
     */
    public function index()
    {
        $events = $this->eventRepository
            ->paginate(15);

        return view(
            'backend.pages.events.index',
            compact('events')
        );
    }

    /**
     * Create Page
     */
    public function create()
    {
        return view('backend.pages.events.create');
    }

    /**
     * Store Event
     */
    public function store(
        EventStoreRequest $request
    ) {
        $data = $request->validated();

        if ($request->hasFile('banner')) {

            $data['banner'] = $request
                ->file('banner')
                ->store('events', 'public');
        }

        $data['slug'] = Str::slug(
            $request->title
        );

        $this->eventRepository
            ->create($data);

        return redirect()
            ->route('events.index')
            ->with(
                'success',
                'Event created successfully.'
            );
    }

    /**
     * Show Event
     */
    public function show($id)
    {
        $event = $this->eventRepository
            ->findById($id);

        return view(
            'backend.pages.events.show',
            compact('event')
        );
    }

    /**
     * Edit Event
     */
    public function edit($id)
    {
        $event = $this->eventRepository
            ->findById($id);

        return view(
            'backend.pages.events.edit',
            compact('event')
        );
    }

    /**
     * Update Event
     */
    public function update(
        EventUpdateRequest $request,
        $id
    ) {
        $event = $this->eventRepository
            ->findById($id);

        $data = $request->validated();

        if ($request->hasFile('banner')) {

            if (
                $event->banner &&
                Storage::disk('public')->exists(
                    $event->banner
                )
            ) {
                Storage::disk('public')->delete(
                    $event->banner
                );
            }

            $data['banner'] = $request
                ->file('banner')
                ->store('events', 'public');
        }

        $data['slug'] = Str::slug(
            $request->title
        );

        $this->eventRepository
            ->update($id, $data);

        return redirect()
            ->route('backend.pages.events.index')
            ->with(
                'success',
                'Event updated successfully.'
            );
    }

    /**
     * Delete Event
     */
    public function destroy($id)
    {
        $event = $this->eventRepository
            ->findById($id);

        if (
            $event->banner &&
            Storage::disk('public')->exists(
                $event->banner
            )
        ) {
            Storage::disk('public')->delete(
                $event->banner
            );
        }

        $this->eventRepository
            ->delete($id);

        return redirect()
            ->route('backend.pages.events.index')
            ->with(
                'success',
                'Event deleted successfully.'
            );
    }
}