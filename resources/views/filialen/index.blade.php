@extends('layouts.site')

@section('title', 'Filialen - Pflegegruppe Rhein-Main')

@section('content')
<div class="max-w-[1200px] mx-auto px-6 lg:px-0">
    <x-sections.hero-banner 
        image="images/filialen/hero-banner.png"
        title="Pflegedienst City"
        titleLine2="Frankfurt & Offenbach"
        subtitle="Unser freundliches und gut ausgebildetes Personal unterstützt<br/> Sie in allen Bereichen der Pflege, Betreuung<br/>und bei der Führung des Haushalts"
    />
    
    <x-sections.advantages :items="[
        [
            'icon' => 'images/filialen/icon.svg',
            'title' => 'Seit 2014',
            'text' => 'bieten wir Ihnen hochwertige individuelle Pflege bei Ihnen zu Hause',
        ],
        [
            'icon' => 'images/filialen/icon-1.svg',
            'title' => 'Viele Dienstleistungen',
            'text' => 'für ein unabhängiges und komfortables Leben in den eigenen vier Wänden',
        ],
        [
            'icon' => 'images/filialen/icon-2.svg',
            'title' => 'Unsere Mitarbeiter',
            'text' => 'bilden sich regelmassig weiter und haben moderne Arbeitsbedingungen',
        ],
    ]" />

    <x-sections.services-slider />

    <x-sections.filialen.partner />

    <x-sections.filialen.bewertungen />

    <x-sections.contact-form />

    <x-sections.leistungen.faq />

     <x-sections.filialen.standorte />
</div>
@endsection
