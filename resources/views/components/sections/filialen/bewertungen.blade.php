{{-- Bewertungen --}}
<section class="py-[70px]">
    {{-- Section Title --}}
    <h2 class="font-bold text-[40px] leading-[48px] text-black text-center mb-[50px]">
        Bewertungen
    </h2>

    {{-- Reviews Grid --}}
    <div class="flex gap-[20px]">
        {{-- Review 1 --}}
        <div class="border border-[#E8E8E8] rounded-[20px] p-[24px] h-[228px] flex-1" x-data="{ expanded: false }" :class="{ 'h-auto': expanded }">
            {{-- Header --}}
            <div class="flex items-center gap-[12px] mb-[16px]">
                <div class="w-[48px] h-[48px] rounded-full bg-[#40E0D0] flex items-center justify-center">
                    <span class="font-bold text-[20px] text-white">J</span>
                </div>
                <div>
                    <h4 class="font-bold text-[16px] text-black">Juergen H.</h4>
                    <div class="flex items-center gap-[8px]">
                        <div class="flex gap-[2px]">
                            <img src="{{ asset('images/filialen/star.svg') }}" alt="star" class="w-[14px] h-[14px]">
                            <img src="{{ asset('images/filialen/star.svg') }}" alt="star" class="w-[14px] h-[14px]">
                            <img src="{{ asset('images/filialen/star.svg') }}" alt="star" class="w-[14px] h-[14px]">
                            <img src="{{ asset('images/filialen/star.svg') }}" alt="star" class="w-[14px] h-[14px]">
                            <img src="{{ asset('images/filialen/star.svg') }}" alt="star" class="w-[14px] h-[14px]">
                        </div>
                        <span class="text-[14px] text-[#666666]">12.2024</span>
                    </div>
                </div>
            </div>
            {{-- Content --}}
            <p class="font-medium text-[14px] leading-[22px] text-black" :class="{ 'line-clamp-3': !expanded }">
                Mein Vater wurde vom Pflegedienst City über zweieinhalb Jahre gepflegt und betreut. Wir waren alle sehr zufrieden, natürlich auch mein Vater. Ich habe darüber hinaus immer schnelle und kompetente Unterstützung und Tipps erhalten, als es um Fragen rund um die Pflege ging, wie z.B. bei der Beschaffung der Hilfsmittel, Gutachten usw. Ich kann diesen Pflegedienst nur weiterempfehlen!
            </p>
            {{-- More link --}}
            <button 
                @click="expanded = !expanded" 
                class="flex items-center gap-[4px] text-[#40E0D0] font-medium text-[14px] mt-[12px]"
            >
                <span x-text="expanded ? 'Weniger anzeigen' : 'Mehr anzeigen'"></span>
                <svg 
                    class="w-[16px] h-[16px] transition-transform duration-300" 
                    :class="{ 'rotate-180': expanded }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>

        {{-- Review 2 --}}
        <div class="border border-[#E8E8E8] rounded-[20px] p-[24px] h-[228px] flex-1" x-data="{ expanded: false }" :class="{ 'h-auto': expanded }">
            {{-- Header --}}
            <div class="flex items-center gap-[12px] mb-[16px]">
                <div class="w-[48px] h-[48px] rounded-full bg-[#40E0D0] flex items-center justify-center">
                    <span class="font-bold text-[20px] text-white">T</span>
                </div>
                <div>
                    <h4 class="font-bold text-[16px] text-black">Theresa</h4>
                    <div class="flex items-center gap-[8px]">
                        <div class="flex gap-[2px]">
                            <img src="{{ asset('images/filialen/star.svg') }}" alt="star" class="w-[14px] h-[14px]">
                            <img src="{{ asset('images/filialen/star.svg') }}" alt="star" class="w-[14px] h-[14px]">
                            <img src="{{ asset('images/filialen/star.svg') }}" alt="star" class="w-[14px] h-[14px]">
                            <img src="{{ asset('images/filialen/star.svg') }}" alt="star" class="w-[14px] h-[14px]">
                            <img src="{{ asset('images/filialen/star.svg') }}" alt="star" class="w-[14px] h-[14px]">
                        </div>
                        <span class="text-[14px] text-[#666666]">05.2025</span>
                    </div>
                </div>
            </div>
            {{-- Content --}}
            <p class="font-medium text-[14px] leading-[22px] text-black" :class="{ 'line-clamp-3': !expanded }">
                Vielen Dank an das Team und Herrn J. Die Pflegeberatung meines Vaters wurde schnellstmoeglich und professionell abgewickelt. Besonders beeindruckt hat mich die freundliche und kompetente Art des gesamten Teams. Sie haben sich immer Zeit genommen, alle Fragen zu beantworten und uns bei jedem Schritt unterstützt. Ich kann diesen Service nur wärmstens empfehlen!
            </p>
            {{-- More link --}}
            <button 
                @click="expanded = !expanded" 
                class="flex items-center gap-[4px] text-[#40E0D0] font-medium text-[14px] mt-[12px]"
            >
                <span x-text="expanded ? 'Weniger anzeigen' : 'Mehr anzeigen'"></span>
                <svg 
                    class="w-[16px] h-[16px] transition-transform duration-300" 
                    :class="{ 'rotate-180': expanded }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>

        {{-- More Reviews Card --}}
        <div class="border border-[#E8E8E8] rounded-[20px] p-[24px] h-[228px] w-[182px] shrink-0 flex flex-col justify-between overflow-hidden">
            <h4 class="font-bold text-[18px] text-black">
                Weitere<br>Bewertungen<br>anzeigen
            </h4>
            {{-- Stars and button --}}
            <div class="flex items-end justify-between">
                <div></div>
                <div class="relative">
                    {{-- Stars decoration --}}
                    <img src="{{ asset('images/filialen/star.png') }}" alt="star" class="absolute -top-[70px] right-[30px] min-w-[23px] min-h-[24px] w-[23px] h-[24px]">
                    <img src="{{ asset('images/filialen/star.png') }}" alt="star" class="absolute -top-[36px] -left-[40px] min-w-[35px] min-h-[36px] w-[35px] h-[36px] -rotate-[30deg]">
                    <img src="{{ asset('images/filialen/star.png') }}" alt="star" class="absolute -top-[15px] -right-[40px] min-w-[85px] min-h-[91px] w-[85px] h-[91px]">
                    {{-- Arrow button --}}
                    <a href="#" class="w-[34px] h-[34px] rounded-full bg-black flex items-center justify-center relative z-10">
                        <svg class="w-[20px] h-[20px] text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
