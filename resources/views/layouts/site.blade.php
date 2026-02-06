<!doctype html>
<html lang="de" class="overflow-x-hidden">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'Pflegegruppe Rhein-Main')</title>
    <meta name="description" content="@yield('meta_description', 'Pflegegruppe Rhein-Main - Ihr Partner für professionelle Pflege')">
    @hasSection('robots')
        <meta name="robots" content="@yield('robots')">
    @endif
    @hasSection('canonical')
        <link rel="canonical" href="@yield('canonical')">
    @endif
    @hasSection('og_title')
        <meta property="og:title" content="@yield('og_title')">
    @endif
    @hasSection('og_description')
        <meta property="og:description" content="@yield('og_description')">
    @endif
    @hasSection('og_image')
        <meta property="og:image" content="@yield('og_image')">
    @endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 font-sans antialiased overflow-x-hidden">
    <div class="min-h-screen flex flex-col overflow-x-hidden">
        {{-- Header --}}
        <header class="h-[70px] md:h-[100px] flex items-center" x-data="{ mobileMenuOpen: false }">
            <div class="w-full max-w-[1200px] mx-auto px-4 md:px-6 lg:px-0">
                <div class="flex items-center justify-between">
                    {{-- Logo --}}
                    <a href="/" class="shrink-0">
                        @if(request()->is('filialen*'))
                            <img src="{{ asset('images/filialen/logo.png') }}" alt="Pflegegruppe Rhein-Main" class="h-[30px] md:h-[65px] w-auto">
                        @else
                            <img src="{{ asset('images/logo.svg') }}" alt="Pflegegruppe Rhein-Main" class="h-[45px] md:h-[65px] w-auto">
                        @endif
                    </a>

                    {{-- Navigation + CTA (Desktop) --}}
                    <div class="hidden md:flex items-center gap-[22px]">
                        <nav class="flex items-center gap-[22px]">
                            <a href="/" class="text-[18px] font-medium leading-[18px] {{ request()->routeIs('home') || request()->path() === '/' ? 'text-brand-cyan' : 'text-black hover:text-brand-cyan' }} transition-colors">Startseite</a>
                            <a href="/leistungen" class="text-[18px] font-medium leading-[18px] {{ request()->is('leistungen*') ? 'text-brand-cyan' : 'text-black hover:text-brand-cyan' }} transition-colors">Leistungen</a>
                            
                            {{-- Filialen Dropdown --}}
                            <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button 
                                    type="button"
                                    class="text-[18px] font-medium leading-[18px] {{ request()->is('filialen*') ? 'text-brand-cyan' : 'text-black hover:text-brand-cyan' }} transition-colors"
                                    @click="open = !open"
                                >
                                    Filialen
                                </button>
                                
                                {{-- Dropdown Menu --}}
                                <div 
                                    x-show="open"
                                    x-transition:enter="transition ease-out duration-150"
                                    x-transition:enter-start="opacity-0 translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-100"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-1"
                                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[345px] bg-white rounded-[15px] shadow-lg border border-[#E8E8E8] py-3 z-50"
                                    @click.away="open = false"
                                >
                                    <a href="/filialen/darmstadt" class="block px-5 py-2.5 text-[16px] text-black hover:text-brand-cyan transition-colors {{ request()->is('filialen/darmstadt*') ? 'text-brand-cyan' : '' }}">
                                        Pflegedienst City Darmstadt
                                    </a>
                                    <div class="mx-5 my-1 border-t border-[#E8E8E8]"></div>
                                    <a href="/filialen/frankfurt-offenbach" class="block px-5 py-2.5 text-[16px] text-black hover:text-brand-cyan transition-colors {{ request()->is('filialen/frankfurt-offenbach*') ? 'text-brand-cyan' : '' }}">
                                        Pflegedienst City Frankfurt & Offenbach
                                    </a>
                                    <div class="mx-5 my-1 border-t border-[#E8E8E8]"></div>
                                    <a href="/filialen/medivita" class="block px-5 py-2.5 text-[16px] text-black hover:text-brand-cyan transition-colors {{ request()->is('filialen/medivita*') ? 'text-brand-cyan' : '' }}">
                                        MediVita
                                    </a>
                                    <div class="mx-5 my-1 border-t border-[#E8E8E8]"></div>
                                    <a href="/filialen/hanau-maintal" class="block px-5 py-2.5 text-[16px] text-black hover:text-brand-cyan transition-colors {{ request()->is('filialen/hanau-maintal*') ? 'text-brand-cyan' : '' }}">
                                        Pflegedienst City Hanau & Maintal
                                    </a>
                                </div>
                            </div>

                            <a href="/karriere" class="text-[18px] font-medium leading-[18px] {{ request()->is('karriere*') ? 'text-brand-cyan' : 'text-black hover:text-brand-cyan' }} transition-colors">Karriere</a>
                            <a href="{{ route('blog.index') }}" class="text-[18px] font-medium leading-[18px] {{ request()->is('blog*') ? 'text-brand-cyan' : 'text-black hover:text-brand-cyan' }} transition-colors">Blog</a>
                        </nav>

                        {{-- CTA Button --}}
                        <a href="{{ route('contact.create') }}" class="inline-flex items-center justify-center w-[183px] h-[56px] {{ request()->is('filialen*') ? 'bg-[#7D9637] text-white' : 'bg-brand-cyan text-white' }} hover:opacity-90 text-[18px] font-medium leading-[18px] rounded-[10px] transition-opacity">
                            Anfrage senden
                        </a>
                    </div>

                    {{-- Mobile: Phone + Burger --}}
                    <div class="flex md:hidden items-center">
                        {{-- Phone Icon --}}
                        <a href="tel:+4969123456" class="p-2 text-black">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </a>

                        {{-- Burger Menu Button --}}
                        <button type="button" class="p-2 text-black" @click="mobileMenuOpen = !mobileMenuOpen">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Mobile Menu Overlay --}}
            <div 
                x-show="mobileMenuOpen" 
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-black/50 z-40 md:hidden"
                @click="mobileMenuOpen = false"
            ></div>

            {{-- Mobile Menu Panel --}}
            <div 
                x-show="mobileMenuOpen"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="fixed inset-x-0 top-0 bg-white z-50 rounded-b-[20px] shadow-lg md:hidden"
            >
                {{-- Header with logo, phone and close --}}
                <div class="flex items-center justify-between px-5 py-4">
                    <a href="/" class="shrink-0" @click="mobileMenuOpen = false">
                        <img src="{{ asset('images/logo.svg') }}" alt="Pflegegruppe Rhein-Main" class="h-[40px] w-auto">
                    </a>
                    <div class="flex items-center gap-3">
                        {{-- Phone Icon --}}
                        <a href="tel:+4969123456" class="text-black">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </a>
                        {{-- Close Button --}}
                        <button type="button" class="text-black" @click="mobileMenuOpen = false">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Mobile Navigation --}}
                <nav class="flex flex-col px-5 pb-6 gap-1" x-data="{ filialenOpen: false }">
                    {{-- Startseite --}}
                    <a href="/" class="flex items-center gap-4 py-3 text-[16px] font-medium {{ request()->routeIs('home') || request()->path() === '/' ? 'text-brand-cyan' : 'text-black' }}" @click="mobileMenuOpen = false">
                        <img src="{{ asset('images/icon.png') }}" alt="" class="w-6 h-6">
                        Startseite
                    </a>

                    {{-- Leistungen --}}
                    <a href="/leistungen" class="flex items-center gap-4 py-3 text-[16px] font-medium {{ request()->is('leistungen*') ? 'text-brand-cyan' : 'text-black' }}" @click="mobileMenuOpen = false">
                        <img src="{{ asset('images/icon2.png') }}" alt="" class="w-6 h-6">
                        Leistungen
                    </a>
                    
                    {{-- Einsatzorte (Filialen) with submenu --}}
                    <div>
                        <button 
                            type="button" 
                            class="flex items-center justify-between w-full py-3 text-[16px] font-medium {{ request()->is('filialen*') ? 'text-brand-cyan' : 'text-black' }}"
                            @click="filialenOpen = !filialenOpen"
                        >
                            <span class="flex items-center gap-4">
                                <img src="{{ asset('images/icon3.png') }}" alt="" class="w-6 h-6">
                                Einsatzorte
                                <span class="inline-flex items-center justify-center w-[22px] h-[22px] text-[12px] font-medium text-white bg-brand-cyan rounded-full">10</span>
                            </span>
                            <svg class="w-5 h-5 transition-transform" :class="{ 'rotate-180': filialenOpen }" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div x-show="filialenOpen" x-collapse class="ml-10 flex flex-col gap-2 pb-2">
                            <a href="/filialen/frankfurt-offenbach" class="text-[14px] py-1 {{ request()->is('filialen/frankfurt-offenbach*') ? 'text-brand-cyan' : 'text-gray-500' }}" @click="mobileMenuOpen = false">Frankfurt</a>
                            <a href="/filialen/frankfurt-offenbach" class="text-[14px] py-1 {{ request()->is('filialen/frankfurt-offenbach*') ? 'text-brand-cyan' : 'text-gray-500' }}" @click="mobileMenuOpen = false">Offenbach</a>
                            <a href="/filialen/bad-homburg" class="text-[14px] py-1 {{ request()->is('filialen/bad-homburg*') ? 'text-brand-cyan' : 'text-gray-500' }}" @click="mobileMenuOpen = false">Bad Homburg</a>
                            <a href="/filialen/bad-vilbel" class="text-[14px] py-1 {{ request()->is('filialen/bad-vilbel*') ? 'text-brand-cyan' : 'text-gray-500' }}" @click="mobileMenuOpen = false">Bad Vilbel</a>
                            <a href="/filialen/oberursel" class="text-[14px] py-1 {{ request()->is('filialen/oberursel*') ? 'text-brand-cyan' : 'text-gray-500' }}" @click="mobileMenuOpen = false">Oberursel</a>
                            <a href="/filialen/hanau-maintal" class="text-[14px] py-1 {{ request()->is('filialen/hanau-maintal*') ? 'text-brand-cyan' : 'text-gray-500' }}" @click="mobileMenuOpen = false">Hanau</a>
                            <a href="/filialen/hanau-maintal" class="text-[14px] py-1 {{ request()->is('filialen/hanau-maintal*') ? 'text-brand-cyan' : 'text-gray-500' }}" @click="mobileMenuOpen = false">Maintal</a>
                            <a href="/filialen/hanau-maintal" class="text-[14px] py-1 {{ request()->is('filialen/hanau-maintal*') ? 'text-brand-cyan' : 'text-gray-500' }}" @click="mobileMenuOpen = false">Brückobel</a>
                            <a href="/filialen/hanau-maintal" class="text-[14px] py-1 {{ request()->is('filialen/hanau-maintal*') ? 'text-brand-cyan' : 'text-gray-500' }}" @click="mobileMenuOpen = false">Erlensee</a>
                            <a href="/filialen/darmstadt" class="text-[14px] py-1 {{ request()->is('filialen/darmstadt*') ? 'text-brand-cyan' : 'text-gray-500' }}" @click="mobileMenuOpen = false">Darmstadt</a>
                        </div>
                    </div>

                    {{-- Karriere --}}
                    <a href="/karriere" class="flex items-center gap-4 py-3 text-[16px] font-medium {{ request()->is('karriere*') ? 'text-brand-cyan' : 'text-black' }}" @click="mobileMenuOpen = false">
                        <img src="{{ asset('images/icon4.png') }}" alt="" class="w-6 h-6">
                        Karriere
                    </a>

                    {{-- Blog --}}
                    <a href="{{ route('blog.index') }}" class="flex items-center gap-4 py-3 text-[16px] font-medium {{ request()->is('blog*') ? 'text-brand-cyan' : 'text-black' }}" @click="mobileMenuOpen = false">
                        <img src="{{ asset('images/icon5.png') }}" alt="" class="w-6 h-6">
                        Blog
                    </a>
                </nav>
            </div>
        </header>

        {{-- Main Content --}}
        <main class="flex-1">
            @yield('content')
        </main>

        {{-- Footer as card --}}
        <div class="pb-[20px] mt-auto">
            <div class="max-w-[1200px] mx-auto px-4 md:px-6 lg:px-0">
                <footer class="bg-[#323232] text-white rounded-[20px] overflow-hidden">
                    {{-- Main Footer --}}
                    <div class="px-[20px] md:px-[40px] pt-[30px] md:pt-[40px] pb-[20px] md:pb-[30px] flex flex-col lg:flex-row items-start justify-between gap-6 md:gap-8">
                        {{-- Logo (PNG with opacity) --}}
                        <a href="/" class="shrink-0">
                            <img src="{{ asset('images/logo-white.png') }}" alt="Pflegegruppe Rhein-Main" class="h-[40px] md:h-[50px] opacity-70">
                        </a>

                        {{-- Footer Nav + CTA in column --}}
                        <div class="flex flex-col items-start md:items-end gap-[20px]">
                            <nav class="flex flex-wrap items-center gap-x-[20px] md:gap-[30px] gap-y-[10px]">
                                <a href="/" class="text-[16px] md:text-[18px] font-medium text-white hover:opacity-80 transition-opacity">Startseite</a>
                                <a href="/leistungen" class="text-[16px] md:text-[18px] font-medium text-white hover:opacity-80 transition-opacity">Leistungen</a>                              
                                <a href="/filialen" class="text-[16px] md:text-[18px] font-medium text-white hover:opacity-80 transition-opacity">Filialen</a>
                                <a href="/karriere" class="text-[16px] md:text-[18px] font-medium text-white hover:opacity-80 transition-opacity">Karriere</a>
                                <a href="{{ route('blog.index') }}" class="text-[16px] md:text-[18px] font-medium text-white hover:opacity-80 transition-opacity">Blog</a>
                            </nav>

                            {{-- CTA Button with white border --}}
                            <a href="{{ route('contact.create') }}" class="inline-flex items-center justify-center w-[183px] h-[50px] md:h-[56px] border-2 border-white hover:bg-white/10 text-white text-[16px] md:text-[18px] font-medium rounded-[10px] transition-colors">
                                Anfrage senden
                            </a>
                        </div>
                    </div>

                    {{-- Bottom bar --}}
                    <div class="px-[20px] md:px-[40px] py-[20px]">
                        <div class="flex flex-col gap-4 text-[16px] md:text-[18px] text-[#8A8A8A]">
                            <nav class="flex flex-wrap items-center gap-x-[20px] md:gap-[30px] gap-y-[8px]">
                                <a href="/impressum" class="hover:text-white transition-colors">Impressum</a>
                                <a href="/datenschutz" class="hover:text-white transition-colors">Datenschutz</a>
                                <a href="/cookie-richtlinie" class="hover:text-white transition-colors">Cookie-Richtlinie</a>
                            </nav>
                            <p>© {{ date('Y') }} Pflegegruppe GmbH</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
