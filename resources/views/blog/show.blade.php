@extends('layouts.site')

@section('title', $post->seo->meta_title ?? $post->title)
@section('meta_description', $post->seo->meta_description ?? $post->excerpt)
@section('canonical', $post->seo->canonical_url ?? url()->current())
@section('robots', $post->seo->robots ?? 'index,follow')
@section('og_title', $post->seo->og_title ?? $post->seo->meta_title ?? $post->title)
@section('og_description', $post->seo->og_description ?? $post->seo->meta_description ?? $post->excerpt)
@section('og_image', $post->seo->og_image ?? ($post->thumbnail ? asset('storage/' . $post->thumbnail) : ''))

@section('content')
<div class="max-w-[1200px] mx-auto px-6 lg:px-0">
    <article class="py-[40px]">
        {{-- Back to Blog --}}
        <div class="mb-[30px]">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-[14px] text-[#8B8B8B] hover:text-black transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Blog
            </a>
        </div>

        {{-- Category Badge --}}
        @if($post->categories->isNotEmpty())
            <div class="mb-[15px]">
                @foreach ($post->categories as $category)
                    <span class="inline-block px-3 py-1 text-[14px] font-medium text-[#8B8B8B] bg-[#F5F5F5] rounded-full">
                        {{ $category->title }}
                    </span>
                @endforeach
            </div>
        @endif

        {{-- Title --}}
        <h1 class="text-[32px] lg:text-[40px] font-bold text-black leading-[1.2] mb-[10px]">
            {{ $post->title }}
        </h1>

        {{-- Date --}}
        <p class="text-[14px] text-[#8B8B8B] mb-[30px]">
            {{ optional($post->published_at)->format('d.m.Y') }}
        </p>

        {{-- Hero Image --}}
        @if ($post->thumbnail)
            <div class="mb-[40px]">
                <img 
                    src="{{ str_starts_with($post->thumbnail, 'images/') ? asset($post->thumbnail) : asset('storage/' . $post->thumbnail) }}" 
                    alt="{{ $post->title }}"
                    class="w-full h-auto object-cover rounded-[20px]"
                >
            </div>
        @endif

        {{-- Content --}}
        <div class="blog-content">
            {!! $post->content !!}
        </div>

        {{-- Tags --}}
        @if($post->tags->isNotEmpty())
            <div class="mt-[40px] pt-[30px] border-t border-[#E8E8E8]">
                <div class="flex flex-wrap gap-2">
                    @foreach ($post->tags as $tag)
                        <span class="inline-block px-3 py-1 text-[14px] font-medium text-[#8B8B8B] bg-[#F5F5F5] rounded-full">
                            #{{ $tag->title }}
                        </span>
                    @endforeach
                </div>
            </div>
        @endif
    </article>

    {{-- Related Articles --}}
    <section class="pb-[40px]">
        <h2 class="text-[24px] md:text-[32px] font-bold text-black mb-[20px] md:mb-[30px]">Andere Artikel</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            @foreach ($relatedPosts ?? [] as $relatedPost)
                <x-blog.card :post="$relatedPost" />
            @endforeach
        </div>

        <a 
            href="{{ route('blog.index') }}" 
            class="block w-full h-[50px] md:h-[90px] flex items-center justify-center text-[16px] md:text-[18px] font-semibold text-black bg-white border-2 border-[#E8E8E8] rounded-[20px] md:rounded-[30px] hover:bg-[#8BE567] hover:border-[#8BE567] hover:text-white transition-colors"
        >
            Mehr anzeigen
        </a>
    </section>
</div>
@endsection
