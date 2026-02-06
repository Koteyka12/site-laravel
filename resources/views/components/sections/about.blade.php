{{-- О нас / Verlässlicher Pflegepartner --}}
<section class="pt-[70px] pb-[30px]">
    {{-- Section Header --}}
    <div class="text-center mb-[70px]">
        <h2 class="font-bold text-[40px] leading-[40px] text-black mb-[16px]">
            Verlässlicher Pflegepartner
        </h2>
        <p class="font-medium text-[26px] leading-[26px] text-black">
            Unser Ziel ist es, die erste Wahl für zuverlässige und professionelle Pflege zu sein
        </p>
    </div>

    {{-- Content --}}
    <div class="flex gap-[60px] items-start">
        {{-- Left: Text Content --}}
        <div class="w-[400px] shrink-0">
            <h3 class="font-bold text-[28px] leading-[32px] text-black mb-[20px]">
                Zur Pflegegruppe Rhein-Main gehören Pflegedienst City und MediVita
            </h3>
            <p class="font-normal text-[16px] leading-[24px] text-black mb-[30px]">
                Gemeinsame Qualitätsstandards in jedem unserer Unternehmen gewährleisten transparente Prozesse, mehrsprachige Beratung, Zusammenarbeit mit Angehörigen und Ärzten.
            </p>

            {{-- Cities --}}
            <div>
                <p class="font-medium text-[16px] leading-[16px] text-black mb-[16px]">
                    Wir sind aktiv in:
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="inline-flex items-center justify-center h-9 px-4 rounded-full text-sm text-[#818181] bg-[#F6F6F6]">Frankfurt</span>
                    <span class="inline-flex items-center justify-center h-9 px-4 rounded-full text-sm text-[#818181] bg-[#F6F6F6]">Offenbach</span>
                    <span class="inline-flex items-center justify-center h-9 px-4 rounded-full text-sm text-[#818181] bg-[#F6F6F6]">Brückobel</span>
                    <span class="inline-flex items-center justify-center h-9 px-4 rounded-full text-sm text-[#818181] bg-[#F6F6F6]">Maintal</span>
                    <span class="inline-flex items-center justify-center h-9 px-4 rounded-full text-sm text-[#818181] bg-[#F6F6F6]">Darmstadt</span>
                    <span class="inline-flex items-center justify-center h-9 px-4 rounded-full text-sm text-[#818181] bg-[#F6F6F6]">Oberursel</span>
                    <span class="inline-flex items-center justify-center h-9 px-4 rounded-full text-sm text-[#818181] bg-[#F6F6F6]">Bad Homburg</span>
                    <span class="inline-flex items-center justify-center h-9 px-4 rounded-full text-sm text-[#818181] bg-[#F6F6F6]">Bad Vilbel</span>
                    <span class="inline-flex items-center justify-center h-9 px-4 rounded-full text-sm text-[#818181] bg-[#F6F6F6]">Hanau</span>
                    <span class="inline-flex items-center justify-center h-9 px-4 rounded-full text-sm text-[#818181] bg-[#F6F6F6]">Erlensee</span>
                </div>
            </div>
        </div>

        {{-- Right: Image with Video Play Button --}}
        <div class="flex-1 relative" x-data="{ showVideo: false }">
            <button
                type="button"
                @click="showVideo = true"
                class="relative rounded-[20px] overflow-hidden block group cursor-pointer"
            >
                <img src="{{ asset('images/home/team2.png') }}" alt="Unser Team" class="w-full h-auto group-hover:scale-105 transition-transform duration-300">
                {{-- Video Play Button --}}
                <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="124" height="128" viewBox="0 0 124 128" fill="none">
                        <g filter="url(#filter0_d_2_1699)">
                            <path d="M77.1544 58.4838C81.1249 60.7992 81.1249 66.5347 77.1544 68.8498L52.0229 83.5073C48.0225 85.8407 43 82.9554 43 78.3245V49.0091C43 44.3781 48.0225 41.4932 52.0229 43.8262L77.1544 58.4838Z" fill="#FAFAFB"/>
                        </g>
                        <defs>
                            <filter id="filter0_d_2_1699" x="0" y="0" width="123.132" height="127.334" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset/>
                                <feGaussianBlur stdDeviation="21.5"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.48 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_1699"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_1699" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                </span>
            </button>

            {{-- Video Modal --}}
            <div
                x-show="showVideo"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @keydown.escape.window="showVideo = false"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black/80"
                style="display: none;"
            >
                {{-- Modal Content --}}
                <div
                    @click.outside="showVideo = false"
                    class="relative w-full max-w-[900px] mx-4"
                >
                    {{-- Close Button --}}
                    <button
                        type="button"
                        @click="showVideo = false"
                        class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors"
                    >
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    {{-- Video Container --}}
                    <div class="relative pt-[56.25%] bg-black rounded-lg overflow-hidden">
                        <template x-if="showVideo">
                            <iframe
                                class="absolute inset-0 w-full h-full"
                                src="https://youtu.be/6csY0guPNpA"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
