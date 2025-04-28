<div class="mt-10">
    @foreach ($certifications as $certification)
        <figure class="col-span-2 rounded-2xl bg-white shadow-lg ring-1 ring-gray-900/5 mb-5">
            <div class="p-4 sm:p-10">
                <h2 class="text-xl font-semibold leading-8 tracking-tight text-gray-900">
                    {{ $certification->name}}
                </h2>
                @if ($certification->description)
                    <p class="mt-5 text-sm leading-8 tracking-tight text-gray-600">{{ $certification->description }}</p>
                @endif
            </div>
            <figcaption class="flex justify-end items-center gap-x-4 border-t border-gray-900/10 px-6 py-4">
                <a
                    href="{{ url($certification->path) }}"
                    class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded"
                    target="_blank"
                >APRI</a>
            </figcaption>
        </figure>

    @endforeach
</div>
