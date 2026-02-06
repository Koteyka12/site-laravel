{{-- Pflegehilfe in der Nähe Section --}}
<section class="pt-[40px] md:pt-[70px] pb-[30px]" x-data="{ activeLocation: null }">
    <div class="container mx-auto px-4">
        {{-- Section Header --}}
        <div class="text-center mb-[30px] md:mb-[70px]">
            <h2 class="font-bold text-[28px] md:text-[40px] leading-[32px] md:leading-[58px] text-black mb-[12px] md:mb-[20px]">
                Pflegehilfe in der Nähe
            </h2>
            <p class="font-medium text-[18px] md:text-[26px] leading-[24px] md:leading-[26px]">
                Vereint an allen Standorten durch gemeinsame Standards und Grundsätze
            </p>
        </div>

        {{-- Content: Locations + Map --}}
        <div class="flex flex-col md:flex-row gap-[22px] md:gap-[60px] items-start justify-center">
            {{-- Left: Location Cards with scroll --}}
            <div class="w-full md:w-[384px] md:h-[555px] md:overflow-y-auto flex flex-col gap-[10px] md:pr-[10px] scrollbar-thin">
                {{-- Location 1: Darmstadt --}}
                <div 
                    class="bg-white rounded-[25px] p-[24px] hover:bg-[#F6F6F6] transition-colors cursor-pointer"
                    :class="activeLocation === 'darmstadt' ? 'border-2 border-brand-cyan' : 'border border-[#E8E8E8]'"
                    @click="activeLocation = activeLocation === 'darmstadt' ? null : 'darmstadt'"
                >
                    <h3 
                        class="font-semibold text-[20px] leading-[24px]"
                        :class="activeLocation === 'darmstadt' ? 'text-brand-cyan' : 'text-black'"
                    >
                        Darmstadt
                    </h3>
                    <div x-show="activeLocation === 'darmstadt'" x-collapse>
                        <p class="font-medium text-[16px] md:text-[18px] text-[#8B8B8B]">
                            Pflegedienst Darmstadt City GmbH
                        </p>
                        <p class="font-normal text-[14px] text-[#8B8B8B] mt-[10px]">
                            In der Kirchtanne 27, 64297 Darmstadt
                        </p>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="6.5" stroke="#8B8B8B"/>
                                <path d="M7 3.5V7.5L9.5 9" stroke="#8B8B8B" stroke-linecap="round"/>
                            </svg>
                            <span class="font-normal text-[14px] text-[#8B8B8B]">Mo. - Fr. 09:00 - 17:00 Uhr</span>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8334 9.89333V11.6433C12.8341 11.8052 12.8011 11.9654 12.7365 12.1137C12.6719 12.262 12.5772 12.3951 12.4584 12.5047C12.3396 12.6143 12.1993 12.6981 12.0463 12.7507C11.8933 12.8033 11.7309 12.8236 11.5692 12.8103C9.69591 12.6073 7.90074 11.9691 6.32924 10.9483C4.86831 10.0183 3.62668 8.77666 2.69674 7.31573C1.67257 5.73756 1.03418 3.93413 0.835074 2.05323C0.821841 1.89206 0.841941 1.72999 0.894241 1.57729C0.946541 1.42459 1.02991 1.28449 1.13891 1.16576C1.24791 1.04703 1.38021 0.952203 1.52781 0.887303C1.67541 0.822403 1.83501 0.788903 1.99674 0.788997H3.74674C4.02851 0.786297 4.30161 0.884697 4.51491 1.06593C4.72821 1.24716 4.86751 1.49913 4.90841 1.77816C4.98481 2.33563 5.12371 2.88266 5.32257 3.40906C5.40011 3.61266 5.41671 3.83416 5.37041 4.04696C5.32411 4.25976 5.21681 4.45486 5.06174 4.61156L4.31591 5.3574C5.17871 6.88063 6.44151 8.14343 7.96474 9.00623L8.71057 8.2604C8.86727 8.10533 9.06237 7.99803 9.27517 7.95173C9.48797 7.90543 9.70947 7.92203 9.91307 7.99956C10.4395 8.19843 10.9865 8.33733 11.544 8.41373C11.8261 8.45503 12.0805 8.59703 12.2621 8.81433C12.4437 9.03163 12.5401 9.30913 12.5334 9.59373L12.8334 9.89333Z" stroke="#5AC8E6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="tel:0615130 78457" class="font-normal text-[14px] text-brand-cyan hover:underline">06151 30 78 457</a>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.33325 2.33334H11.6666C12.3083 2.33334 12.8333 2.85834 12.8333 3.50001V10.5C12.8333 11.1417 12.3083 11.6667 11.6666 11.6667H2.33325C1.69159 11.6667 1.16659 11.1417 1.16659 10.5V3.50001C1.16659 2.85834 1.69159 2.33334 2.33325 2.33334Z" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8333 3.5L6.99992 7.58333L1.16659 3.5" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="mailto:info@citypflegedienst-darmstadt.de" class="font-normal text-[14px] text-[#8B8B8B] hover:underline">info@citypflegedienst-darmstadt.de</a>
                        </div>
                        <a href="/standorte/darmstadt" class="inline-block mt-[15px] px-[25px] py-[10px] border border-[#E8E8E8] rounded-[8px] font-medium text-[14px] text-black hover:bg-gray-50 transition-colors">
                            Mehr
                        </a>
                    </div>
                </div>

                {{-- Location 2: Frankfurt --}}
                <div 
                    class="bg-white rounded-[25px] p-[24px] hover:bg-[#F6F6F6] transition-colors cursor-pointer"
                    :class="activeLocation === 'frankfurt' ? 'border-2 border-brand-cyan' : 'border border-[#E8E8E8]'"
                    @click="activeLocation = activeLocation === 'frankfurt' ? null : 'frankfurt'"
                >
                    <h3 
                        class="font-semibold text-[20px] leading-[24px]"
                        :class="activeLocation === 'frankfurt' ? 'text-brand-cyan' : 'text-black'"
                    >
                        Frankfurt
                    </h3>
                    <div x-show="activeLocation === 'frankfurt'" x-collapse>
                        <p class="font-medium text-[16px] md:text-[18px] text-[#8B8B8B] mt-[8px]">
                            City Pflegedienst GmbH
                        </p>
                        <p class="font-normal text-[14px] text-[#8B8B8B] mt-[10px]">
                            Schlitzer Str. 6, 60386 Frankfurt am Main
                        </p>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="6.5" stroke="#8B8B8B"/>
                                <path d="M7 3.5V7.5L9.5 9" stroke="#8B8B8B" stroke-linecap="round"/>
                            </svg>
                            <span class="font-normal text-[14px] text-[#8B8B8B]">Mo. - Fr. 09:00 - 17:00 Uhr</span>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8334 9.89333V11.6433C12.8341 11.8052 12.8011 11.9654 12.7365 12.1137C12.6719 12.262 12.5772 12.3951 12.4584 12.5047C12.3396 12.6143 12.1993 12.6981 12.0463 12.7507C11.8933 12.8033 11.7309 12.8236 11.5692 12.8103C9.69591 12.6073 7.90074 11.9691 6.32924 10.9483C4.86831 10.0183 3.62668 8.77666 2.69674 7.31573C1.67257 5.73756 1.03418 3.93413 0.835074 2.05323C0.821841 1.89206 0.841941 1.72999 0.894241 1.57729C0.946541 1.42459 1.02991 1.28449 1.13891 1.16576C1.24791 1.04703 1.38021 0.952203 1.52781 0.887303C1.67541 0.822403 1.83501 0.788903 1.99674 0.788997H3.74674C4.02851 0.786297 4.30161 0.884697 4.51491 1.06593C4.72821 1.24716 4.86751 1.49913 4.90841 1.77816C4.98481 2.33563 5.12371 2.88266 5.32257 3.40906C5.40011 3.61266 5.41671 3.83416 5.37041 4.04696C5.32411 4.25976 5.21681 4.45486 5.06174 4.61156L4.31591 5.3574C5.17871 6.88063 6.44151 8.14343 7.96474 9.00623L8.71057 8.2604C8.86727 8.10533 9.06237 7.99803 9.27517 7.95173C9.48797 7.90543 9.70947 7.92203 9.91307 7.99956C10.4395 8.19843 10.9865 8.33733 11.544 8.41373C11.8261 8.45503 12.0805 8.59703 12.2621 8.81433C12.4437 9.03163 12.5401 9.30913 12.5334 9.59373L12.8334 9.89333Z" stroke="#5AC8E6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="tel:06994946552" class="font-normal text-[14px] text-brand-cyan hover:underline">069 94 94 65 52</a>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.33325 2.33334H11.6666C12.3083 2.33334 12.8333 2.85834 12.8333 3.50001V10.5C12.8333 11.1417 12.3083 11.6667 11.6666 11.6667H2.33325C1.69159 11.6667 1.16659 11.1417 1.16659 10.5V3.50001C1.16659 2.85834 1.69159 2.33334 2.33325 2.33334Z" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8333 3.5L6.99992 7.58333L1.16659 3.5" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="mailto:info@city-pflegedienst.de" class="font-normal text-[14px] text-[#8B8B8B] hover:underline">info@city-pflegedienst.de</a>
                        </div>
                        <a href="/standorte/frankfurt" class="inline-block mt-[15px] px-[25px] py-[10px] border border-[#E8E8E8] rounded-[8px] font-medium text-[14px] text-black hover:bg-gray-50 transition-colors">
                            Mehr
                        </a>
                    </div>
                </div>

                {{-- Location 3: Offenbach --}}
                <div 
                    class="bg-white rounded-[25px] p-[24px] hover:bg-[#F6F6F6] transition-colors cursor-pointer"
                    :class="activeLocation === 'offenbach' ? 'border-2 border-brand-cyan' : 'border border-[#E8E8E8]'"
                    @click="activeLocation = activeLocation === 'offenbach' ? null : 'offenbach'"
                >
                    <h3 
                        class="font-semibold text-[20px] leading-[24px]"
                        :class="activeLocation === 'offenbach' ? 'text-brand-cyan' : 'text-black'"
                    >
                        Offenbach
                    </h3>
                    <div x-show="activeLocation === 'offenbach'" x-collapse>
                        <p class="font-medium text-[16px] md:text-[18px] text-[#8B8B8B] mt-[8px]">
                            City Pflegedienst GmbH
                        </p>
                        <p class="font-normal text-[14px] text-[#8B8B8B] mt-[10px]">
                            Schlitzer Str. 6, 60386 Frankfurt am Main
                        </p>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="6.5" stroke="#8B8B8B"/>
                                <path d="M7 3.5V7.5L9.5 9" stroke="#8B8B8B" stroke-linecap="round"/>
                            </svg>
                            <span class="font-normal text-[14px] text-[#8B8B8B]">Mo. - Fr. 09:00 - 17:00 Uhr</span>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8334 9.89333V11.6433C12.8341 11.8052 12.8011 11.9654 12.7365 12.1137C12.6719 12.262 12.5772 12.3951 12.4584 12.5047C12.3396 12.6143 12.1993 12.6981 12.0463 12.7507C11.8933 12.8033 11.7309 12.8236 11.5692 12.8103C9.69591 12.6073 7.90074 11.9691 6.32924 10.9483C4.86831 10.0183 3.62668 8.77666 2.69674 7.31573C1.67257 5.73756 1.03418 3.93413 0.835074 2.05323C0.821841 1.89206 0.841941 1.72999 0.894241 1.57729C0.946541 1.42459 1.02991 1.28449 1.13891 1.16576C1.24791 1.04703 1.38021 0.952203 1.52781 0.887303C1.67541 0.822403 1.83501 0.788903 1.99674 0.788997H3.74674C4.02851 0.786297 4.30161 0.884697 4.51491 1.06593C4.72821 1.24716 4.86751 1.49913 4.90841 1.77816C4.98481 2.33563 5.12371 2.88266 5.32257 3.40906C5.40011 3.61266 5.41671 3.83416 5.37041 4.04696C5.32411 4.25976 5.21681 4.45486 5.06174 4.61156L4.31591 5.3574C5.17871 6.88063 6.44151 8.14343 7.96474 9.00623L8.71057 8.2604C8.86727 8.10533 9.06237 7.99803 9.27517 7.95173C9.48797 7.90543 9.70947 7.92203 9.91307 7.99956C10.4395 8.19843 10.9865 8.33733 11.544 8.41373C11.8261 8.45503 12.0805 8.59703 12.2621 8.81433C12.4437 9.03163 12.5401 9.30913 12.5334 9.59373L12.8334 9.89333Z" stroke="#5AC8E6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="tel:06994946552" class="font-normal text-[14px] text-brand-cyan hover:underline">069 94 94 65 52</a>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.33325 2.33334H11.6666C12.3083 2.33334 12.8333 2.85834 12.8333 3.50001V10.5C12.8333 11.1417 12.3083 11.6667 11.6666 11.6667H2.33325C1.69159 11.6667 1.16659 11.1417 1.16659 10.5V3.50001C1.16659 2.85834 1.69159 2.33334 2.33325 2.33334Z" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8333 3.5L6.99992 7.58333L1.16659 3.5" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="mailto:info@city-pflegedienst.de" class="font-normal text-[14px] text-[#8B8B8B] hover:underline">info@city-pflegedienst.de</a>
                        </div>
                        <a href="/standorte/offenbach" class="inline-block mt-[15px] px-[25px] py-[10px] border border-[#E8E8E8] rounded-[8px] font-medium text-[14px] text-black hover:bg-gray-50 transition-colors">
                            Mehr
                        </a>
                    </div>
                </div>

                {{-- Location 4: Bad Homburg --}}
                <div 
                    class="bg-white rounded-[25px] p-[24px] hover:bg-[#F6F6F6] transition-colors cursor-pointer"
                    :class="activeLocation === 'bad-homburg' ? 'border-2 border-brand-cyan' : 'border border-[#E8E8E8]'"
                    @click="activeLocation = activeLocation === 'bad-homburg' ? null : 'bad-homburg'"
                >
                    <h3 
                        class="font-semibold text-[20px] leading-[24px]"
                        :class="activeLocation === 'bad-homburg' ? 'text-brand-cyan' : 'text-black'"
                    >
                        Bad Homburg
                    </h3>
                    <div x-show="activeLocation === 'bad-homburg'" x-collapse>
                        <p class="font-medium text-[16px] md:text-[18px] text-[#8B8B8B] mt-[8px]">
                            City Pflegedienst GmbH
                        </p>
                        <p class="font-normal text-[14px] text-[#8B8B8B] mt-[10px]">
                            Schlitzer Str. 6, 60386 Frankfurt am Main
                        </p>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="6.5" stroke="#8B8B8B"/>
                                <path d="M7 3.5V7.5L9.5 9" stroke="#8B8B8B" stroke-linecap="round"/>
                            </svg>
                            <span class="font-normal text-[14px] text-[#8B8B8B]">Mo. - Fr. 09:00 - 17:00 Uhr</span>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8334 9.89333V11.6433C12.8341 11.8052 12.8011 11.9654 12.7365 12.1137C12.6719 12.262 12.5772 12.3951 12.4584 12.5047C12.3396 12.6143 12.1993 12.6981 12.0463 12.7507C11.8933 12.8033 11.7309 12.8236 11.5692 12.8103C9.69591 12.6073 7.90074 11.9691 6.32924 10.9483C4.86831 10.0183 3.62668 8.77666 2.69674 7.31573C1.67257 5.73756 1.03418 3.93413 0.835074 2.05323C0.821841 1.89206 0.841941 1.72999 0.894241 1.57729C0.946541 1.42459 1.02991 1.28449 1.13891 1.16576C1.24791 1.04703 1.38021 0.952203 1.52781 0.887303C1.67541 0.822403 1.83501 0.788903 1.99674 0.788997H3.74674C4.02851 0.786297 4.30161 0.884697 4.51491 1.06593C4.72821 1.24716 4.86751 1.49913 4.90841 1.77816C4.98481 2.33563 5.12371 2.88266 5.32257 3.40906C5.40011 3.61266 5.41671 3.83416 5.37041 4.04696C5.32411 4.25976 5.21681 4.45486 5.06174 4.61156L4.31591 5.3574C5.17871 6.88063 6.44151 8.14343 7.96474 9.00623L8.71057 8.2604C8.86727 8.10533 9.06237 7.99803 9.27517 7.95173C9.48797 7.90543 9.70947 7.92203 9.91307 7.99956C10.4395 8.19843 10.9865 8.33733 11.544 8.41373C11.8261 8.45503 12.0805 8.59703 12.2621 8.81433C12.4437 9.03163 12.5401 9.30913 12.5334 9.59373L12.8334 9.89333Z" stroke="#5AC8E6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="tel:06994946552" class="font-normal text-[14px] text-brand-cyan hover:underline">069 94 94 65 52</a>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.33325 2.33334H11.6666C12.3083 2.33334 12.8333 2.85834 12.8333 3.50001V10.5C12.8333 11.1417 12.3083 11.6667 11.6666 11.6667H2.33325C1.69159 11.6667 1.16659 11.1417 1.16659 10.5V3.50001C1.16659 2.85834 1.69159 2.33334 2.33325 2.33334Z" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8333 3.5L6.99992 7.58333L1.16659 3.5" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="mailto:info@city-pflegedienst.de" class="font-normal text-[14px] text-[#8B8B8B] hover:underline">info@city-pflegedienst.de</a>
                        </div>
                        <a href="/standorte/bad-homburg" class="inline-block mt-[15px] px-[25px] py-[10px] border border-[#E8E8E8] rounded-[8px] font-medium text-[14px] text-black hover:bg-gray-50 transition-colors">
                            Mehr
                        </a>
                    </div>
                </div>

                {{-- Location 5: Bad Vilbel --}}
                <div 
                    class="bg-white rounded-[25px] p-[24px] hover:bg-[#F6F6F6] transition-colors cursor-pointer"
                    :class="activeLocation === 'bad-vilbel' ? 'border-2 border-brand-cyan' : 'border border-[#E8E8E8]'"
                    @click="activeLocation = activeLocation === 'bad-vilbel' ? null : 'bad-vilbel'"
                >
                    <h3 
                        class="font-semibold text-[20px] leading-[24px]"
                        :class="activeLocation === 'bad-vilbel' ? 'text-brand-cyan' : 'text-black'"
                    >
                        Bad Vilbel
                    </h3>
                    <div x-show="activeLocation === 'bad-vilbel'" x-collapse>
                        <p class="font-medium text-[16px] md:text-[18px] text-[#8B8B8B] mt-[8px]">
                            City Pflegedienst GmbH
                        </p>
                        <p class="font-normal text-[14px] text-[#8B8B8B] mt-[10px]">
                            Schlitzer Str. 6, 60386 Frankfurt am Main
                        </p>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="6.5" stroke="#8B8B8B"/>
                                <path d="M7 3.5V7.5L9.5 9" stroke="#8B8B8B" stroke-linecap="round"/>
                            </svg>
                            <span class="font-normal text-[14px] text-[#8B8B8B]">Mo. - Fr. 09:00 - 17:00 Uhr</span>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8334 9.89333V11.6433C12.8341 11.8052 12.8011 11.9654 12.7365 12.1137C12.6719 12.262 12.5772 12.3951 12.4584 12.5047C12.3396 12.6143 12.1993 12.6981 12.0463 12.7507C11.8933 12.8033 11.7309 12.8236 11.5692 12.8103C9.69591 12.6073 7.90074 11.9691 6.32924 10.9483C4.86831 10.0183 3.62668 8.77666 2.69674 7.31573C1.67257 5.73756 1.03418 3.93413 0.835074 2.05323C0.821841 1.89206 0.841941 1.72999 0.894241 1.57729C0.946541 1.42459 1.02991 1.28449 1.13891 1.16576C1.24791 1.04703 1.38021 0.952203 1.52781 0.887303C1.67541 0.822403 1.83501 0.788903 1.99674 0.788997H3.74674C4.02851 0.786297 4.30161 0.884697 4.51491 1.06593C4.72821 1.24716 4.86751 1.49913 4.90841 1.77816C4.98481 2.33563 5.12371 2.88266 5.32257 3.40906C5.40011 3.61266 5.41671 3.83416 5.37041 4.04696C5.32411 4.25976 5.21681 4.45486 5.06174 4.61156L4.31591 5.3574C5.17871 6.88063 6.44151 8.14343 7.96474 9.00623L8.71057 8.2604C8.86727 8.10533 9.06237 7.99803 9.27517 7.95173C9.48797 7.90543 9.70947 7.92203 9.91307 7.99956C10.4395 8.19843 10.9865 8.33733 11.544 8.41373C11.8261 8.45503 12.0805 8.59703 12.2621 8.81433C12.4437 9.03163 12.5401 9.30913 12.5334 9.59373L12.8334 9.89333Z" stroke="#5AC8E6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="tel:06994946552" class="font-normal text-[14px] text-brand-cyan hover:underline">069 94 94 65 52</a>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.33325 2.33334H11.6666C12.3083 2.33334 12.8333 2.85834 12.8333 3.50001V10.5C12.8333 11.1417 12.3083 11.6667 11.6666 11.6667H2.33325C1.69159 11.6667 1.16659 11.1417 1.16659 10.5V3.50001C1.16659 2.85834 1.69159 2.33334 2.33325 2.33334Z" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8333 3.5L6.99992 7.58333L1.16659 3.5" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="mailto:info@city-pflegedienst.de" class="font-normal text-[14px] text-[#8B8B8B] hover:underline">info@city-pflegedienst.de</a>
                        </div>
                        <a href="/standorte/bad-vilbel" class="inline-block mt-[15px] px-[25px] py-[10px] border border-[#E8E8E8] rounded-[8px] font-medium text-[14px] text-black hover:bg-gray-50 transition-colors">
                            Mehr
                        </a>
                    </div>
                </div>

                {{-- Location 6: Oberursel --}}
                <div 
                    class="bg-white rounded-[25px] p-[24px] hover:bg-[#F6F6F6] transition-colors cursor-pointer"
                    :class="activeLocation === 'oberursel' ? 'border-2 border-brand-cyan' : 'border border-[#E8E8E8]'"
                    @click="activeLocation = activeLocation === 'oberursel' ? null : 'oberursel'"
                >
                    <h3 
                        class="font-semibold text-[20px] leading-[24px]"
                        :class="activeLocation === 'oberursel' ? 'text-brand-cyan' : 'text-black'"
                    >
                        Oberursel
                    </h3>
                    <div x-show="activeLocation === 'oberursel'" x-collapse>
                        <p class="font-medium text-[16px] md:text-[18px] text-[#8B8B8B] mt-[8px]">
                            City Pflegedienst GmbH
                        </p>
                        <p class="font-normal text-[14px] text-[#8B8B8B] mt-[10px]">
                            Schlitzer Str. 6, 60386 Frankfurt am Main
                        </p>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="6.5" stroke="#8B8B8B"/>
                                <path d="M7 3.5V7.5L9.5 9" stroke="#8B8B8B" stroke-linecap="round"/>
                            </svg>
                            <span class="font-normal text-[14px] text-[#8B8B8B]">Mo. - Fr. 09:00 - 17:00 Uhr</span>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8334 9.89333V11.6433C12.8341 11.8052 12.8011 11.9654 12.7365 12.1137C12.6719 12.262 12.5772 12.3951 12.4584 12.5047C12.3396 12.6143 12.1993 12.6981 12.0463 12.7507C11.8933 12.8033 11.7309 12.8236 11.5692 12.8103C9.69591 12.6073 7.90074 11.9691 6.32924 10.9483C4.86831 10.0183 3.62668 8.77666 2.69674 7.31573C1.67257 5.73756 1.03418 3.93413 0.835074 2.05323C0.821841 1.89206 0.841941 1.72999 0.894241 1.57729C0.946541 1.42459 1.02991 1.28449 1.13891 1.16576C1.24791 1.04703 1.38021 0.952203 1.52781 0.887303C1.67541 0.822403 1.83501 0.788903 1.99674 0.788997H3.74674C4.02851 0.786297 4.30161 0.884697 4.51491 1.06593C4.72821 1.24716 4.86751 1.49913 4.90841 1.77816C4.98481 2.33563 5.12371 2.88266 5.32257 3.40906C5.40011 3.61266 5.41671 3.83416 5.37041 4.04696C5.32411 4.25976 5.21681 4.45486 5.06174 4.61156L4.31591 5.3574C5.17871 6.88063 6.44151 8.14343 7.96474 9.00623L8.71057 8.2604C8.86727 8.10533 9.06237 7.99803 9.27517 7.95173C9.48797 7.90543 9.70947 7.92203 9.91307 7.99956C10.4395 8.19843 10.9865 8.33733 11.544 8.41373C11.8261 8.45503 12.0805 8.59703 12.2621 8.81433C12.4437 9.03163 12.5401 9.30913 12.5334 9.59373L12.8334 9.89333Z" stroke="#5AC8E6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="tel:06994946552" class="font-normal text-[14px] text-brand-cyan hover:underline">069 94 94 65 52</a>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.33325 2.33334H11.6666C12.3083 2.33334 12.8333 2.85834 12.8333 3.50001V10.5C12.8333 11.1417 12.3083 11.6667 11.6666 11.6667H2.33325C1.69159 11.6667 1.16659 11.1417 1.16659 10.5V3.50001C1.16659 2.85834 1.69159 2.33334 2.33325 2.33334Z" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8333 3.5L6.99992 7.58333L1.16659 3.5" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="mailto:info@city-pflegedienst.de" class="font-normal text-[14px] text-[#8B8B8B] hover:underline">info@city-pflegedienst.de</a>
                        </div>
                        <a href="/standorte/oberursel" class="inline-block mt-[15px] px-[25px] py-[10px] border border-[#E8E8E8] rounded-[8px] font-medium text-[14px] text-black hover:bg-gray-50 transition-colors">
                            Mehr
                        </a>
                    </div>
                </div>

                {{-- Location 7: Maintal --}}
                <div 
                    class="bg-white rounded-[25px] p-[24px] hover:bg-[#F6F6F6] transition-colors cursor-pointer"
                    :class="activeLocation === 'maintal' ? 'border-2 border-brand-cyan' : 'border border-[#E8E8E8]'"
                    @click="activeLocation = activeLocation === 'maintal' ? null : 'maintal'"
                >
                    <h3 
                        class="font-semibold text-[20px] leading-[24px]"
                        :class="activeLocation === 'maintal' ? 'text-brand-cyan' : 'text-black'"
                    >
                        Maintal
                    </h3>
                    <div x-show="activeLocation === 'maintal'" x-collapse>
                        <p class="font-medium text-[16px] md:text-[18px] text-[#8B8B8B] mt-[8px]">
                            Pflegedienst City Hanau PCH GmbH
                        </p>
                        <p class="font-normal text-[14px] text-[#8B8B8B] mt-[10px]">
                            Hospital Str. 3, 63450 Hanau
                        </p>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="6.5" stroke="#8B8B8B"/>
                                <path d="M7 3.5V7.5L9.5 9" stroke="#8B8B8B" stroke-linecap="round"/>
                            </svg>
                            <span class="font-normal text-[14px] text-[#8B8B8B]">Mo. - Fr. 09:00 - 17:00 Uhr</span>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8334 9.89333V11.6433C12.8341 11.8052 12.8011 11.9654 12.7365 12.1137C12.6719 12.262 12.5772 12.3951 12.4584 12.5047C12.3396 12.6143 12.1993 12.6981 12.0463 12.7507C11.8933 12.8033 11.7309 12.8236 11.5692 12.8103C9.69591 12.6073 7.90074 11.9691 6.32924 10.9483C4.86831 10.0183 3.62668 8.77666 2.69674 7.31573C1.67257 5.73756 1.03418 3.93413 0.835074 2.05323C0.821841 1.89206 0.841941 1.72999 0.894241 1.57729C0.946541 1.42459 1.02991 1.28449 1.13891 1.16576C1.24791 1.04703 1.38021 0.952203 1.52781 0.887303C1.67541 0.822403 1.83501 0.788903 1.99674 0.788997H3.74674C4.02851 0.786297 4.30161 0.884697 4.51491 1.06593C4.72821 1.24716 4.86751 1.49913 4.90841 1.77816C4.98481 2.33563 5.12371 2.88266 5.32257 3.40906C5.40011 3.61266 5.41671 3.83416 5.37041 4.04696C5.32411 4.25976 5.21681 4.45486 5.06174 4.61156L4.31591 5.3574C5.17871 6.88063 6.44151 8.14343 7.96474 9.00623L8.71057 8.2604C8.86727 8.10533 9.06237 7.99803 9.27517 7.95173C9.48797 7.90543 9.70947 7.92203 9.91307 7.99956C10.4395 8.19843 10.9865 8.33733 11.544 8.41373C11.8261 8.45503 12.0805 8.59703 12.2621 8.81433C12.4437 9.03163 12.5401 9.30913 12.5334 9.59373L12.8334 9.89333Z" stroke="#5AC8E6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="tel:0618190 65509" class="font-normal text-[14px] text-brand-cyan hover:underline">06181 90 65 509</a>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.33325 2.33334H11.6666C12.3083 2.33334 12.8333 2.85834 12.8333 3.50001V10.5C12.8333 11.1417 12.3083 11.6667 11.6666 11.6667H2.33325C1.69159 11.6667 1.16659 11.1417 1.16659 10.5V3.50001C1.16659 2.85834 1.69159 2.33334 2.33325 2.33334Z" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8333 3.5L6.99992 7.58333L1.16659 3.5" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="mailto:info@city-pflegedienst.de" class="font-normal text-[14px] text-[#8B8B8B] hover:underline">info@city-pflegedienst.de</a>
                        </div>
                        <a href="/standorte/maintal" class="inline-block mt-[15px] px-[25px] py-[10px] border border-[#E8E8E8] rounded-[8px] font-medium text-[14px] text-black hover:bg-gray-50 transition-colors">
                            Mehr
                        </a>
                    </div>
                </div>

                {{-- Location 8: Hanau --}}
                <div 
                    class="bg-white rounded-[25px] p-[24px] hover:bg-[#F6F6F6] transition-colors cursor-pointer"
                    :class="activeLocation === 'hanau' ? 'border-2 border-brand-cyan' : 'border border-[#E8E8E8]'"
                    @click="activeLocation = activeLocation === 'hanau' ? null : 'hanau'"
                >
                    <h3 
                        class="font-semibold text-[20px] leading-[24px]"
                        :class="activeLocation === 'hanau' ? 'text-brand-cyan' : 'text-black'"
                    >
                        Hanau
                    </h3>
                    <div x-show="activeLocation === 'hanau'" x-collapse>
                        <p class="font-medium text-[16px] md:text-[18px] text-[#8B8B8B] mt-[8px]">
                            Pflegedienst City Hanau PCH GmbH
                        </p>
                        <p class="font-normal text-[14px] text-[#8B8B8B] mt-[10px]">
                            Hospital Str. 3, 63450 Hanau
                        </p>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="6.5" stroke="#8B8B8B"/>
                                <path d="M7 3.5V7.5L9.5 9" stroke="#8B8B8B" stroke-linecap="round"/>
                            </svg>
                            <span class="font-normal text-[14px] text-[#8B8B8B]">Mo. - Fr. 09:00 - 17:00 Uhr</span>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8334 9.89333V11.6433C12.8341 11.8052 12.8011 11.9654 12.7365 12.1137C12.6719 12.262 12.5772 12.3951 12.4584 12.5047C12.3396 12.6143 12.1993 12.6981 12.0463 12.7507C11.8933 12.8033 11.7309 12.8236 11.5692 12.8103C9.69591 12.6073 7.90074 11.9691 6.32924 10.9483C4.86831 10.0183 3.62668 8.77666 2.69674 7.31573C1.67257 5.73756 1.03418 3.93413 0.835074 2.05323C0.821841 1.89206 0.841941 1.72999 0.894241 1.57729C0.946541 1.42459 1.02991 1.28449 1.13891 1.16576C1.24791 1.04703 1.38021 0.952203 1.52781 0.887303C1.67541 0.822403 1.83501 0.788903 1.99674 0.788997H3.74674C4.02851 0.786297 4.30161 0.884697 4.51491 1.06593C4.72821 1.24716 4.86751 1.49913 4.90841 1.77816C4.98481 2.33563 5.12371 2.88266 5.32257 3.40906C5.40011 3.61266 5.41671 3.83416 5.37041 4.04696C5.32411 4.25976 5.21681 4.45486 5.06174 4.61156L4.31591 5.3574C5.17871 6.88063 6.44151 8.14343 7.96474 9.00623L8.71057 8.2604C8.86727 8.10533 9.06237 7.99803 9.27517 7.95173C9.48797 7.90543 9.70947 7.92203 9.91307 7.99956C10.4395 8.19843 10.9865 8.33733 11.544 8.41373C11.8261 8.45503 12.0805 8.59703 12.2621 8.81433C12.4437 9.03163 12.5401 9.30913 12.5334 9.59373L12.8334 9.89333Z" stroke="#5AC8E6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="tel:0618190 65509" class="font-normal text-[14px] text-brand-cyan hover:underline">06181 90 65 509</a>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.33325 2.33334H11.6666C12.3083 2.33334 12.8333 2.85834 12.8333 3.50001V10.5C12.8333 11.1417 12.3083 11.6667 11.6666 11.6667H2.33325C1.69159 11.6667 1.16659 11.1417 1.16659 10.5V3.50001C1.16659 2.85834 1.69159 2.33334 2.33325 2.33334Z" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8333 3.5L6.99992 7.58333L1.16659 3.5" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="mailto:info@city-pflegedienst.de" class="font-normal text-[14px] text-[#8B8B8B] hover:underline">info@city-pflegedienst.de</a>
                        </div>
                        <a href="/standorte/hanau" class="inline-block mt-[15px] px-[25px] py-[10px] border border-[#E8E8E8] rounded-[8px] font-medium text-[14px] text-black hover:bg-gray-50 transition-colors">
                            Mehr
                        </a>
                    </div>
                </div>

                {{-- Location 9: Brückobel --}}
                <div 
                    class="bg-white rounded-[25px] p-[24px] hover:bg-[#F6F6F6] transition-colors cursor-pointer"
                    :class="activeLocation === 'brueckobel' ? 'border-2 border-brand-cyan' : 'border border-[#E8E8E8]'"
                    @click="activeLocation = activeLocation === 'brueckobel' ? null : 'brueckobel'"
                >
                    <h3 
                        class="font-semibold text-[20px] leading-[24px]"
                        :class="activeLocation === 'brueckobel' ? 'text-brand-cyan' : 'text-black'"
                    >
                        Brückobel
                    </h3>
                    <div x-show="activeLocation === 'brueckobel'" x-collapse>
                        <p class="font-medium text-[16px] md:text-[18px] text-[#8B8B8B] mt-[8px]">
                            Pflegedienst City Hanau PCH GmbH
                        </p>
                        <p class="font-normal text-[14px] text-[#8B8B8B] mt-[10px]">
                            Hospital Str. 3, 63450 Hanau
                        </p>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="6.5" stroke="#8B8B8B"/>
                                <path d="M7 3.5V7.5L9.5 9" stroke="#8B8B8B" stroke-linecap="round"/>
                            </svg>
                            <span class="font-normal text-[14px] text-[#8B8B8B]">Mo. - Fr. 09:00 - 17:00 Uhr</span>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8334 9.89333V11.6433C12.8341 11.8052 12.8011 11.9654 12.7365 12.1137C12.6719 12.262 12.5772 12.3951 12.4584 12.5047C12.3396 12.6143 12.1993 12.6981 12.0463 12.7507C11.8933 12.8033 11.7309 12.8236 11.5692 12.8103C9.69591 12.6073 7.90074 11.9691 6.32924 10.9483C4.86831 10.0183 3.62668 8.77666 2.69674 7.31573C1.67257 5.73756 1.03418 3.93413 0.835074 2.05323C0.821841 1.89206 0.841941 1.72999 0.894241 1.57729C0.946541 1.42459 1.02991 1.28449 1.13891 1.16576C1.24791 1.04703 1.38021 0.952203 1.52781 0.887303C1.67541 0.822403 1.83501 0.788903 1.99674 0.788997H3.74674C4.02851 0.786297 4.30161 0.884697 4.51491 1.06593C4.72821 1.24716 4.86751 1.49913 4.90841 1.77816C4.98481 2.33563 5.12371 2.88266 5.32257 3.40906C5.40011 3.61266 5.41671 3.83416 5.37041 4.04696C5.32411 4.25976 5.21681 4.45486 5.06174 4.61156L4.31591 5.3574C5.17871 6.88063 6.44151 8.14343 7.96474 9.00623L8.71057 8.2604C8.86727 8.10533 9.06237 7.99803 9.27517 7.95173C9.48797 7.90543 9.70947 7.92203 9.91307 7.99956C10.4395 8.19843 10.9865 8.33733 11.544 8.41373C11.8261 8.45503 12.0805 8.59703 12.2621 8.81433C12.4437 9.03163 12.5401 9.30913 12.5334 9.59373L12.8334 9.89333Z" stroke="#5AC8E6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="tel:0618190 65509" class="font-normal text-[14px] text-brand-cyan hover:underline">06181 90 65 509</a>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.33325 2.33334H11.6666C12.3083 2.33334 12.8333 2.85834 12.8333 3.50001V10.5C12.8333 11.1417 12.3083 11.6667 11.6666 11.6667H2.33325C1.69159 11.6667 1.16659 11.1417 1.16659 10.5V3.50001C1.16659 2.85834 1.69159 2.33334 2.33325 2.33334Z" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8333 3.5L6.99992 7.58333L1.16659 3.5" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="mailto:info@city-pflegedienst.de" class="font-normal text-[14px] text-[#8B8B8B] hover:underline">info@city-pflegedienst.de</a>
                        </div>
                        <a href="/standorte/brueckobel" class="inline-block mt-[15px] px-[25px] py-[10px] border border-[#E8E8E8] rounded-[8px] font-medium text-[14px] text-black hover:bg-gray-50 transition-colors">
                            Mehr
                        </a>
                    </div>
                </div>

                {{-- Location 10: Erlensee --}}
                <div 
                    class="bg-white rounded-[25px] p-[24px] hover:bg-[#F6F6F6] transition-colors cursor-pointer"
                    :class="activeLocation === 'erlensee' ? 'border-2 border-brand-cyan' : 'border border-[#E8E8E8]'"
                    @click="activeLocation = activeLocation === 'erlensee' ? null : 'erlensee'"
                >
                    <h3 
                        class="font-semibold text-[20px] leading-[24px]"
                        :class="activeLocation === 'erlensee' ? 'text-brand-cyan' : 'text-black'"
                    >
                        Erlensee
                    </h3>
                    <div x-show="activeLocation === 'erlensee'" x-collapse>
                        <p class="font-medium text-[16px] md:text-[18px] text-[#8B8B8B] mt-[8px]">
                            Pflegedienst City Hanau PCH GmbH
                        </p>
                        <p class="font-normal text-[14px] text-[#8B8B8B] mt-[10px]">
                            Hospital Str. 3, 63450 Hanau
                        </p>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="6.5" stroke="#8B8B8B"/>
                                <path d="M7 3.5V7.5L9.5 9" stroke="#8B8B8B" stroke-linecap="round"/>
                            </svg>
                            <span class="font-normal text-[14px] text-[#8B8B8B]">Mo. - Fr. 09:00 - 17:00 Uhr</span>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8334 9.89333V11.6433C12.8341 11.8052 12.8011 11.9654 12.7365 12.1137C12.6719 12.262 12.5772 12.3951 12.4584 12.5047C12.3396 12.6143 12.1993 12.6981 12.0463 12.7507C11.8933 12.8033 11.7309 12.8236 11.5692 12.8103C9.69591 12.6073 7.90074 11.9691 6.32924 10.9483C4.86831 10.0183 3.62668 8.77666 2.69674 7.31573C1.67257 5.73756 1.03418 3.93413 0.835074 2.05323C0.821841 1.89206 0.841941 1.72999 0.894241 1.57729C0.946541 1.42459 1.02991 1.28449 1.13891 1.16576C1.24791 1.04703 1.38021 0.952203 1.52781 0.887303C1.67541 0.822403 1.83501 0.788903 1.99674 0.788997H3.74674C4.02851 0.786297 4.30161 0.884697 4.51491 1.06593C4.72821 1.24716 4.86751 1.49913 4.90841 1.77816C4.98481 2.33563 5.12371 2.88266 5.32257 3.40906C5.40011 3.61266 5.41671 3.83416 5.37041 4.04696C5.32411 4.25976 5.21681 4.45486 5.06174 4.61156L4.31591 5.3574C5.17871 6.88063 6.44151 8.14343 7.96474 9.00623L8.71057 8.2604C8.86727 8.10533 9.06237 7.99803 9.27517 7.95173C9.48797 7.90543 9.70947 7.92203 9.91307 7.99956C10.4395 8.19843 10.9865 8.33733 11.544 8.41373C11.8261 8.45503 12.0805 8.59703 12.2621 8.81433C12.4437 9.03163 12.5401 9.30913 12.5334 9.59373L12.8334 9.89333Z" stroke="#5AC8E6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="tel:0618190 65509" class="font-normal text-[14px] text-brand-cyan hover:underline">06181 90 65 509</a>
                        </div>
                        <div class="flex items-center gap-[8px] mt-[8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.33325 2.33334H11.6666C12.3083 2.33334 12.8333 2.85834 12.8333 3.50001V10.5C12.8333 11.1417 12.3083 11.6667 11.6666 11.6667H2.33325C1.69159 11.6667 1.16659 11.1417 1.16659 10.5V3.50001C1.16659 2.85834 1.69159 2.33334 2.33325 2.33334Z" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8333 3.5L6.99992 7.58333L1.16659 3.5" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="mailto:info@city-pflegedienst.de" class="font-normal text-[14px] text-[#8B8B8B] hover:underline">info@city-pflegedienst.de</a>
                        </div>
                        <a href="/standorte/erlensee" class="inline-block mt-[15px] px-[25px] py-[10px] border border-[#E8E8E8] rounded-[8px] font-medium text-[14px] text-black hover:bg-gray-50 transition-colors">
                            Mehr
                        </a>
                    </div>
                </div>
            </div>

            {{-- Mobile: Mehr sehen Button --}}
            <a href="/filialen" class="md:hidden block w-full py-[25px] px-[24px] bg-[#F6F6F6] rounded-[25px] flex items-center justify-center font-semibold text-[18px] text-black mt-[10px]">
                Mehr sehen
            </a>

            {{-- Right: Map --}}
            <div class="hidden md:block w-[601px] h-[555px] relative">
                <img src="{{ asset('images/home/map-region.png') }}" alt="Rhein-Main Region" class="w-full h-full object-contain">

                {{-- Oberursel - текст справа --}}
                <div 
                    class="absolute cursor-pointer" 
                    style="left: 36.9%; top: 45.2%;"
                    @click="activeLocation = activeLocation === 'oberursel' ? null : 'oberursel'"
                >
                    <div 
                        class="w-[16px] h-[16px] rounded-full transition-colors"
                        :class="activeLocation === 'oberursel' ? 'bg-brand-cyan' : 'bg-black'"
                    ></div>
                    <span 
                        x-show="activeLocation === 'oberursel'"
                        x-transition
                        class="absolute right-[24px] top-[-2px] whitespace-nowrap font-semibold text-[20px] leading-[20px] text-black"
                    >Oberursel</span>
                </div>

                {{-- Bad Homburg - текст сверху --}}
                <div 
                    class="absolute cursor-pointer" 
                    style="left: 41.3%; top: 41.1%;"
                    @click="activeLocation = activeLocation === 'bad-homburg' ? null : 'bad-homburg'"
                >
                    <div 
                        class="w-[16px] h-[16px] rounded-full transition-colors"
                        :class="activeLocation === 'bad-homburg' ? 'bg-brand-cyan' : 'bg-black'"
                    ></div>
                    <span 
                        x-show="activeLocation === 'bad-homburg'"
                        x-transition
                        class="absolute left-[50%] -translate-x-1/2 bottom-[24px] whitespace-nowrap font-semibold text-[20px] leading-[20px] text-black"
                    >Bad Homburg</span>
                </div>

                {{-- Bad Vilbel - текст сверху --}}
                <div 
                    class="absolute cursor-pointer" 
                    style="left: 47.8%; top: 44.7%;"
                    @click="activeLocation = activeLocation === 'bad-vilbel' ? null : 'bad-vilbel'"
                >
                    <div 
                        class="w-[16px] h-[16px] rounded-full transition-colors"
                        :class="activeLocation === 'bad-vilbel' ? 'bg-brand-cyan' : 'bg-black'"
                    ></div>
                    <span 
                        x-show="activeLocation === 'bad-vilbel'"
                        x-transition
                        class="absolute left-[50%] -translate-x-1/2 bottom-[24px] whitespace-nowrap font-semibold text-[20px] leading-[20px] text-black"
                    >Bad Vilbel</span>
                </div>

                {{-- Maintal - текст сверху --}}
                <div 
                    class="absolute cursor-pointer" 
                    style="left: 52.6%; top: 45.8%;"
                    @click="activeLocation = activeLocation === 'maintal' ? null : 'maintal'"
                >
                    <div 
                        class="w-[16px] h-[16px] rounded-full transition-colors"
                        :class="activeLocation === 'maintal' ? 'bg-brand-cyan' : 'bg-black'"
                    ></div>
                    <span 
                        x-show="activeLocation === 'maintal'"
                        x-transition
                        class="absolute left-[50%] -translate-x-1/2 bottom-[24px] whitespace-nowrap font-semibold text-[20px] leading-[20px] text-black"
                    >Maintal</span>
                </div>

                {{-- Hanau - текст справа --}}
                <div 
                    class="absolute cursor-pointer" 
                    style="left: 56.9%; top: 46.8%;"
                    @click="activeLocation = activeLocation === 'hanau' ? null : 'hanau'"
                >
                    <div 
                        class="w-[16px] h-[16px] rounded-full transition-colors"
                        :class="activeLocation === 'hanau' ? 'bg-brand-cyan' : 'bg-black'"
                    ></div>
                    <span 
                        x-show="activeLocation === 'hanau'"
                        x-transition
                        class="absolute left-[24px] top-[-2px] whitespace-nowrap font-semibold text-[20px] leading-[20px] text-black"
                    >Hanau</span>
                </div>

                {{-- Offenbach - текст справа --}}
                <div 
                    class="absolute cursor-pointer" 
                    style="left: 47.8%; top: 53.5%;"
                    @click="activeLocation = activeLocation === 'offenbach' ? null : 'offenbach'"
                >
                    <div 
                        class="w-[16px] h-[16px] rounded-full transition-colors"
                        :class="activeLocation === 'offenbach' ? 'bg-brand-cyan' : 'bg-black'"
                    ></div>
                    <span 
                        x-show="activeLocation === 'offenbach'"
                        x-transition
                        class="absolute left-[24px] top-[-2px] whitespace-nowrap font-semibold text-[20px] leading-[20px] text-black"
                    >Offenbach</span>
                </div>

                {{-- Frankfurt - текст слева --}}
                <div 
                    class="absolute cursor-pointer" 
                    style="left: 42.8%; top: 51.2%;"
                    @click="activeLocation = activeLocation === 'frankfurt' ? null : 'frankfurt'"
                >
                    <div 
                        class="w-[16px] h-[16px] rounded-full transition-colors"
                        :class="activeLocation === 'frankfurt' ? 'bg-brand-cyan' : 'bg-black'"
                    ></div>
                    <span 
                        x-show="activeLocation === 'frankfurt'"
                        x-transition
                        class="absolute right-[24px] top-[-2px] whitespace-nowrap font-semibold text-[20px] leading-[20px] text-black"
                    >Frankfurt</span>
                </div>

                {{-- Darmstadt - текст справа --}}
                <div 
                    class="absolute cursor-pointer" 
                    style="left: 41.6%; top: 64.3%;"
                    @click="activeLocation = activeLocation === 'darmstadt' ? null : 'darmstadt'"
                >
                    <div 
                        class="w-[16px] h-[16px] rounded-full transition-colors"
                        :class="activeLocation === 'darmstadt' ? 'bg-brand-cyan' : 'bg-black'"
                    ></div>
                    <span 
                        x-show="activeLocation === 'darmstadt'"
                        x-transition
                        class="absolute left-[24px] top-[-2px] whitespace-nowrap font-semibold text-[20px] leading-[20px] text-black"
                    >Darmstadt</span>
                </div>
            </div>
        </div>
    </div>
</section>