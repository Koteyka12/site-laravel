{{-- Преимущества --}}
@props([
    'items' => [
        [
            'icon' => 'images/home/icon-2.svg',
            'title' => 'Seit über 11 Jahren',
            'text' => 'verfolgt die Pflegegruppe Rhein-Main die Philosophie «In sicheren Händen»',
        ],
        [
            'icon' => 'images/home/icon-1.svg',
            'title' => 'Alle Filialen',
            'text' => 'setzen einheitliche Standards für Qualität und Menschlichkeit im Pflegebereich um',
        ],
        [
            'icon' => 'images/home/icon.svg',
            'title' => 'Unsere Mitarbeiter',
            'text' => 'bilden sich regelmässig weiter und haben moderne Arbeitsbedingungen',
        ],
    ]
])

{{-- Desktop Version --}}
<section class="hidden md:block pt-[70px] pb-[30px]">
    <div class="flex items-start">
        @foreach($items as $index => $item)
            {{-- Item --}}
            <div class="flex-1 {{ $index === 0 ? 'pr-[58px]' : ($index === count($items) - 1 ? 'pl-[58px]' : 'px-[58px]') }}">
                <img src="{{ asset($item['icon']) }}" alt="" class="mb-[26px]">
                <h3 class="font-semibold text-[24px] leading-[24px] text-black mb-[10px]">
                    {{ $item['title'] }}
                </h3>
                <p class="font-normal text-[18px] leading-[26px] text-black">
                    {{ $item['text'] }}
                </p>
            </div>

            {{-- Divider (not after last item) --}}
            @if($index < count($items) - 1)
                <div class="w-[1px] h-[164px] bg-[#E8E8E8] shrink-0"></div>
            @endif
        @endforeach
    </div>
</section>

{{-- Mobile Scroll Version --}}
<section class="md:hidden pt-[40px] pb-[30px]">
    <div class="overflow-x-auto -mx-[20px] px-[20px] [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
        <div class="flex">
            @foreach($items as $index => $item)
                <div class="w-[260px] shrink-0 {{ $index === 0 ? 'pr-[30px]' : ($index === count($items) - 1 ? 'pl-[30px]' : 'px-[30px]') }}">
                    <img src="{{ asset($item['icon']) }}" alt="" class="mb-[15px] w-[40px] h-[40px]">
                    <h3 class="font-semibold text-[20px] leading-[24px] text-black mb-[8px]">
                        {{ $item['title'] }}
                    </h3>
                    <p class="font-normal text-[16px] leading-[22px] text-black">
                        {{ $item['text'] }}
                    </p>
                </div>

                {{-- Divider (not after last item) --}}
                @if($index < count($items) - 1)
                    <div class="w-[1px] bg-[#E8E8E8] shrink-0 self-stretch"></div>
                @endif
            @endforeach
        </div>
    </div>
</section>
