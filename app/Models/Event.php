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

        'schedules',
        'organizer',

        'registration_link',
        'contact_email',
        'contact_phone',

        'providers',
        'gallery_images',
        'tags',
        'benefits',
        'services_offered',
        'faqs',
        'google_map_link',

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

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
