@extends('layouts.site')

@section('title', $post->seo->meta_title ?? $post->title)
@section('meta_description', $post->seo->meta_description ?? $post->excerpt)
@section('canonical', $post->seo->canonical_url ?? url()->current())
@section('robots', $post->seo->robots ?? 'index,follow')
@section('og_title', $post->seo->og_title ?? $post->seo->meta_title ?? $post->title)
@section('og_description', $post->seo->og_description ?? $post->seo->meta_description ?? $post->excerpt)
@section('og_image', $post->seo->og_image ?? ($post->thumbnail ? asset('storage/' . $post->thumbnail) : ''))

@section('content')
    <article class="pb-16">
        {{-- Breadcrumb --}}
        <div class="py-6">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-gray-900 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Blog
            </a>
        </div>

        {{-- Category Badge --}}
        @if($post->categories->isNotEmpty())
            <div class="mb-4">
                @foreach ($post->categories as $category)
                    <span class="inline-block px-3 py-1 text-xs font-medium text-gray-600 bg-gray-100 rounded-full">
                        {{ $category->title }}
                    </span>
                @endforeach
            </div>
        @endif

        {{-- Title --}}
        <h1 class="text-3xl lg:text-4xl xl:text-5xl font-bold text-gray-900 leading-tight mb-4">
            {{ $post->title }}
        </h1>

        {{-- Date --}}
        <p class="text-gray-400 text-sm mb-8">
            {{ optional($post->published_at)->format('d.m.Y') }}
        </p>

        {{-- Hero Image --}}
        @if ($post->thumbnail)
            <div class="mb-12 rounded-2xl overflow-hidden">
                <img 
                    src="{{ asset('storage/' . $post->thumbnail) }}" 
                    alt="{{ $post->title }}"
                    class="w-full h-auto object-cover"
                >
            </div>
        @endif

        {{-- Content --}}
        <div class="prose prose-lg prose-gray max-w-none">
            {!! $post->content !!}
        </div>

        {{-- Tags --}}
        @if($post->tags->isNotEmpty())
            <div class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex flex-wrap gap-2">
                    @foreach ($post->tags as $tag)
                        <span class="inline-block px-3 py-1 text-xs font-medium text-gray-600 bg-gray-100 rounded-full">
                            #{{ $tag->title }}
                        </span>
                    @endforeach
                </div>
            </div>
        @endif
    </article>
@endsection
