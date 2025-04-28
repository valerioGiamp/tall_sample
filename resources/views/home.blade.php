<x-app-layout>
    <div class="h-screen overflow-hidden">
        <div class="relative w-full h-screen overflow-hidden">
            <!-- Sfondo del video con opacità -->

            <!-- Video con lazy loading -->
            <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay muted loop loading="lazy">
                <source src="{{ asset('videos/background_video.mp4') }}" type="video/mp4">
            </video>

            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>

            <!-- Contenuto sovrapposto al video -->
            <div class="absolute top-0 left-0 w-full h-full flex items-end justify-center text-white">
                <div class="mr-auto max-w-7xl px-6 pb-14 pt-36 sm:pt-60 lg:px-10 lg:pt-32 w-full">
                    <div class="mr-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center w-full">
                        <div class="w-full lg:shrink-0 xl:max-w-4xl">
                            <h1 class="text-5xl font-bold tracking-tight text-white sm:text-7xl">
                                Lorem Ipsum
                            </h1>
                            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">
                                Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pb-20">
        <main class="isolate">
            <x-ui.background.net-top>
                <x-our-service></x-our-service>
            </x-ui.background.net-top>
            <x-home-certifications></x-home-certifications>

            <x-last-news></x-last-news>
        </main>
    </div>
</x-app-layout>
