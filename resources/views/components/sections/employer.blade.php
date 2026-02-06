{{-- Attraktiver Arbeitgeber --}}
<section class="pt-[40px] md:pt-[70px] pb-[30px]">
    {{-- Section Header --}}
    <div class="text-center mb-[30px] md:mb-[70px]">
        <h2 class="font-bold text-[28px] md:text-[40px] leading-[32px] md:leading-[40px] text-black mb-[12px] md:mb-[16px]">
            Attraktiver Arbeitgeber
        </h2>
        <p class="font-medium text-[18px] md:text-[26px] leading-[24px] md:leading-[38px] text-black max-w-[944px] mx-auto">
            Die Pflegegruppe Rhein-Main ist ein multikulturelles Team, in dem sich jeder wertgeschätzt, unterstützt und individuell gefördert wird
        </p>
    </div>

    {{-- Content --}}
    <div class="flex flex-col md:flex-row gap-[20px] items-center">
        {{-- Image (first on mobile) --}}
        <div class="w-full md:w-[589px] h-[250px] md:h-[530px] shrink-0 bg-[#F6F6F7] rounded-[20px] overflow-hidden md:order-2">
            <img
                src="{{ asset('images/home/car.png') }}"
                alt="Pflegedienst City Mitarbeiterin"
                class="w-full h-full object-cover"
            >
        </div>

        {{-- Benefits List (second on mobile) --}}
        <div class="w-full md:w-[590px] md:order-1">
            {{-- Mobile: Horizontal scroll --}}
            <div class="md:hidden overflow-x-auto -mx-[20px] px-[20px] [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                <div class="flex gap-[10px] w-max">
                    {{-- Benefit Item 1 --}}
                    <div class="flex flex-col items-start gap-[10px] p-[15px] w-[192px] h-[142px] border-2 border-[#E8E8E8] rounded-[20px]">
                        <span class="w-[28px] h-[28px] rounded-full bg-[#E0FFCF] flex items-center justify-center shrink-0">
                            <svg class="w-[14px] h-[14px] text-[#8BE567]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="font-medium text-[14px] leading-[18px] text-black">Weiterbildung-skurse</span>
                    </div>

                    {{-- Benefit Item 2 --}}
                    <div class="flex flex-col items-start gap-[10px] p-[15px] w-[192px] h-[142px] border-2 border-[#E8E8E8] rounded-[20px]">
                        <span class="w-[28px] h-[28px] rounded-full bg-[#E0FFCF] flex items-center justify-center shrink-0">
                            <svg class="w-[14px] h-[14px] text-[#8BE567]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="font-medium text-[14px] leading-[18px] text-black">flexible Arbeitsplane</span>
                    </div>

                    {{-- Benefit Item 3 --}}
                    <div class="flex flex-col items-start gap-[10px] p-[15px] w-[192px] h-[142px] border-2 border-[#E8E8E8] rounded-[20px]">
                        <span class="w-[28px] h-[28px] rounded-full bg-[#E0FFCF] flex items-center justify-center shrink-0">
                            <svg class="w-[14px] h-[14px] text-[#8BE567]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="font-medium text-[14px] leading-[18px] text-black">Dienstwagen mit Tankkarte</span>
                    </div>

                    {{-- Benefit Item 4 --}}
                    <div class="flex flex-col items-start gap-[10px] p-[15px] w-[192px] h-[142px] border-2 border-[#E8E8E8] rounded-[20px]">
                        <span class="w-[28px] h-[28px] rounded-full bg-[#E0FFCF] flex items-center justify-center shrink-0">
                            <svg class="w-[14px] h-[14px] text-[#8BE567]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="font-medium text-[14px] leading-[18px] text-black">vollständige technische Ausstattung</span>
                    </div>

                    {{-- Benefit Item 5 --}}
                    <div class="flex flex-col items-start gap-[10px] p-[15px] w-[192px] h-[142px] border-2 border-[#E8E8E8] rounded-[20px]">
                        <span class="w-[28px] h-[28px] rounded-full bg-[#E0FFCF] flex items-center justify-center shrink-0">
                            <svg class="w-[14px] h-[14px] text-[#8BE567]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="font-medium text-[14px] leading-[18px] text-black">Kollegiales Arbeitsumfeld & Benefits</span>
                    </div>
                </div>
            </div>

            {{-- Desktop: Vertical list --}}
            <div class="hidden md:flex md:flex-col gap-[20px]">
                {{-- Benefit Item 1 --}}
                <div class="flex items-center gap-[16px] h-[90px] px-[28px] border-2 border-[#E8E8E8] rounded-[20px]">
                    <span class="w-[33px] h-[34px] rounded-full bg-[#E0FFCF] flex items-center justify-center shrink-0">
                        <svg class="w-[18px] h-[18px] text-[#8BE567]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                        </svg>
                    </span>
                    <span class="font-medium text-[23px] leading-[23px] text-black">Weiterbildungskurse</span>
                </div>

                {{-- Benefit Item 2 --}}
                <div class="flex items-center gap-[16px] h-[90px] px-[28px] border-2 border-[#E8E8E8] rounded-[20px]">
                    <span class="w-[33px] h-[34px] rounded-full bg-[#E0FFCF] flex items-center justify-center shrink-0">
                        <svg class="w-[18px] h-[18px] text-[#8BE567]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                        </svg>
                    </span>
                    <span class="font-medium text-[23px] leading-[23px] text-black">flexible Arbeitsplane</span>
                </div>

                {{-- Benefit Item 3 --}}
                <div class="flex items-center gap-[16px] h-[90px] px-[28px] border-2 border-[#E8E8E8] rounded-[20px]">
                    <span class="w-[33px] h-[34px] rounded-full bg-[#E0FFCF] flex items-center justify-center shrink-0">
                        <svg class="w-[18px] h-[18px] text-[#8BE567]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                        </svg>
                    </span>
                    <span class="font-medium text-[23px] leading-[23px] text-black">Dienstwagen mit Tankkarte</span>
                </div>

                {{-- Benefit Item 4 --}}
                <div class="flex items-center gap-[16px] h-[90px] px-[28px] border-2 border-[#E8E8E8] rounded-[20px]">
                    <span class="w-[33px] h-[34px] rounded-full bg-[#E0FFCF] flex items-center justify-center shrink-0">
                        <svg class="w-[18px] h-[18px] text-[#8BE567]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                        </svg>
                    </span>
                    <span class="font-medium text-[23px] leading-[23px] text-black">vollständige technische Ausstattung</span>
                </div>

                {{-- Benefit Item 5 --}}
                <div class="flex items-center gap-[16px] h-[90px] px-[28px] border-2 border-[#E8E8E8] rounded-[20px]">
                    <span class="w-[33px] h-[34px] rounded-full bg-[#E0FFCF] flex items-center justify-center shrink-0">
                        <svg class="w-[18px] h-[18px] text-[#8BE567]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                        </svg>
                    </span>
                    <span class="font-medium text-[23px] leading-[23px] text-black">Kollegiales Arbeitsumfeld & Benefits</span>
                </div>
            </div>
        </div>
    </div>
</section>
