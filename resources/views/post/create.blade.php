<x-app-layout>
    <div class="py-12 mt-20 divide-y divide-gray-500/10 space-y-4">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <a
                href="{{ route('dashboard.index') }}"
                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
            >@lang('Indietro')</a>
            <livewire:create-post></livewire:create-post>
        </div>
    </div>
</x-app-layout>
