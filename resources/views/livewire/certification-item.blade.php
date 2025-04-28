<div class="py-6">
    <div class="group relative max-w-xl">
        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            {{ $certification->name}}
        </h3>
        @if ($certification->description)
            <p class="mt-3 text-sm leading-6 text-gray-600">{{ $certification->description }}</p>
        @endif
        <div class="flex justify-end mt-3">
            <div class="flex items-end gap-x-4 text-xs mr-auto">
                <time datetime="{{ $certification->created_at }}" class="text-gray-500">{{ $certification->created_at->format('M d, Y') }}</time>
            </div>
            <a
                href="{{ url($certification->path) }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mx-3"
                target="_blank"
            >APRI</a>
            <button
                type="button"
                class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150"
                wire:confirm="Sei sicuro?"
                wire:click="delete"
            >ELIMINA<button>
        </div>
    </div>
</div>
