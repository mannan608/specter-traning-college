<?php

namespace App\Models;

use App\SEO\Models\SeoMeta;
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

    'schedules' => 'array',

    'providers' => 'array',

    'gallery_images' => 'array',

    'tags' => 'array',

    'benefits' => 'array',

    'services_offered' => 'array',

    'faqs' => 'array',

    'is_featured' => 'boolean',
];

    public function seoMeta()
{
    return $this->hasOne(SeoMeta::class);
}
}
