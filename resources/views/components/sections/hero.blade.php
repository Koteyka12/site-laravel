{{-- Hero Section --}}
<section class="pt-[30px] md:pt-[70px] pb-[30px]">
    <div class="flex flex-col lg:flex-row gap-[15px] md:gap-[20px]">
        {{-- Left: Main Hero Block --}}
        <div class="relative w-full lg:w-[793px] h-[158px] md:h-[363px] rounded-[20px] bg-[#F6F6F6] bg-right-bottom bg-no-repeat bg-cover" style="background-image: url('{{ asset('images/home/hero-banner.png') }}');">
            {{-- Text Content --}}
            <div class="absolute left-[20px] md:left-[70px] top-[20px] md:top-[51px] w-[170px] md:w-[339px]">
                <h1 class="font-bold text-[24px] md:text-[36px] leading-[30px] md:leading-[46px] text-brand-cyan mb-[10px] md:mb-[22px]">
                    Herzliche Pflege in sicheren Händen
                </h1>
                <p class="hidden md:block font-normal text-[18px] leading-[26px] text-black">
                    Wir bieten Ihnen aufmerksamen Service und hohe Qualität, auf die Sie sich verlassen können
                </p>
            </div>
        </div>

        {{-- Right: Two Cards --}}
        <div class="flex flex-col gap-[15px] md:gap-[20px]">
            {{-- Card 1: Arbeit (border) --}}
            <a href="/karriere" class="block w-full lg:w-[387px] h-[100px] md:h-[142px] border-2 border-[#E8E8E8] rounded-[20px] px-[20px] md:px-[24px] py-[18px] md:py-[22px] hover:border-brand-cyan transition-colors">
                <h2 class="font-semibold text-[18px] md:text-[24px] leading-[22px] md:leading-[24px] text-black mb-[20px] md:mb-[54px]">
                    Arbeit bei der Pflegegruppe
                </h2>
                <span class="font-medium text-[16px] md:text-[18px] leading-[18px] text-[#65D5F6]">
                    Mehr
                </span>
            </a>

            {{-- Card 2: Pflegeleistungen (green bg with pattern) --}}
            <a href="/leistungen" class="block w-full lg:w-[387px] h-[140px] md:h-[200px] rounded-[20px] px-[20px] md:px-[24px] py-[18px] hover:opacity-90 transition-opacity bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/home/uhod.png') }}');">
                <h2 class="font-semibold text-[18px] md:text-[24px] leading-[24px] md:leading-[32px] text-black mb-[20px] md:mb-[40px]">
                    Professionelle Pflegeleistungen in der gesamten Rhein-Main Region
                </h2>
                <span class="font-medium text-[16px] md:text-[18px] leading-[18px] text-black">
                    Mehr
                </span>
            </a>
        </div>
    </div>
</section>
