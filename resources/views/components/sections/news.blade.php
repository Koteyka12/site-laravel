{{-- Aktuelles im Blick --}}
<section class="pt-[70px] pb-[30px]">
    {{-- Section Title --}}
    
    <div class="text-center mb-[70px]">
        <h2 class="font-bold text-[40px] leading-[40px] text-black mb-[16px]">
            Aktuelles im Blick
        </h2>
    </div>
    {{-- Content Grid --}}
    <div class="grid grid-cols-[700px_1fr] gap-[30px]">
        {{-- Left: Featured Article with Image --}}
        <a href="#" class="group block relative rounded-[25px] overflow-hidden aspect-[700/394]">
            {{-- Background Image --}}
            <img
                src="{{ asset('images/home/news-featured.png') }}"
                alt="Pflege von bettlägerigen Menschen"
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
            >
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            {{-- Text Content --}}
            <div class="absolute bottom-0 left-0 right-0 p-[26px]">
                <h3 class="font-semibold text-[24px] leading-[24px] text-white mb-[12px]">
                    Pflege von bettlägerigen Menschen
                </h3>
                <span class="font-semibold text-[18px] leading-[18px] text-white">
                    00.00.0000
                </span>
            </div>
        </a>

        {{-- Right: Article List --}}
        <div class="flex flex-col gap-[24px]">
            {{-- Article 1 --}}
            <a href="#" class="group block">
                <h3 class="font-semibold text-[24px] leading-[32px] text-black group-hover:text-[#64CEED] transition-colors mb-[8px]">
                    Verblisterung: Innovative Lösungen für Komfort und Präzision bei der Einnahme von Medikamenten
                </h3>
                <span class="font-semibold text-[18px] leading-[18px] text-[#8B8B8B]">
                    00.00.0000
                </span>
            </a>

            {{-- Article 2 --}}
            <a href="#" class="group block">
                <h3 class="font-semibold text-[24px] leading-[32px] group-hover:text-[#50c4e0] transition-colors mb-[8px]">
                    Besonderheiten bei der Pflege von onkologischen Patienten
                </h3>
                <span class="font-semibold text-[18px] leading-[18px] text-[#8B8B8B]">
                    00.00.0000
                </span>
            </a>

            {{-- Article 3 --}}
            <a href="#" class="group block">
                <h3 class="font-semibold text-[24px] leading-[32px] text-black group-hover:text-[#64CEED] transition-colors mb-[8px]">
                    Sicherheit und Komfort für ältere Menschen zu Hause
                </h3>
                <span class="font-semibold text-[18px] leading-[18px] text-[#8B8B8B]">
                    00.00.0000
                </span>
            </a>
        </div>
    </div>
</section>
