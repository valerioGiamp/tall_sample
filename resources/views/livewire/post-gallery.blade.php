<div class="{{ $classList }}">
    <div class="mx-auto mt-6 hidden w-full max-w-2xl sm:block lg:max-w-none">
        <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">
            @foreach ($post->images as $index => $image)
                <button wire:click="updateMainMedia('{{ $image->id }}')" class="relative flex h-24 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4" type="button">
                    <span class="sr-only">View Image {{ $index + 1 }}</span>
                    <span class="absolute inset-0 overflow-hidden rounded-md">
                        <img src="{{ asset($image->url) }}" class="h-full w-full object-cover object-center">
                    </span>
                </button>
            @endforeach
            @foreach ($post->videos as $index => $video)
                <button wire:click="updateMainMedia('{{ $video->id }}')" class="relative flex h-24 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4" type="button">
                    <span class="sr-only">View Video {{ $index + 1 }}</span>
                    <span class="absolute inset-0 overflow-hidden rounded-md">
                        <img src="{{ asset($video->thumbnail_url) }}" class="h-full w-full object-cover object-center">
                    </span>
                </button>
            @endforeach
        </div>
    </div>
    @if($media)
        <div class="aspect-h-1 aspect-w-1 w-full">
            <!-- IMMAGINE INGRANDITA -->
            <div class="h-full w-full">
                @if ($media->media_type == \App\Enums\MediaType::Image)
                    <img src="{{ asset($media->url) }}" alt="Main Image" class="object-cover object-center sm:rounded-lg aspect-[4/3] w-full" />
                @elseif ($media->media_type == \App\Enums\MediaType::Video)
                    <div class="aspect-[16/9]">
                        <iframe width="560" height="315" src="{{ str_replace('youtube.com', 'youtube-nocookie.com', $media->url) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                @endif
            </div>
        </div>
    @endif
</div>
