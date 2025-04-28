<x-ui.background.net-center>
    <div>
        @isset($title)
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                {{ $title }}
            </h2>
        @endisset
        @isset($description)
            <p class="mt-6 text-lg leading-8 text-gray-600">
                {{ $description}}
            </p>
        @endisset
        <div class="mx-auto mt-14 sm:mt-20 grid max-w-lg grid-cols-2 items-center sm:max-w-xl lg:mx-0 lg:max-w-none">
            <img
                class="col-span-2 max-h-32 w-full object-contain lg:col-span-1"
                src="{{ asset('images/sponsors/roseto_pallacanestro.png')}}"
                alt="Roseto Pallacanestro"
            />
            <img
                class="col-span-2 max-h-32 w-full object-contain lg:col-span-1 mt-20 lg:mt-0"
                src="{{ asset('images/sponsors/giulianova calcio.png')}}"
                alt="Giulianova Calcio"
            />
        </div>
    </div>
</x-ui.background.net-center>
