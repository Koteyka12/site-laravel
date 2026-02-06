{{-- Universal Hero Section --}}
@props([
    'image' => '',
    'title' => '',
    'titleLine2' => '',
    'subtitle' => '',
])

<section class="pt-[30px] md:pt-[70px] pb-[30px]">
    <div 
        class="relative w-full min-h-[216px] md:min-h-[363px] rounded-[20px] overflow-hidden bg-[#F6F6F6] bg-no-repeat bg-[length:auto_80%] bg-[right_-80px_bottom] md:bg-cover md:bg-right"
        style="background-image: url('{{ asset($image) }}');"
    >
        {{-- Content Container --}}
        <div class="relative z-10 flex h-full min-h-[216px] md:min-h-[363px]">
            {{-- Text Content --}}
            <div class="max-w-[50%] md:max-w-[740px] py-[20px] md:py-[40px] pl-[20px] md:pl-[70px] pr-[0px] md:pr-[30px]">
                <h1 class="font-bold text-[24px] md:text-[36px] leading-[30px] md:leading-[46px] mb-[10px] md:mb-[20px]">
                    <span class="text-brand-cyan">{!! $title !!}</span>
                    @if($titleLine2)
                        <br><span class="text-[#7D9637]">{!! $titleLine2 !!}</span>
                    @endif
                </h1>
                <p class="hidden md:block font-normal text-[18px] leading-[26px] text-black max-w-[533px]">
                    {!! $subtitle !!}
                </p>
            </div>
        </div>
    </div>
</section>
