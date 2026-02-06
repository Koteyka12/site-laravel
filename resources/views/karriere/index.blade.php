@extends('layouts.site')

@section('title', 'Karriere - Pflegegruppe Rhein-Main')

@section('content')
<div class="max-w-[1200px] mx-auto px-6 lg:px-0">
    <x-sections.hero-banner 
        image="images/karriere/hero-banner.png"
        title="Werde Teil des Teams Pflegegruppe Rhein-Main"
        subtitle="Unsere Mission ist es, engagierte und kompetente Menschen zu einer starken Gemeinschaft zu vereinen, in der sich jeder sicher „in guten Händen“ weiß"
    />
    <x-sections.advantages :items="[
        [
            'icon' => 'images/karriere/icon-2.svg',
            'title' => 'Multikulturelles Team',
            'text' => 'Jeder Mitarbeiter fühlt sich sicher, wird unterstützt und gefördert',
        ],
        [
            'icon' => 'images/karriere/icon-1.svg',
            'title' => 'Mitarbeiterschulung',
            'text' => 'Wir investieren kontinuierlich in die Aus- und Weiterbildung unserer Mitarbeiter',
        ],
        [
            'icon' => 'images/karriere/icon.svg',
            'title' => 'Fortschrittliche Standards',
            'text' => 'Optimierung der Arbeitsprozesse und moderne Arbeitsbedingungen',
        ],
    ]" />
    <x-sections.employer />

    <x-sections.karriere.jobs />
    
    <x-sections.about />
</div>
@endsection
