{{-- Hero Section --}}
<section class="pt-[70px] pb-[30px]">
    <div class="flex gap-[20px]">
        {{-- Left: Main Hero Block --}}
        <div class="relative w-[793px] h-[363px] rounded-[20px] bg-[#F6F6F6] bg-right-bottom bg-no-repeat" style="background-image: url('{{ asset('images/home/hero-banner.png') }}'); background-size: cover;">
            {{-- Text Content --}}
            <div class="absolute left-[70px] top-[51px] w-[339px]">
                <h1 class="font-bold text-[36px] leading-[46px] text-brand-cyan mb-[22px]">
                    Herzliche Pflege in sicheren Händen
                </h1>
                <p class="font-normal text-[18px] leading-[26px] text-black">
                    Wir bieten Ihnen aufmerksamen Service und hohe Qualität, auf die Sie sich verlassen können
                </p>
            </div>
        </div>

        {{-- Right: Two Cards --}}
        <div class="flex flex-col gap-[20px]">
            {{-- Card 1: Arbeit (border) --}}
            <a href="/karriere" class="block w-[387px] h-[142px] border-2 border-[#E8E8E8] rounded-[20px] px-[24px] py-[22px] hover:border-brand-cyan transition-colors">
                <h2 class="font-semibold text-[24px] leading-[24px] text-black mb-[54px]">
                    Arbeit bei der Pflegegruppe
                </h2>
                <span class="font-medium text-[18px] leading-[18px] text-[#65D5F6]">
                    Mehr
                </span>
            </a>

            {{-- Card 2: Pflegeleistungen (green bg with pattern) --}}
            <a href="/leistungen" class="block w-[387px] h-[200px] rounded-[20px] px-[24px] py-[18px] hover:opacity-90 transition-opacity bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/home/uhod.png') }}');">
                <h2 class="font-semibold text-[24px] leading-[32px] text-black mb-[40px]">
                    Professionelle Pflegeleistungen in der gesamten Rhein-Main Region
                </h2>
                <span class="font-medium text-[18px] leading-[18px] text-black">
                    Mehr
                </span>
            </a>
        </div>
    </div>
</section>
