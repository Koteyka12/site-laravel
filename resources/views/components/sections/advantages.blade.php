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

<section class="pt-[70px] pb-[30px]">
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
