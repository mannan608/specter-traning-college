@php
    use App\SEO\Models\SeoMeta;

    $path = request()->route()?->getName();
    $uri = request()->getRequestUri();

    $seo = SeoMeta::query()
        ->whereIn('path', [$path, $uri])
        ->where('is_active', true)
        ->first();

    /*
    |--------------------------------------------------------------------------
    | BASE URL
    |--------------------------------------------------------------------------
    */

    $baseUrl = 'https://spectertrainingcollege.com';

    /*
    |--------------------------------------------------------------------------
    | DEFAULT IMAGE
    |--------------------------------------------------------------------------
    */

    $defaultImage = $baseUrl . '/images/og-default.jpg';

    /*
    |--------------------------------------------------------------------------
    | OG IMAGE
    |--------------------------------------------------------------------------
    */

    $ogImage = $seo?->og_image
        ? $baseUrl . '/' . ltrim($seo->og_image, '/')
        : $defaultImage;

    /*
    |--------------------------------------------------------------------------
    | TWITTER IMAGE
    |--------------------------------------------------------------------------
    */

    $twitterImage = $seo?->twitter_image
        ? $baseUrl . '/' . ltrim($seo->twitter_image, '/')
        : $ogImage;

@endphp


<title>
    {{ $seo->meta_title ?? config('app.name') }}
</title>


{{-- FAVICON --}}
<link rel="icon"
    href="{{ $baseUrl }}/favicon.ico">


{{-- BASIC SEO --}}
<meta charset="UTF-8">

<meta name="viewport"
    content="width=device-width, initial-scale=1.0">

<meta http-equiv="X-UA-Compatible"
    content="IE=edge">

<meta name="description"
    content="{{ $seo->meta_description ?? 'Specter Training College' }}">

<meta name="keywords"
    content="{{ $seo->meta_keywords ?? 'education,college,training,courses' }}">

<meta name="robots"
    content="{{ $seo->robots ?? 'index,follow' }}">

<link rel="canonical"
    href="{{ $seo->canonical_url ?? url()->current() }}">


{{-- OPEN GRAPH --}}
<meta property="og:title"
    content="{{ $seo->og_title ?? ($seo->meta_title ?? config('app.name')) }}">

<meta property="og:description"
    content="{{ $seo->og_description ?? ($seo->meta_description ?? 'Specter Training College') }}">

<meta property="og:image"
    content="{{ $ogImage }}">

<meta property="og:image:secure_url"
    content="{{ $ogImage }}">

<meta property="og:image:width"
    content="1200">

<meta property="og:image:height"
    content="630">

<meta property="og:image:type"
    content="image/png">

<meta property="og:url"
    content="{{ url()->current() }}">

<meta property="og:type"
    content="{{ $seo->og_type ?? 'website' }}">

<meta property="og:site_name"
    content="Specter Training College">


{{-- TWITTER --}}
<meta name="twitter:card"
    content="summary_large_image">

<meta name="twitter:title"
    content="{{ $seo->twitter_title ?? ($seo->meta_title ?? config('app.name')) }}">

<meta name="twitter:description"
    content="{{ $seo->twitter_description ?? ($seo->meta_description ?? 'Specter Training College') }}">

<meta name="twitter:image"
    content="{{ $twitterImage }}">


{{-- HEADER SCRIPTS --}}
@if (!empty($seo?->header_scripts))
    @foreach ($seo->header_scripts as $script)
        {!! $script !!}
    @endforeach
@endif


{{-- SCHEMA --}}
@if ($seo?->schema_markup)
    {!! $seo->schema_markup !!}
@endif


{{-- FOOTER SCRIPTS --}}
@if (!empty($seo?->footer_scripts))
    @foreach ($seo->footer_scripts as $script)
        {!! $script !!}
    @endforeach
@endif