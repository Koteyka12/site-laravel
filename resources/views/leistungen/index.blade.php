@extends('layouts.site')

@section('title', 'Leistungen - Pflegegruppe Rhein-Main')

@section('content')
<div class="max-w-[1200px] mx-auto px-6 lg:px-0">
    <x-sections.hero-banner 
        image="images/leistungen/hero-banner.png"
        title="Wir sorgen dafür, dass Sie sich stets in guten Händen fühlen"
        subtitle="Unser freundliches und gut ausgebildetes Personal unterstützt<br/> Sie in allen Bereichen der Pflege, Betreuung<br/> und bei der Führung des Haushalts"
    />
    <x-sections.leistungen.services />
    <x-sections.locations-map />
    <x-sections.contact-form />
    <x-sections.leistungen.faq />
</div>
@endsection
