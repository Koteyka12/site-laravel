@extends('layouts.site')

@section('title', 'Blog')
@section('meta_description', 'Aktuelle Artikel und Updates von Pflegegruppe Rhein-Main.')

@section('content')
    @php
        $demoPosts = [
            (object) [
                'slug' => 'verblisterung-innovative-loesungen',
                'thumbnail' => 'images/home/news-featured.png',
                'title' => 'Verblisterung: Innovative Lösungen für Komfort und Präzision bei der Einnahme von Medikamenten',
                'categories' => collect([(object) ['title' => 'Kategorie']]),
                'published_at' => now(),
            ],
            (object) [
                'slug' => 'pflegetipps-fuer-den-alltag',
                'thumbnail' => null,
                'title' => 'Pflegetipps für den Alltag: So unterstützen Sie Ihre Angehörigen optimal',
                'categories' => collect([(object) ['title' => 'Pflege']]),
                'published_at' => now(),
            ],
            (object) [
                'slug' => 'neue-mitarbeiter-im-team',
                'thumbnail' => null,
                'title' => 'Neue Mitarbeiter im Team: Willkommen bei Pflegegruppe Rhein-Main',
                'categories' => collect([(object) ['title' => 'Team']]),
                'published_at' => now(),
            ],
        ];
        $displayPosts = $posts->isEmpty() ? $demoPosts : $posts;
    @endphp

    <div class="max-w-[1200px] mx-auto my-[30px] md:my-[60px] px-[20px] md:px-0">
        {{-- Page Title --}}
        <h1 class="text-[24px] md:text-[40px] font-bold text-black mb-[20px] md:mb-10">Blog</h1>

        {{-- Posts Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            @foreach ($displayPosts as $post)
                <x-blog.card :post="$post" />
            @endforeach
        </div>

        {{-- Load More Button --}}
        @if($posts->hasMorePages())
            <div class="flex justify-center">
                <a 
                    href="{{ $posts->nextPageUrl() }}" 
                    class="w-full h-[90px] flex items-center justify-center text-[18px] font-semibold text-black bg-white border-2 border-[#E8E8E8] rounded-[30px] hover:bg-[#8BE567] hover:border-[#8BE567] transition-colors cursor-pointer"
                >
                    Mehr anzeigen
                </a>
            </div>
        @endif
    </div>
@endsection
