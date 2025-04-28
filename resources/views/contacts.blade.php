<x-app-layout>
    <div class="bg-white">
        <main class="isolate">
            <div class="relative isolate bg-white">
                <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2 align-items-center">
                    <div class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-48">
                        <x-contact-list></x-contact-list>
                    </div>
                    <div class="px-10 pb-20 pt-16 md:pt-20 hidden md:block">
                        <livewire:contact-form></livewire:contact-form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
