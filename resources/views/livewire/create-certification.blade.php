<div>
    <p class="text-xl leading-8 text-gray-600 mb-5 mt-20">Aggiungi una nuova certificazione</p>
    <form wire:submit="save">
        <div class="flex items-center justify-center w-full mb-2">
            <label for="certifications-images" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-3 pb-4">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    @if ($form->file)
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $form->file->getClientOriginalName() }}</p>
                    @else
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Clicca per caricare</span> o trascina il tuo file</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">PDF (MAX. 1 MB )</p>
                    @endif
                </div>
                <input id="certifications-images" type="file" class="hidden" wire:model.live="form.file" accept="application/pdf" />
            </label>
        </div>

        @error('form.file')
            <span class="error">{{ $message }}</span>
        @enderror

        <div class="mb-2 flex md:w-1/2">
            <input
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 text-xs text-gray-900"
                type="text"
                placeholder="{{ __('Nome certificazione') }}"
                wire:model.live="form.name"
            >
            @error('form.name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-2 flex md:w-1/2">
            <textarea
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 text-xs text-gray-900"
                rows="3"
                placeholder="{{ __('Descrizione (opzionale)') }}"
                wire:model.live="form.description"
            ></textarea>
            @error('form.description')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <x-primary-button type="submit">@lang('Salva')</x-primary-button>

        @if (session()->has('message'))
            <div class="mt-4 rounded-md bg-green-200 px-4 py-2">
                {{ session()->get('message') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="mt-4 rounded-md bg-red-400 px-4 py-2">
                {{ session()->get('error_message') }}
            </div>
        @endif
    </form>
</div>
