<header class="absolute inset-x-0 top-0 z-50" x-data="{ isOpen: false }">
    <nav class="mx-auto flex max-w-7xl items-center justify-between py-4 px-6 lg:px-0" aria-label="Global">
        <!-- Logo -->
        <div class="flex lg:flex-1">
            <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                <span class="sr-only">TALL</span>
                <img class="h-12 w-auto" src="{{ asset('images/logos/colored_logo.png')}}" alt="TALL" />
            </a>
        </div>
        <!-- Menu hamburger per dispositivi mobili -->
        <div class="flex lg:hidden">
            <button type="button" @click="isOpen = !isOpen" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 bg-white border border-gray-500">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h18M3 6h18M3 18h18"></path>
                </svg>
            </button>
        </div>
        <!-- Menu principale -->
        <div class="hidden lg:flex lg:gap-x-12 py-4">
            <!-- Elementi del menu -->
            <a href="{{ route('home') }}" class="text-sm font-semibold leading-6 {{ request()->route()->named('home') ? 'text-white' : 'text-gray-900'}}">Home</a>
            <a href="{{ route('about_us') }}" class="text-sm font-semibold leading-6 {{ request()->route()->named('home') ? 'text-white' : 'text-gray-900'}}">Chi siamo</a>
            <a href="{{ route('services') }}" class="text-sm font-semibold leading-6 {{ request()->route()->named('home') ? 'text-white' : 'text-gray-900'}}">Servizi</a>
            <a href="{{ route('news') }}" class="text-sm font-semibold leading-6 {{ request()->route()->named('home') ? 'text-white' : 'text-gray-900'}}">News</a>
            <a href="{{ route('certifications') }}" class="text-sm font-semibold leading-6 {{ request()->route()->named('home') ? 'text-white' : 'text-gray-900'}}">Documenti</a>
            <a href="{{ route('contacts') }}" class="text-sm font-semibold leading-6 {{ request()->route()->named('home') ? 'text-white' : 'text-gray-900'}}">Contatti</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            @auth
                <a href="{{ route('dashboard.index') }}" class="text-sm font-semibold leading-6 {{ request()->route()->named('home') ? 'text-white' : 'text-gray-900'}}">Impostazioni</a>
            @endauth
        </div>
    </nav>
    <!-- Menu mobile, mostrato/nascosto in base allo stato di apertura del menu. -->
    <div x-show="isOpen" class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Sfondo del menu, mostrato/nascosto in base allo stato di apertura del menu. -->
        <div @click.away="isOpen = false" class="fixed inset-0 z-50"></div>
        <!-- Contenuto del menu mobile -->
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                    <span class="sr-only">TALL</span>
                    <img class="h-12 w-auto" src="{{ asset('images/logos/logo_small.png')}}" alt="TALL" />
                </a>
                <!-- Bottone per chiudere il menu -->
                <button @click="isOpen = !isOpen" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Chiudi menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <!-- Elementi del menu mobile -->
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="{{ route('home') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Home</a>
                        <a href="{{ route('about_us') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Chi siamo</a>
                        <a href="{{ route('services') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Reparti e Servizi</a>
                        <a href="{{ route('news') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">News</a>
                        <a href="{{ route('certifications') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Documenti</a>
                        <a href="{{ route('contacts') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contatti</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
