{{-- Blog Card Component --}}
@props(['post'])

<article class="bg-white rounded-[30px] border-2 border-[#E8E8E8] overflow-hidden hover:shadow-md transition-shadow">
    {{-- Thumbnail --}}
    <a href="{{ route('blog.show', $post->slug) }}" class="block h-[200px] overflow-hidden p-[15px]">
        @if ($post->thumbnail)
            <img 
                src="{{ asset( $post->thumbnail) }}" 
                alt="{{ $post->title }}"
                class="w-full h-full object-cover rounded-[30px] transition-transform duration-300"
            >
        @else
            <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400 rounded-[30px]">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
        @endif
    </a>

    {{-- Content --}}
    <div class="p-6">
        {{-- Category --}}
        <div class="mb-3">
            @if($post->categories->isNotEmpty())
                @foreach ($post->categories->take(1) as $category)
                    <span class="inline-block px-3 py-1 text-[14px] font-medium text-[#666666] bg-[#F5F5F5] rounded-full">
                        {{ $category->title }}
                    </span>
                @endforeach
            @endif
        </div>

        {{-- Title --}}
        <h2 class="mb-4">
            <a 
                href="{{ route('blog.show', $post->slug) }}" 
                class="text-[18px] font-bold text-black hover:text-[#64CEED] transition-colors line-clamp-3"
            >
                {{ $post->title }}
            </a>
        </h2>

        {{-- Date --}}
        <p class="text-[14px] text-[#999999]">
            {{ optional($post->published_at)->format('d.m.Y') }}
        </p>
    </div>
</article>
