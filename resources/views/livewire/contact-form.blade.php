<div class="px-6 pb-24 pt-20 sm:pb-32 lg:px-8 lg:py-48">
    <form wire:submit="sendEmail">
        <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                <label
                    for="first-name"
                    class="block text-sm font-semibold leading-6 text-gray-900"
                    >Nome</label
                >
                <div class="mt-2.5">
                    <input
                    type="text"
                    name="first-name"
                    id="first-name"
                    autocomplete="given-name"
                    wire:model="form.firstName"
                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    required
                    />
                </div>
            </div>
            <div>
                <label
                    for="last-name"
                    class="block text-sm font-semibold leading-6 text-gray-900"
                    >Cognome</label
                >
                <div class="mt-2.5">
                    <input
                    type="text"
                    name="last-name"
                    id="last-name"
                    autocomplete="family-name"
                    wire:model="form.lastName"
                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    required
                    />
                </div>
            </div>
            <div class="sm:col-span-2">
                <label
                    for="email"
                    class="block text-sm font-semibold leading-6 text-gray-900"
                    >Email</label
                >
                <div class="mt-2.5">
                    <input
                    type="email"
                    name="email"
                    id="email"
                    autocomplete="email"
                    wire:model="form.email"
                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>
            <div class="sm:col-span-2">
                <label
                    for="phone-number"
                    class="block text-sm font-semibold leading-6 text-gray-900"
                    >Numero di telefono</label
                >
                <div class="mt-2.5">
                    <input
                    type="tel"
                    name="phone-number"
                    id="phone-number"
                    autocomplete="tel"
                    wire:model="form.phoneNumber"
                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
            </div>
            <div class="sm:col-span-2">
                <label
                    for="text"
                    class="block text-sm font-semibold leading-6 text-gray-900"
                    >Messaggio</label
                >
                <div class="mt-2.5">
                    <textarea
                    name="text"
                    id="text"
                    rows="4"
                    wire:model="form.text"
                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    required
                    ></textarea>
                </div>
            </div>
        </div>
        <div class="mt-8 flex justify-end">
            <button
            type="submit"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >
            Invia Messaggio
            </button>
        </div>

        @if (session()->has('message'))
            <div class="mt-4 rounded-md bg-green-200 px-4 py-2">
                {{ session()->get('message') }}
            </div>
        @endif
    </form>
</div>
