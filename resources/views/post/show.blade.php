<x-app-layout>
    <div class="bg-white pb-20">
        <main class="isolate">
            <x-ui.background.net-top>
                <main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8 mt-32">
                    <div class="mx-auto max-w-2xl lg:max-w-none">
                    <!-- Product -->
                        <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">

                            <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0 sm:order-2">
                                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $post->title }}</h1>

                                <div class="space-y-6 text-base text-gray-700 mt-10 sm:mt-20 post-content">
                                    <style>
                                        .post-content > p,
                                        .post-content > h1,
                                        .post-content > h2,
                                        .post-content > h3,
                                        .post-content > h4,
                                        .post-content > h5,
                                        .post-content > h6 {
                                            margin-top: 5px !important;
                                        }
                                    </style>

                                    {!! $post->content !!}
                                </div>
                            </div>
                            <!-- Image gallery -->
                            <livewire:post-gallery class-list="flex flex-col-reverse sm:order-1s" :$post></livewire:post-gallery>
                        </div>
                    </div>
                </main>
            </x-ui.background.net-top>
        </main>
    </div>
</x-app-layout>
