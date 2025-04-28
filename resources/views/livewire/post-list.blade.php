<div class="mt-10">
    @foreach($posts as $post)
        <div class="flex flex-row py-2">
            <div class="basis-1/4 md:basis-3/5">
                <h3 class="inline-block align-middle">{{ $post->title }}</h3>
            </div>
            <div class="basis-1/4 md:basis-1/5">
                <button
                    class="rounded-md border border-transparent bg-red-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-red-700 focus:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-red-900"
                    type="button"
                    wire:click="deletePost({{$post}})"
                    wire:confirm="Confermi di voler eliminare questo post?"
                >
                    @lang('Elimina')
                </button>
            </div>
            <div class="basis-1/4 md:basis-1/5">
                <a
                    href="{{ route('dashboard.posts.edit', ['post' => $post]) }}"
                    class="inline-block align-middle px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                >
                    @lang('Modifica')
                </a>
            </div>
        </div>
    @endforeach
</div>
