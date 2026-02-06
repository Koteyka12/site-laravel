{{-- Professionelle Pflegeleistungen Section --}}

{{-- Mobile Version --}}
<section class="md:hidden py-[30px]" x-data="{ activeService: 'grundpflege' }">
    {{-- Section Header --}}
    <div class="text-center mb-[20px]">
        <h2 class="text-[24px] font-bold text-[#1E1E1E] mb-[10px]">
            Professionelle Pflegeleistungen
        </h2>
        <p class="text-[16px] font-medium text-[#1E1E1E]">
            Erstklassige Betreuung für Personen mit Pflegebedarf mit folgendem Leistungsangebot
        </p>
    </div>

    {{-- Service Tabs --}}
    <div class="overflow-x-auto -mx-[20px] px-[20px] [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none] mb-[20px]">
        <div class="grid grid-rows-3 grid-flow-col auto-cols-max gap-[8px]">
            <button type="button" @click="activeService = 'grundpflege'"
                :class="activeService === 'grundpflege' ? 'bg-brand-cyan text-white' : 'bg-[#F6F6F6] text-black'"
                class="px-[14px] py-[8px] rounded-full text-[16px] font-medium transition-colors whitespace-nowrap">
                Grundpflege
            </button>
            <button type="button" @click="activeService = 'hilfe-op'"
                :class="activeService === 'hilfe-op' ? 'bg-brand-cyan text-white' : 'bg-[#F6F6F6] text-black'"
                class="px-[14px] py-[8px] rounded-full text-[16px] font-medium transition-colors whitespace-nowrap">
                Hilfe bei OP/Krankheit
            </button>
            <button type="button" @click="activeService = 'behandlungspflege'"
                :class="activeService === 'behandlungspflege' ? 'bg-brand-cyan text-white' : 'bg-[#F6F6F6] text-black'"
                class="px-[14px] py-[8px] rounded-full text-[16px] font-medium transition-colors whitespace-nowrap">
                Behandlungspflege
            </button>
            <button type="button" @click="activeService = 'beratung'"
                :class="activeService === 'beratung' ? 'bg-brand-cyan text-white' : 'bg-[#F6F6F6] text-black'"
                class="px-[14px] py-[8px] rounded-full text-[16px] font-medium transition-colors whitespace-nowrap">
                Beratungseinsätze
            </button>
            <button type="button" @click="activeService = 'schwangere'"
                :class="activeService === 'schwangere' ? 'bg-brand-cyan text-white' : 'bg-[#F6F6F6] text-black'"
                class="px-[14px] py-[8px] rounded-full text-[16px] font-medium transition-colors whitespace-nowrap">
                Hilfe für Schwangere
            </button>
            <button type="button" @click="activeService = 'haushaltshilfe'"
                :class="activeService === 'haushaltshilfe' ? 'bg-brand-cyan text-white' : 'bg-[#F6F6F6] text-black'"
                class="px-[14px] py-[8px] rounded-full text-[16px] font-medium transition-colors whitespace-nowrap">
                Haushaltshilfe
            </button>
        </div>
    </div>

    {{-- Grundpflege Card --}}
    <div x-show="activeService === 'grundpflege'" class="bg-white rounded-[20px] border border-[#E5E5E5] overflow-hidden">
        <div class="p-[15px]">
            <img src="{{ asset('images/leistungen/card1.png') }}" alt="Grundpflege" class="w-full h-[180px] object-cover rounded-[15px] mb-[15px]">
            <h3 class="text-[20px] font-bold text-[#1E1E1E] mb-[10px]">Grundpflege</h3>
            <p class="text-[14px] text-[#4A4A4A] leading-[20px] mb-[15px]">
                Zur Grundpflege gehören Leistungen zur Körperpflege, Ernährung sowie zur Förderung von Mobilität und Eigenständigkeit. Unsere Pflegekräfte unterstützen Sie zuverlässig beim Waschen, Anziehen, der Nahrungsaufnahme und beim Wechsel von Inkontinenzmaterialien. Ziel ist es, Ihre Selbständigkeit möglichst lange zu erhalten und Ihre Lebensqualität zu fördern. Unser ambulanter Pflegedienst bietet Grundpflege zu Hause in Ihrer Region - individuell, empathisch und fachgerecht. Lassen Sie sich unverbindlich beraten.
            </p>
            <div class="flex items-center gap-2 mb-[15px]">
                <svg class="w-[20px] h-[20px] shrink-0" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="10" fill="#E0FFCF"/>
                    <path d="M9 12l2 2 4-4" stroke="#8BE567" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="text-[13px] font-medium text-[#4A4A4A]">Abrechnung mit allen Krankenkassen</span>
            </div>
            <a href="/leistungen/grundpflege" class="block w-full h-[44px] bg-brand-cyan rounded-[10px] flex items-center justify-center font-semibold text-[16px] text-white">
                Ansehen
            </a>
        </div>
    </div>

    {{-- Behandlungspflege Card --}}
    <div x-show="activeService === 'behandlungspflege'" class="bg-white rounded-[20px] border border-[#E5E5E5] overflow-hidden">
        <div class="p-[15px]">
            <img src="{{ asset('images/leistungen/card2.png') }}" alt="Behandlungspflege" class="w-full h-[180px] object-cover rounded-[15px] mb-[15px]">
            <h3 class="text-[20px] font-bold text-[#1E1E1E] mb-[10px]">Behandlungspflege</h3>
            <p class="text-[14px] text-[#4A4A4A] leading-[20px] mb-[15px]">
                Behandlungspflege ist ärztlich verordnet und umfasst medizinische Leistungen der häuslichen Krankenpflege nach SGB V. Dazu zählen die Verabreichung von Medikamenten, Insulininjektionen und Augentropfen sowie das An- und Ausziehen von Kompressionsstrümpfen. Unsere examinierten Pflegefachkräfte führen alle Maßnahmen sicher, hygienisch und nach ärztlicher Anweisung durch.
            </p>
            <div class="flex items-center gap-2 mb-[15px]">
                <svg class="w-[20px] h-[20px] shrink-0" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="10" fill="#E0FFCF"/>
                    <path d="M9 12l2 2 4-4" stroke="#8BE567" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="text-[13px] font-medium text-[#4A4A4A]">Abrechnung mit allen Krankenkassen</span>
            </div>
            <a href="/leistungen/behandlungspflege" class="block w-full h-[44px] bg-brand-cyan rounded-[10px] flex items-center justify-center font-semibold text-[16px] text-white">
                Ansehen
            </a>
        </div>
    </div>

    {{-- Placeholder cards for other services --}}
    <div x-show="activeService === 'hilfe-op'" class="bg-white rounded-[20px] border border-[#E5E5E5] overflow-hidden">
        <div class="p-[15px]">
            <div class="w-full h-[180px] bg-[#F6F6F6] rounded-[15px] mb-[15px]"></div>
            <h3 class="text-[20px] font-bold text-[#1E1E1E] mb-[10px]">Hilfe bei OP/Krankheit</h3>
            <p class="text-[14px] text-[#4A4A4A] leading-[20px] mb-[15px]">Informationen folgen in Kürze.</p>
            <a href="/leistungen" class="block w-full h-[44px] bg-brand-cyan rounded-[10px] flex items-center justify-center font-semibold text-[16px] text-white">
                Ansehen
            </a>
        </div>
    </div>

    <div x-show="activeService === 'beratung'" class="bg-white rounded-[20px] border border-[#E5E5E5] overflow-hidden">
        <div class="p-[15px]">
            <div class="w-full h-[180px] bg-[#F6F6F6] rounded-[15px] mb-[15px]"></div>
            <h3 class="text-[20px] font-bold text-[#1E1E1E] mb-[10px]">Beratungseinsätze</h3>
            <p class="text-[14px] text-[#4A4A4A] leading-[20px] mb-[15px]">Informationen folgen in Kürze.</p>
            <a href="/leistungen" class="block w-full h-[44px] bg-brand-cyan rounded-[10px] flex items-center justify-center font-semibold text-[16px] text-white">
                Ansehen
            </a>
        </div>
    </div>

    <div x-show="activeService === 'schwangere'" class="bg-white rounded-[20px] border border-[#E5E5E5] overflow-hidden">
        <div class="p-[15px]">
            <div class="w-full h-[180px] bg-[#F6F6F6] rounded-[15px] mb-[15px]"></div>
            <h3 class="text-[20px] font-bold text-[#1E1E1E] mb-[10px]">Hilfe für Schwangere</h3>
            <p class="text-[14px] text-[#4A4A4A] leading-[20px] mb-[15px]">Informationen folgen in Kürze.</p>
            <a href="/leistungen" class="block w-full h-[44px] bg-brand-cyan rounded-[10px] flex items-center justify-center font-semibold text-[16px] text-white">
                Ansehen
            </a>
        </div>
    </div>

    <div x-show="activeService === 'haushaltshilfe'" class="bg-white rounded-[20px] border border-[#E5E5E5] overflow-hidden">
        <div class="p-[15px]">
            <div class="w-full h-[180px] bg-[#F6F6F6] rounded-[15px] mb-[15px]"></div>
            <h3 class="text-[20px] font-bold text-[#1E1E1E] mb-[10px]">Haushaltshilfe</h3>
            <p class="text-[14px] text-[#4A4A4A] leading-[20px] mb-[15px]">Informationen folgen in Kürze.</p>
            <a href="/leistungen" class="block w-full h-[44px] bg-brand-cyan rounded-[10px] flex items-center justify-center font-semibold text-[16px] text-white">
                Ansehen
            </a>
        </div>
    </div>
