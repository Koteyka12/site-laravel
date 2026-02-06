{{-- Universal Hero Section --}}
@props([
    'image' => '',
    'title' => '',
    'subtitle' => '',
])

<section class="pt-[70px] pb-[30px]">
    <div 
        class="relative w-full min-h-[363px] rounded-[20px] overflow-hidden bg-cover bg-right bg-no-repeat"
        style="background-image: url('{{ asset($image) }}');"
    >
        {{-- Content Container --}}
        <div class="relative z-10 flex h-full min-h-[363px]">
            {{-- Text Content --}}
            <div class="max-w-[740px] py-[40px] pl-[70px] pr-[30px]">
                <h1 class="font-bold text-[36px] leading-[46px] text-brand-cyan mb-[20px]">
                    {!! $title !!}
                </h1>
                <p class="font-normal text-[18px] leading-[26px] text-black max-w-[533px]">
                    {!! $subtitle !!}
                </p>
            </div>
        </div>
    </div>
</section>
