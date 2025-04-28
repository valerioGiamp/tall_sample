<div x-data="quillEditor()" x-init="initEditor()" @quill-change.window="updateContent($event)">
    <p class="text-xl leading-8 text-gray-600 my-5">{{ $title }}</p>
    <form wire:submit.prevent="save">

        <div class="mb-2 flex md:w-1/2">
            <input
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 text-xs text-gray-900"
                type="text"
                placeholder="{{ __('Titolo') }}"
                wire:model.live="form.title"
            >
            @error('form.title')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-2" wire:ignore>
            <div id="editor" class="block w-full rounded-b-lg border border-gray-300 bg-gray-50 p-2 text-xs text-gray-900 mb-2">
                {!! $form->content !!}
            </div>
            @error('form.content')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-2 flex md:w-1/2">
            <div class="relative max-w-sm">
                <input
                    wire:model.live="form.date"
                    datepicker
                    type="date"
                    class="block rounded-lg border border-gray-300 bg-gray-50 p-2 text-xs text-gray-900"
                    placeholder="Select date"
                >
            </div>
            @error('form.date')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- IMAGE SECTION -->
        <div class="mb-2 md:w-1/2">
            <label for="post-images" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-3 pb-4">
                    @if($this->form->uploaded_images)
                        <div class="mb-2">
                            @foreach ($this->form->uploaded_images as $image)
                                <p class="text-gray-500 text-sm font-semibold">{{ $image->getClientOriginalName() }}</p>
                            @endforeach
                        </div>
                    @else
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                    @endif
                    <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Clicca per caricare</span> o trascina le tue immagini</p>
                    <p class="text-xs text-gray-500">JPG, JPEG, PNG (MAX. 4 MB )</p>
                </div>
                <input
                    id="post-images"
                    type="file"
                    class="hidden"
                    wire:model.live="form.uploaded_images"
                    accept="image/png, image/jpeg, image/jpg"
                    multiple
                />
            </label>
            <button type="button" wire:click="uploadImages" class="mt-2 bg-blue-500 text-white rounded-md font-semibold text-xs px-4 py-2 uppercase tracking-widest">Carica</button>
            @error('form.uploaded_images.*')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Display Uploaded Images -->
        <div class="mt-2 mb-2 grid grid-cols-3 sm:grid-cols-5 md:grid-cols-6 gap-2">
            @foreach($form->images as $index => $image)
                <div class="mb-2 flex justify-center">
                    <div class="flex flex-col justify-between h-full">
                        <div>
                            <button type="button" wire:click="deleteImage({{ $index }})" wire:confirm="Sei sicuro di voler rimuovere questa immagine?" class="mb-1 bg-red-700 text-white rounded-md font-semibold text-xs w-full py-2 uppercase tracking-widest">Rimuovi</button>
                            <img src="{{ asset($image['url']) }}" alt="Uploaded Image" class="max-w-32 h-auto rounded">
                        </div>
                        <div class="mt-auto">
                            <input type="radio" id="radio-image-{{ $index }}" value="{{ $image['url'] }}" wire:model="form.main_image">
                            <label for="radio-image-{{ $index }}">Immagine Principale</label>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <!-- Video Links Section -->
        <div class="mb-2 flex md:w-1/2">
            <input
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 text-xs text-gray-900"
                type="text"
                placeholder="{{ __('Link Video (Youtube)') }}"
                wire:model.live="form.video_link"
            >
            <button type="button" wire:click="uploadVideo" class="ml-2 bg-blue-500 text-white rounded-md font-semibold text-xs px-4 py-2 uppercase tracking-widest">Carica</button>
            @error('form.video_link')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-2 grid grid-cols-4 sm:grid-cols-5 md-grid-cols-8">
            @foreach($form->videos as $index => $video)
                <div class="mb-2 flex justify-center">
                    <div>
                        <button type="button" wire:click="removeVideo({{ $index }})" wire:confirm="Sei sicuro di voler rimuovere questo video?" class="mb-1 bg-red-700 text-white rounded-md font-semibold text-xs w-full py-1 uppercase tracking-widest">Rimuovi</button>
                        <img src="{{ asset($video['thumbnail_url']) }}" alt="Uploaded Video" class="max-w-32 h-auto rounded">
                    </div>
                </div>
            @endforeach
        </div>

        <x-primary-button type="submit">@lang('Salva')</x-primary-button>

        @if (session()->has('message'))
            <div class="mt-4 rounded-md bg-green-200 px-4 py-2">
                {{ session()->get('message') }}
            </div>
        @endif
        @if (session()->has('error_message'))
            <div class="mt-4 rounded-md bg-red-400 px-4 py-2">
                {{ session()->get('error_message') }}
            </div>
        @endif
    </form>
</div>


<script>
    function quillEditor() {
        return {
            editor: null,
            initEditor() {
                this.editor = new Quill('#editor', {
                    theme: 'snow',
                    modules: {
                        toolbar: [
                            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                            [{ 'align': [] }],
                            ['bold', 'italic', 'underline', 'strike'],
                            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                            [{ 'indent': '-1' }, { 'indent': '+1' }],
                            [{ 'color': [] }, { 'background': [] }],
                            ['link'],
                            ['clean']
                        ]
                    }
                });

                this.editor.on('text-change', () => {
                    window.dispatchEvent(new CustomEvent('quill-change', {
                        detail: this.editor.root.innerHTML
                    }));
                });
            },
            updateContent(event) {
                @this.set('form.content', event.detail);
            }
        }
    }
  </script>


