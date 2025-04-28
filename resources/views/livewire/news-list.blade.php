<div class="py-24 sm:py-32 mt-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                News
            </h2>
            <p class="mt-6 text-xl leading-8 text-gray-600">
                Rimani aggiornato sulle nostre attività e i nostri eventi.
            </p>
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2">

                <!-- -->
                @foreach ($posts as $post)
                    <a href="{{ route('post', ['post' => $post]) }}">
                        <div class="flex items-center gap-x-4 text-xs mb-2">
                            <div class="relative z-10 rounded-full bg-gray-100 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                                <time datetime="{{ Carbon\Carbon::parse($post->date)->format('Y-m-d')}}" class="text-gray-500">{{ Carbon\Carbon::parse($post->date)->format('M d, Y') }}</time>
                            </div>
                        </div>
                        <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                            <img
                                src="{{ asset($post->main_image_url) }}"
                                alt=""
                                class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover"
                            />
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            {{ $post->title }}
                        </h3>
                    </a>
                @endforeach

                <!-- More posts... -->
            </div>
        </div>
    </div>
</div>
