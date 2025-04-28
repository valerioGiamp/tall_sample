<x-app-layout>
    <div class="py-12 mt-20 divide-y divide-gray-500/10 space-y-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                News
            </h2>
            <a href="{{ route('dashboard.posts.create') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-5">@lang('Crea nuovo post')</a>
            <livewire:post-list></livewire:post-list>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-5">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Documenti
            </h2>
            <livewire:certification-list></livewire:certification-list>
            <livewire:create-certification></livewire:create-certification>
            <div class="flex justify-end sm:mt-32 mt-20">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-primary-button type="submit">{{ __('Log Out') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
