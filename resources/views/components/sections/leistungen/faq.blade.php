{{-- Häufig gestellte Fragen Section --}}
<section class="py-[60px]">
    <div class="container mx-auto px-4">
        {{-- Section Header --}}
        <h2 class="text-[40px] font-semibold text-black text-center mb-8">
            Häufig gestellte Fragen
        </h2>

        {{-- Category Tabs --}}
        <div x-data="{ activeTab: 'allgemein' }" class="flex flex-col items-center mb-5">
            {{-- Tabs --}}
            <div class="flex flex-wrap justify-center gap-3 mb-[70px] max-w-[800px]">
                <button 
                    @click="activeTab = 'allgemein'"
                    :class="activeTab === 'allgemein' ? 'bg-[#64CEED] text-white' : 'bg-[#F6F6F6] text-black'"
                    class="px-6 py-3 rounded-full text-[18px] font-semibold transition-colors"
                >
                    Allgemeine Fragen
                </button>
                <button 
                    @click="activeTab = 'kosten'"
                    :class="activeTab === 'kosten' ? 'bg-[#64CEED] text-white' : 'bg-[#F6F6F6] text-black'"
                    class="px-6 py-3 rounded-full text-[18px] font-semibold transition-colors"
                >
                    Kosten und Finanzierung
                </button>
                <button 
                    @click="activeTab = 'pflegekraefte'"
                    :class="activeTab === 'pflegekraefte' ? 'bg-[#64CEED] text-white' : 'bg-[#F6F6F6] text-black'"
                    class="px-6 py-3 rounded-full text-[18px] font-semibold transition-colors"
                >
                    Pflegekräfte und Qualität
                </button>
                <button 
                    @click="activeTab = 'organisation'"
                    :class="activeTab === 'organisation' ? 'bg-[#64CEED] text-white' : 'bg-[#F6F6F6] text-black'"
                    class="px-6 py-3 rounded-full text-[18px] font-semibold transition-colors"
                >
                    Organisatorisches
                </button>
                <button 
                    @click="activeTab = 'spezielle'"
                    :class="activeTab === 'spezielle' ? 'bg-[#64CEED] text-white' : 'bg-[#F6F6F6] text-black'"
                    class="px-6 py-3 rounded-full text-[18px] font-semibold transition-colors"
                >
                    Spezielle Leistungen
                </button>
                <button 
                    @click="activeTab = 'vertrauen'"
                    :class="activeTab === 'vertrauen' ? 'bg-[#64CEED] text-white' : 'bg-[#F6F6F6] text-black'"
                    class="px-6 py-3 rounded-full text-[18px] font-semibold transition-colors"
                >
                    Vertrauen und Bewertungen
                </button>
            </div>

            {{-- FAQ Accordion --}}
            <div class="w-full max-w-[1200px]" x-data="{ openItem: null }">
                {{-- Allgemeine Fragen --}}
                <div x-show="activeTab === 'allgemein'">
                    {{-- Item 1 --}}
                    <div class="border-t border-[#E7E7E7]">
                        <button 
                            @click="openItem = openItem === 1 ? null : 1"
                            class="w-full flex items-center justify-between py-5"
                        >
                            <span class="text-[20px] font-semibold text-black text-left">Wann wird Pflege benötigt?</span>
                            <svg 
                                class="w-3 h-2 shrink-0 transition-transform duration-200"
                                :class="openItem === 1 ? 'rotate-180' : ''"
                                viewBox="0 0 12 8" 
                                fill="none"
                            >
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div 
                            x-show="openItem === 1" 
                            x-collapse
                            class="pb-5"
                        >
                            <p class="text-[16px] text-black leading-[26px]">
                                Der Bedarf an Pflege (Pflegebedürftigkeit) gemäß den gesetzlichen Bestimmungen kann in jedem Lebensabschnitt entstehen. Personen gelten als pflegebedürftig, wenn sie aufgrund ihrer Gesundheit nicht mehr in der Lage sind, ein eigenständiges Leben zu führen und auf Hilfe angewiesen sind.
                            </p>
                            <p class="text-[16px] text-black leading-[26px] mt-4">
                                Dies betrifft sowohl physische als auch psychische Einschränkungen, die sie nicht eigenständig ausgleichen können.
                            </p>
                            <p class="text-[16px] text-black leading-[26px] mt-4">
                                Ein wichtiger Faktor ist die Dauerhaftigkeit dieses Zustands, üblicherweise mindestens sechs Monate, sowie dessen Schwere, wie in § 5 des Sozialgesetzbuchs XI (SGB XI) festgelegt.
                            </p>
                        </div>
                    </div>

                    {{-- Item 2 --}}
                    <div class="border-t border-[#E7E7E7]">
                        <button 
                            @click="openItem = openItem === 2 ? null : 2"
                            class="w-full flex items-center justify-between py-5"
                        >
                            <span class="text-[20px] font-semibold text-black text-left">Was ist ein Pflegegrad?</span>
                            <svg 
                                class="w-3 h-2 shrink-0 transition-transform duration-200"
                                :class="openItem === 2 ? 'rotate-180' : ''"
                                viewBox="0 0 12 8" 
                                fill="none"
                            >
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div 
                            x-show="openItem === 2" 
                            x-collapse
                            class="pb-5"
                        >
                            <p class="text-[16px] text-black leading-[26px]">
                                Ein Pflegegrad beschreibt das Ausmaß der Beeinträchtigung der Selbstständigkeit einer Person. Es gibt fünf Pflegegrade, wobei Pflegegrad 1 die geringste und Pflegegrad 5 die schwerste Beeinträchtigung darstellt.
                            </p>
                        </div>
                    </div>

                    {{-- Item 3 --}}
                    <div class="border-t border-[#E7E7E7]">
                        <button 
                            @click="openItem = openItem === 3 ? null : 3"
                            class="w-full flex items-center justify-between py-5"
                        >
                            <span class="text-[20px] font-semibold text-black text-left">Warum ist der Pflegegrad wichtig?</span>
                            <svg 
                                class="w-3 h-2 shrink-0 transition-transform duration-200"
                                :class="openItem === 3 ? 'rotate-180' : ''"
                                viewBox="0 0 12 8" 
                                fill="none"
                            >
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div 
                            x-show="openItem === 3" 
                            x-collapse
                            class="pb-5"
                        >
                            <p class="text-[16px] text-black leading-[26px]">
                                Der Pflegegrad bestimmt, welche Leistungen Sie von der Pflegekasse erhalten. Je höher der Pflegegrad, desto mehr Unterstützung steht Ihnen zu.
                            </p>
                        </div>
                    </div>

                    {{-- Item 4 --}}
                    <div class="border-t border-[#E7E7E7]">
                        <button 
                            @click="openItem = openItem === 4 ? null : 4"
                            class="w-full flex items-center justify-between py-5"
                        >
                            <span class="text-[20px] font-semibold text-black text-left">Wie wird der Pflegegrad bestimmt?</span>
                            <svg 
                                class="w-3 h-2 shrink-0 transition-transform duration-200"
                                :class="openItem === 4 ? 'rotate-180' : ''"
                                viewBox="0 0 12 8" 
                                fill="none"
                            >
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div 
                            x-show="openItem === 4" 
                            x-collapse
                            class="pb-5"
                        >
                            <p class="text-[16px] text-black leading-[26px]">
                                Der Pflegegrad wird durch den Medizinischen Dienst (MD) ermittelt. Ein Gutachter besucht Sie zu Hause und bewertet Ihre Selbstständigkeit in verschiedenen Bereichen.
                            </p>
                        </div>
                    </div>

                    {{-- Item 5 --}}
                    <div class="border-t border-[#E7E7E7]">
                        <button 
                            @click="openItem = openItem === 5 ? null : 5"
                            class="w-full flex items-center justify-between py-5"
                        >
                            <span class="text-[20px] font-semibold text-black text-left">Ist Pflegedienst City auch nachts und am Wochenende erreichbar?</span>
                            <svg 
                                class="w-3 h-2 shrink-0 transition-transform duration-200"
                                :class="openItem === 5 ? 'rotate-180' : ''"
                                viewBox="0 0 12 8" 
                                fill="none"
                            >
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div 
                            x-show="openItem === 5" 
                            x-collapse
                            class="pb-5"
                        >
                            <p class="text-[16px] text-black leading-[26px]">
                                Ja, unser Pflegedienst ist rund um die Uhr erreichbar - auch nachts, an Wochenenden und Feiertagen.
                            </p>
                        </div>
                    </div>

                    {{-- Item 6 --}}
                    <div class="border-t border-[#E7E7E7] border-b">
                        <button 
                            @click="openItem = openItem === 6 ? null : 6"
                            class="w-full flex items-center justify-between py-5"
                        >
                            <span class="text-[20px] font-semibold text-black text-left">Wie lange dauert es, bis die Pflege beginnen kann?</span>
                            <svg 
                                class="w-3 h-2 shrink-0 transition-transform duration-200"
                                :class="openItem === 6 ? 'rotate-180' : ''"
                                viewBox="0 0 12 8" 
                                fill="none"
                            >
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div 
                            x-show="openItem === 6" 
                            x-collapse
                            class="pb-5"
                        >
                            <p class="text-[16px] text-black leading-[26px]">
                                Nach Ihrer Anfrage können wir in der Regel innerhalb weniger Tage mit der Pflege beginnen. In dringenden Fällen auch kurzfristiger.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Kosten und Finanzierung --}}
                <div x-show="activeTab === 'kosten'">
                    <div class="border-t border-[#E7E7E7] border-b">
                        <button 
                            @click="openItem = openItem === 10 ? null : 10"
                            class="w-full flex items-center justify-between py-5"
                        >
                            <span class="text-[20px] font-semibold text-black text-left">Welche Kosten übernimmt die Pflegekasse?</span>
                            <svg 
                                class="w-3 h-2 shrink-0 transition-transform duration-200"
                                :class="openItem === 10 ? 'rotate-180' : ''"
                                viewBox="0 0 12 8" 
                                fill="none"
                            >
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div 
                            x-show="openItem === 10" 
                            x-collapse
                            class="pb-5"
                        >
                            <p class="text-[16px] text-black leading-[26px]">
                                Die Pflegekasse übernimmt je nach Pflegegrad unterschiedliche Leistungen. Wir beraten Sie gerne zu Ihren individuellen Ansprüchen.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Pflegekräfte und Qualität --}}
                <div x-show="activeTab === 'pflegekraefte'">
                    <div class="border-t border-[#E7E7E7] border-b">
                        <button 
                            @click="openItem = openItem === 20 ? null : 20"
                            class="w-full flex items-center justify-between py-5"
                        >
                            <span class="text-[20px] font-semibold text-black text-left">Wie qualifiziert sind Ihre Pflegekräfte?</span>
                            <svg 
                                class="w-3 h-2 shrink-0 transition-transform duration-200"
                                :class="openItem === 20 ? 'rotate-180' : ''"
                                viewBox="0 0 12 8" 
                                fill="none"
                            >
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div 
                            x-show="openItem === 20" 
                            x-collapse
                            class="pb-5"
                        >
                            <p class="text-[16px] text-black leading-[26px]">
                                Alle unsere Pflegekräfte sind examiniert und verfügen über langjährige Erfahrung in der ambulanten Pflege.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Organisatorisches --}}
                <div x-show="activeTab === 'organisation'">
                    <div class="border-t border-[#E7E7E7] border-b">
                        <button 
                            @click="openItem = openItem === 30 ? null : 30"
                            class="w-full flex items-center justify-between py-5"
                        >
                            <span class="text-[20px] font-semibold text-black text-left">Wie läuft die Erstberatung ab?</span>
                            <svg 
                                class="w-3 h-2 shrink-0 transition-transform duration-200"
                                :class="openItem === 30 ? 'rotate-180' : ''"
                                viewBox="0 0 12 8" 
                                fill="none"
                            >
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div 
                            x-show="openItem === 30" 
                            x-collapse
                            class="pb-5"
                        >
                            <p class="text-[16px] text-black leading-[26px]">
                                Die Erstberatung ist kostenlos und unverbindlich. Wir besuchen Sie zu Hause und besprechen Ihre individuellen Bedürfnisse.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Spezielle Leistungen --}}
                <div x-show="activeTab === 'spezielle'">
                    <div class="border-t border-[#E7E7E7] border-b">
                        <button 
                            @click="openItem = openItem === 40 ? null : 40"
                            class="w-full flex items-center justify-between py-5"
                        >
                            <span class="text-[20px] font-semibold text-black text-left">Bieten Sie auch Verhinderungspflege an?</span>
                            <svg 
                                class="w-3 h-2 shrink-0 transition-transform duration-200"
                                :class="openItem === 40 ? 'rotate-180' : ''"
                                viewBox="0 0 12 8" 
                                fill="none"
                            >
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div 
                            x-show="openItem === 40" 
                            x-collapse
                            class="pb-5"
                        >
                            <p class="text-[16px] text-black leading-[26px]">
                                Ja, wir bieten Verhinderungspflege an, wenn pflegende Angehörige eine Auszeit benötigen.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Vertrauen und Bewertungen --}}
                <div x-show="activeTab === 'vertrauen'">
                    <div class="border-t border-[#E7E7E7] border-b">
                        <button 
                            @click="openItem = openItem === 50 ? null : 50"
                            class="w-full flex items-center justify-between py-5"
                        >
                            <span class="text-[20px] font-semibold text-black text-left">Wie kann ich Ihre Qualität überprüfen?</span>
                            <svg 
                                class="w-3 h-2 shrink-0 transition-transform duration-200"
                                :class="openItem === 50 ? 'rotate-180' : ''"
                                viewBox="0 0 12 8" 
                                fill="none"
                            >
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div 
                            x-show="openItem === 50" 
                            x-collapse
                            class="pb-5"
                        >
                            <p class="text-[16px] text-black leading-[26px]">
                                Sie können unsere Bewertungen auf Google und anderen Plattformen einsehen. Wir sind stolz auf unser positives Feedback.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
