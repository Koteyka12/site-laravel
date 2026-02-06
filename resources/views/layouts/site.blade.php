<!doctype html>
<html lang="de">
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
<body class="bg-white text-gray-900 font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        {{-- Header --}}
        <header class="h-[100px] flex items-center">
            <div class="w-full max-w-[1200px] mx-auto px-6 lg:px-0">
                <div class="flex items-center justify-between">
                    {{-- Logo --}}
                    <a href="/" class="shrink-0">
                        <img src="{{ asset('images/logo.svg') }}" alt="Pflegegruppe Rhein-Main" class="h-[65px] w-auto">
                    </a>

                    {{-- Navigation + CTA --}}
                    <div class="hidden md:flex items-center gap-[22px]">
                        <nav class="flex items-center gap-[22px]">
                            <a href="/" class="text-[18px] font-medium leading-[18px] {{ request()->routeIs('home') || request()->path() === '/' ? 'text-brand-cyan' : 'text-black hover:text-brand-cyan' }} transition-colors">Startseite</a>
                            <a href="/leistungen" class="text-[18px] font-medium leading-[18px] {{ request()->is('leistungen*') ? 'text-brand-cyan' : 'text-black hover:text-brand-cyan' }} transition-colors">Leistungen</a>
                            <a href="/filialen" class="text-[18px] font-medium leading-[18px] {{ request()->is('filialen*') ? 'text-brand-cyan' : 'text-black hover:text-brand-cyan' }} transition-colors">Filialen</a>
                            <a href="/karriere" class="text-[18px] font-medium leading-[18px] {{ request()->is('karriere*') ? 'text-brand-cyan' : 'text-black hover:text-brand-cyan' }} transition-colors">Karriere</a>
                            <a href="{{ route('blog.index') }}" class="text-[18px] font-medium leading-[18px] {{ request()->is('blog*') ? 'text-brand-cyan' : 'text-black hover:text-brand-cyan' }} transition-colors">Blog</a>
                        </nav>

                        {{-- CTA Button --}}
                        <a href="{{ route('contact.create') }}" class="inline-flex items-center justify-center w-[183px] h-[56px] bg-brand-green hover:opacity-90 text-black text-[18px] font-medium leading-[18px] rounded-[10px] transition-opacity">
                            Anfrage senden
                        </a>
                    </div>

                    {{-- Mobile menu button --}}
                    <button type="button" class="md:hidden p-2 text-gray-700" x-data @click="$dispatch('toggle-mobile-menu')">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        {{-- Main Content --}}
        <main class="flex-1">
            @yield('content')
        </main>

        {{-- Footer as card --}}
        <div class="pb-[20px] mt-auto">
            <div class="max-w-[1200px] mx-auto px-6 lg:px-0">
                <footer class="bg-[#323232] text-white rounded-[20px] overflow-hidden">
                    {{-- Main Footer --}}
                    <div class="px-[40px] pt-[40px] pb-[30px] flex flex-col lg:flex-row items-start justify-between gap-8">
                        {{-- Logo (PNG with opacity) --}}
                        <a href="/" class="shrink-0">
                            <img src="{{ asset('images/logo-white.png') }}" alt="Pflegegruppe Rhein-Main" class="h-[50px] opacity-70">
                        </a>

                        {{-- Footer Nav + CTA in column --}}
                        <div class="flex flex-col items-end gap-[20px]">
                            <nav class="flex flex-wrap items-center gap-[30px]">
                                <a href="/" class="text-[18px] font-medium text-white hover:opacity-80 transition-opacity">Startseite</a>
                                <a href="/leistungen" class="text-[18px] font-medium text-white hover:opacity-80 transition-opacity">Leistungen</a>                              
                                <a href="/karriere" class="text-[18px] font-medium text-white hover:opacity-80 transition-opacity">Karriere</a>
                                <a href="/filialen" class="text-[18px] font-medium text-white hover:opacity-80 transition-opacity">Filialen</a>
                                <a href="{{ route('blog.index') }}" class="text-[18px] font-medium text-white hover:opacity-80 transition-opacity">Blog</a>
                            </nav>

                            {{-- CTA Button with white border --}}
                            <a href="{{ route('contact.create') }}" class="inline-flex items-center justify-center w-[183px] h-[56px] border-2 border-white hover:bg-white/10 text-white text-[18px] font-medium rounded-[10px] transition-colors">
                                Anfrage senden
                            </a>
                        </div>
                    </div>

                    {{-- Bottom bar --}}
                    <div class="px-[40px] py-[20px]">
                        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-[18px] text-[#8A8A8A]">
                            <p>© {{ date('Y') }} Pflegegruppe GmbH</p>
                            <nav class="flex items-center gap-[30px]">
                                <a href="/impressum" class="hover:text-white transition-colors">Impressum</a>
                                <a href="/datenschutz" class="hover:text-white transition-colors">Datenschutz</a>
                                <a href="/cookie-richtlinie" class="hover:text-white transition-colors">Cookie-Richtlinie</a>
                            </nav>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
