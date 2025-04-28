<x-app-layout>
    <div class="bg-white pb-20">
        <main class="isolate">
            <x-ui.background.net-top-right>
                <x-design></x-design>
            </x-ui.background.net-top-right>

            <x-software></x-software>
            <div class="mt-32 sm:mt-40 xl:mx-auto xl:max-w-7xl xl:px-8">
                <img
                    src="{{ asset('images/06.jpg')}}"
                    alt=""
                    class="aspect-[5/2] w-full object-cover xl:rounded-3xl"
                />
            </div>
            <div class="mt-32 sm:mt-40 xl:mx-auto xl:max-w-7xl px-6 lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    GALLERY 1
                </h2>
                <p class="mt-6 text-xl leading-8 text-gray-600 mb-10">
                    Nunc imperdiet tortor sit amet libero pellentesque, hendrerit faucibus est interdum. Morbi sed gravida massa. Curabitur et mauris libero. Donec gravida, nulla sed ultrices maximus, leo est pharetra diam, quis rutrum urna justo nec massa.
                </p>
                <livewire:image-gallery
                    :images="[
                        'images/gallery/1.jpg',
                        'images/gallery/2.jpg',
                        'images/gallery/3.jpg',
                        'images/gallery/4.jpg',
                        'images/gallery/5.jpg',
                        'images/gallery/6.jpg',
                    ]"
                    grid-class="grid grid-cols-2 sm:grid-cols-3"
                ></livewire:image-gallery>
            </div>
            <div class="mt-24 xl:mx-auto xl:max-w-7xl px-6 lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    GALLERY 2
                </h2>
                <p class="mt-6 text-xl leading-8 text-gray-600 mb-10">
                    Fusce felis orci, consequat nec cursus nec, luctus sodales libero. Nunc scelerisque velit quis bibendum lacinia. In ut erat quis turpis tempor commodo eget at neque. Curabitur ornare lobortis vestibulum. Pellentesque blandit urna sit amet turpis accumsan elementum.
                </p>
                <livewire:image-gallery
                    :images="[
                        'images/gallery/7.jpg',
                        'images/gallery/8.jpg',
                        'images/gallery/9.jpg',
                    ]"
                    grid-class="grid grid-cols-2 sm:grid-cols-3"
                ></livewire:image-gallery>
            </div>

            <div class="mt-24 xl:mx-auto xl:max-w-7xl px-6 lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    GALLERY 3
                </h2>
                <p class="mt-6 text-xl leading-8 text-gray-600 mb-10">
                    Quisque suscipit eget libero nec lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis eleifend tincidunt erat, eget aliquam turpis scelerisque et. Nulla eu vulputate odio.
                </p>
                <livewire:image-gallery
                    :images="[
                        'images/gallery/10.jpg',
                        'images/gallery/11.jpg',
                        'images/gallery/12.jpg',
                    ]"
                    grid-class="grid grid-cols-2 sm:grid-cols-3"
                ></livewire:image-gallery>
            </div>
        </main>
    </div>
</x-app-layout>