</section>

{{-- Desktop Version --}}
<section class="hidden md:block py-[60px]">
    <div class="container mx-auto px-4">
        {{-- Section Header --}}
        <div class="text-center mb-[50px]">
            <h2 class="text-[40px] font-bold text-[#1E1E1E] mb-4">
                Professionelle Pflegeleistungen
            </h2>
            <p class="text-[26px] font-medium text-[#1E1E1E]">
                Erstklassige Betreuung fur Personen mit Pflegebedarf mit folgendem Leistungsangebot
            </p>
        </div>

        {{-- Services Cards --}}
        <div class="flex flex-col gap-6">
            {{-- Grundpflege Card --}}
            <div class="bg-white rounded-[30px] border border-[#E5E5E5] p-6 flex flex-col md:flex-row gap-6">
                {{-- Image --}}
                <div class="w-full md:w-[280px] h-[200px] md:h-auto shrink-0">
                    <img 
                        src="{{ asset('images/leistungen/card1.png') }}" 
                        alt="Behandlungspflege" 
                        class="w-full h-full min-h-[200px] object-cover rounded-[15px]"
                    >
                </div>
                
                {{-- Content --}}
                <div class="flex flex-col justify-center">
                    <h3 class="text-[24px] font-bold text-[#1E1E1E] mb-4">Grundpflege</h3>
                    <p class="text-[16px] text-[#4A4A4A] leading-relaxed mb-6">
                        Zur Grundpflege gehören Leistungen zur Körperpflege, Ernährung sowie zur Förderung von Mobilität und Eigenständigkeit. Unsere Pflegekräfte unterstützen Sie zuverlässig beim Waschen, Anziehen, der Nahrungsaufnahme und beim Wechsel von Inkontinenzmaterialien. Ziel ist es, Ihre Selbständigkeit möglichst lange zu erhalten und Ihre Lebensqualität zu fördern. Unser ambulanter Pflegedienst bietet Grundpflege zu Hause in Ihrer Region - individuell, empathisch und fachgerecht.
                    </p>
                    
                    {{-- Actions --}}
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="#kontakt" class="inline-flex items-center justify-center px-6 py-3 bg-[#64CEED] hover:bg-[#00B396] text-white font-medium rounded-[10px] transition-colors">
                            Anfrage senden
                        </a>
                        <div class="flex items-center gap-2">
                            <svg class="w-8 h-9" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2L4 5v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V5l-8-3z" fill="#E0FFCF"/>
                                <path d="M9 12l2 2 4-4" stroke="#8BE567" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text-[14px] font-medium text-[#4A4A4A]">Abrechnung mit allen Krankenkassen</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Behandlungspflege Card --}}
            <div class="bg-white rounded-[30px] border border-[#E5E5E5] p-6 flex flex-col md:flex-row gap-6">
                {{-- Image --}}
                <div class="w-full md:w-[280px] h-[200px] md:h-auto shrink-0">
                    <img 
                        src="{{ asset('images/leistungen/card2.png') }}" 
                        alt="Behandlungspflege" 
                        class="w-full h-full min-h-[200px] object-cover rounded-[15px]"
                    >
                </div>
                
                {{-- Content --}}
                <div class="flex flex-col justify-center">
                    <h3 class="text-[24px] font-bold text-[#1E1E1E] mb-4">Behandlungspflege</h3>
                    <p class="text-[16px] text-[#4A4A4A] leading-relaxed mb-6">
                        Behandlungspflege ist ärztlich verordnet und umfasst medizinische Leistungen der häuslichen Krankenpflege nach SGB V. Dazu zählen die Verabreichung von Medikamenten, Insulininjektionen und Augentropfen sowie das An- und Ausziehen von Kompressionsstrümpfen. Unsere examinierten Pflegefachkräfte führen alle Maßnahmen sicher, hygienisch und nach ärztlicher Anweisung durch. Wenden Sie sich an uns, wenn Sie qualifizierte medizinische Behandlungspflege zu Hause benötigen.
                    </p>
                    
                    {{-- Actions --}}
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="#kontakt" class="inline-flex items-center justify-center px-6 py-3 bg-[#64CEED] hover:bg-[#00B396] text-white font-medium rounded-[10px] transition-colors">
                            Anfrage senden
                        </a>
                        <div class="flex items-center gap-2">
                            <svg class="w-8 h-9" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2L4 5v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V5l-8-3z" fill="#E0FFCF"/>
                                <path d="M9 12l2 2 4-4" stroke="#8BE567" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text-[14px] font-medium text-[#4A4A4A]">Abrechnung mit allen Krankenkassen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
