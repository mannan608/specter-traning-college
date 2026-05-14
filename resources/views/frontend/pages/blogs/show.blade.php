@extends('frontend.layouts.app')

@php
    use Illuminate\Support\Facades\Storage;

    $image = $blog->featured_image
        ? asset('storage/' . $blog->featured_image)
        : asset('images/default-blog.jpg');
@endphp

@section('content')
<section class="py-4">
    <div class="max-w-4xl mx-auto px-5 md:px-8">

        <div class="bg-white rounded-lg overflow-hidden">

            {{-- Featured Image --}}
            <img 
                src="{{ $image }}" 
                alt="{{ $blog->title }}"
                class="w-full h-[400px] object-cover rounded-lg mb-6"
            >

           <div class="px-5 pb-6">
             {{-- Title --}}
              <span class="text-xs text-neutral-600">Author : {{$blog->author->name}}</span>
            <h1 class="text-3xl font-bold mb-4">
                {{ $blog->title }}
            </h1>          

            {{-- Short Description --}}
            <p class="text-gray-600 mb-6">
                {{ $blog->short_description }}
            </p>

            {{-- Content --}}
            <div class="prose max-w-none blog-content">
                {!! $blog->content !!}
            </div>
           </div>

        </div>

    </div>
</section>
@endsection