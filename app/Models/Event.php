<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $fillable = [

        'title',
        'slug',
        'short_description',
        'description',
        'banner',

        'location',
        'event_start_date',
        'event_end_date',
        'organizer',

        'registration_link',
        'contact_email',
        'contact_phone',

        'meta_title',
        'meta_description',

        'status',
        'is_featured',
        'views',
    ];

    protected $casts = [

        'event_start_date' => 'datetime',
        'event_end_date' => 'datetime',
        'is_featured' => 'boolean',
    ];
}
