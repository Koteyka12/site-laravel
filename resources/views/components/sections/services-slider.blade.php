{{-- Professionelle Pflegeleistungen --}}
<section class="pt-[70px] pb-[30px]">
    {{-- Section Header --}}
    <div class="text-center mb-[70px]">
        <h2 class="font-bold text-[40px] leading-[40px] text-black mb-[16px]">
            Professionelle Pflegeleistungen
        </h2>
        <p class="font-medium text-[26px] leading-[26px] text-black">
            Erstklassige Betreuung für Personen mit Pflegebedarf mit folgendem Leistungsangebot
        </p>
    </div>

    {{-- Cards Slider --}}
    <div class="relative" x-data="{ currentSlide: 0, totalSlides: 2 }">
        {{-- Navigation Arrows --}}
        <button
            type="button"
            @click="currentSlide = currentSlide > 0 ? currentSlide - 1 : totalSlides - 1"
            class="absolute left-[18px] top-1/2 -translate-y-1/2 z-10 w-[34px] h-[34px] bg-black rounded-full flex items-center justify-center hover:bg-gray-800 transition-colors"
        >
            <svg class="w-[8px] h-[14px] text-white" fill="none" stroke="currentColor" viewBox="0 0 8 14">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1L1 7l6 6"/>
            </svg>
        </button>

        <button
            type="button"
            @click="currentSlide = currentSlide < totalSlides - 1 ? currentSlide + 1 : 0"
            class="absolute right-[18px] top-1/2 -translate-y-1/2 z-10 w-[34px] h-[34px] bg-brand-cyan rounded-full flex items-center justify-center hover:bg-[#50c4e0] transition-colors"
        >
            <svg class="w-[8px] h-[14px] text-white" fill="none" stroke="currentColor" viewBox="0 0 8 14">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l6 6-6 6"/>
            </svg>
        </button>

        {{-- Cards Container --}}
        <div class="overflow-hidden">
            <div
                class="flex gap-[24px] transition-transform duration-300"
                :style="'transform: translateX(-' + (currentSlide * 100) + '%)'"
            >
                {{-- Card 1: Grundpflege --}}
                <div class="w-[384px] shrink-0 border-2 border-[#E8E8E8] rounded-[20px] overflow-hidden">
                    {{-- Image --}}
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/home/services/usluga.png') }}" alt="Grundpflege" class="pt-[35px] max-h-full max-w-full object-contain">
                    </div>
                    {{-- Content --}}
                    <div class="p-[35px] pt-[24px]">
                        <h3 class="font-semibold text-[24px] leading-[24px] text-black mb-[10px]">
                            Grundpflege
                        </h3>
                        <p class="font-normal text-[18px] leading-[26px] text-[#8C8C8C] mb-[24px] min-h-[52px]">
                            Körperpflege, Ernährung, Unterstützung der Mobilität
                        </p>
                        <a href="/leistungen/grundpflege" class="block w-full h-[56px] bg-brand-cyan rounded-[10px] flex items-center justify-center font-semibold text-[18px] text-white hover:bg-[#50c4e0] transition-colors">
                            Ansehen
                        </a>
                    </div>
                </div>

                {{-- Card 2: Behandlungspflege --}}
                <div class="w-[384px] shrink-0 border-2 border-[#E8E8E8] rounded-[20px] overflow-hidden">
                    {{-- Image --}}
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/home/services/usluga2.png') }}" alt="Behandlungspflege" class="pt-[35px] max-h-full max-w-full object-contain">
                    </div>
                    {{-- Content --}}
                    <div class="p-[35px] pt-[24px]">
                        <h3 class="font-semibold text-[24px] leading-[24px] text-black mb-[10px]">
                            Behandlungspflege
                        </h3>
                        <p class="font-normal text-[18px] leading-[26px] text-[#8B8B8B] mb-[24px] min-h-[52px]">
                            Medikamentenlieferung und Einnahmekontrolle, Verbände etc
                        </p>
                        <a href="/leistungen/behandlungspflege" class="block w-full h-[56px] bg-[#8BE567] rounded-[10px] flex items-center justify-center font-semibold text-[18px] text-black hover:bg-[#7ad456] transition-colors">
                            Ansehen
                        </a>
                    </div>
                </div>

                {{-- Card 3: Haushaltshilfe --}}
                <div class="w-[384px] shrink-0 border-2 border-[#E8E8E8] rounded-[20px] overflow-hidden">
                    {{-- Image --}}
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/home/services/usluga3.png') }}" alt="Haushaltshilfe" class="pt-[35px] max-h-full max-w-full object-contain">
                    </div>
                    {{-- Content --}}
                    <div class="p-[35px] pt-[24px]">
                        <h3 class="font-semibold text-[24px] leading-[24px] text-black mb-[10px]">
                            Haushaltshilfe
                        </h3>
                        <p class="font-normal text-[18px] leading-[26px] text-[#8C8C8C] mb-[24px] min-h-[52px]">
                            Kochen, Putzen, Einkaufen und Wäsche waschen
                        </p>
                        <a href="/leistungen/haushaltshilfe" class="block w-full h-[56px] bg-brand-cyan rounded-[10px] flex items-center justify-center font-semibold text-[18px] text-white hover:bg-[#50c4e0] transition-colors">
                            Ansehen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
