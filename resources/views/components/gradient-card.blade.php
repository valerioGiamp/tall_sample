<article
    class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80"
    >
    <img
        src="{{ $image }}"
        alt=""
        class="absolute inset-0 -z-10 h-full w-full object-cover"
    />
    <div
        class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"
    ></div>
    <div
        class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"
    ></div>

    <h3 class="text-xl font-semibold leading-6 text-white">
        <a href="#">
        <span class="absolute inset-0"></span>
        {{ $label }}
        </a>
    </h3>
</article>
