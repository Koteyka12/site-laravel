{{-- Aktuelle Stellenangebote Section --}}
@props([
    'jobs' => [
        [
            'title' => 'Stellenbezeichnung',
            'description' => 'Kurzbeschreibung der Arbeitsaufgaben',
            'location' => 'Pflegedienst City Darmstadt',
        ],
        [
            'title' => 'Stellenbezeichnung',
            'description' => 'Kurzbeschreibung der Arbeitsaufgaben',
            'location' => 'Pflegedienst City Darmstadt',
        ],
        [
            'title' => 'Stellenbezeichnung',
            'description' => 'Kurzbeschreibung der Arbeitsaufgaben',
            'location' => 'Pflegedienst City Darmstadt',
        ],
    ]
])

<section class="py-[60px]">
    <div class="container mx-auto px-4">
        {{-- Section Header --}}
        <div class="text-center mb-[50px]">
            <h2 class="text-[40px] font-bold text-black mb-4">
                Aktuelle Stellenangebote
            </h2>
            <p class="text-[26px] font-medium text-black">
                bei der Pflegegruppe Rhein-Main
            </p>
        </div>

        {{-- Jobs Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($jobs as $job)
                <div class="bg-white rounded-[30px] border-2 border-[#E8E8E8] p-6">
                    <h3 class="text-[24px] font-bold text-black mb-2">
                        {{ $job['title'] }}
                    </h3>
                    <p class="text-[18px] text-black mb-4">
                        {{ $job['description'] }}
                    </p>
                    <div class="flex items-center gap-2 mb-6">
                        <span class="w-1 h-1 rounded-full bg-[#64CEED]"></span>
                        <span class="text-[18px] font-medium text-black">{{ $job['location'] }}</span>
                    </div>
                    <a href="#kontakt" class="inline-flex items-center justify-center px-6 py-3 bg-[#64CEED] hover:bg-[#4DBFE0] text-white font-medium rounded-[10px] transition-colors">
                        Anfrage senden
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
