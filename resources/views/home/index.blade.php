@extends('layouts.site')

@section('title', 'Startseite - Pflegegruppe Rhein-Main')

@section('content')
<div class="max-w-[1200px] mx-auto px-6 lg:px-0">
    <x-sections.hero />

    <x-sections.advantages />

    <x-sections.about />

    <x-sections.services-slider />

    <x-sections.locations-map />

    <x-sections.employer />

    {{-- Button --}}
    <div class="flex justify-center pt-[40px]">
        <a href="#" class="flex items-center justify-center h-[90px] w-[386px] bg-[#64CEED] rounded-[25px]">
            <span class="font-semibold text-[22px] leading-[22px] text-white">Weitere Informationen</span>
        </a>
    </div>

    <x-sections.contact-form />
    <x-sections.news />

</div>
@endsection
