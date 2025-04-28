<div x-data="{
    isModalOpen: false,
    modalImageUrl: '',
    currentIndex: 0,
    images: {{ json_encode($images) }},
    openModal(index) {
        this.currentIndex = index;
        this.modalImageUrl = this.images[index];
        this.isModalOpen = true;
    },
    closeModal() {
        this.isModalOpen = false;
    },
    prevImage() {
        if (this.currentIndex > 0) {
            this.currentIndex--;
        } else {
            this.currentIndex = this.images.length - 1;
        }
        this.modalImageUrl = this.images[this.currentIndex];
    },
    nextImage() {
        if (this.currentIndex < this.images.length - 1) {
            this.currentIndex++;
        } else {
            this.currentIndex = 0;
        }
        this.modalImageUrl = this.images[this.currentIndex];
    }
}">
    <!-- Gallery -->
    <div class="flex justify-center">
        <div class="{{ $gridClass }} gap-2 mx-2">
            @foreach ($images as $index => $image)
                <img @click="openModal({{ $index }})" src="{{ asset($image) }}" alt="Image" class="cursor-pointer rounded shadow-md aspect-[3/2] object-cover object-center w-full" />
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div x-show="isModalOpen" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50" style="display: none;">
        <!-- Close Button -->
        <button @click="closeModal" class="absolute top-2 right-2 text-gray-700 hover:text-gray-800">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div @click.away="closeModal" class="relative max-w-3xl w-full rounded-lg shadow-lg overflow-hidden">
            <!-- Navigation Buttons -->
            <button @click="prevImage" class="absolute left-2 top-1/2 transform -translate-y-1/2 text-white bg-gray-800 bg-opacity-75 rounded-full p-2 hover:bg-opacity-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button @click="nextImage" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-white bg-gray-800 bg-opacity-75 rounded-full p-2 hover:bg-opacity-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Image Container with Margin -->

            <img :src="modalImageUrl" alt="Modal Image" class="rounded max-h-screen mx-auto">
        </div>
    </div>
</div>
