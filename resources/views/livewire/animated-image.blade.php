<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity 1s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
      opacity: 0;
    }
</style>

<div x-data="{
    images: ['images/{{ $imagesFolder }}/01.JPG', 'images/{{ $imagesFolder }}/02.JPG', 'images/{{ $imagesFolder }}/03.JPG'],
    currentIndex: 0,
    interval: null,
    startInterval() {
        this.interval = setInterval(() => {
            this.currentIndex = (this.currentIndex + 1) % this.images.length;
        }, 4000);
    },
}" x-init="startInterval()">
    <template x-if="true">
        <img :src="images[currentIndex]" alt="" class="aspect-[5/4] object-cover xl:rounded-xl  fade-enter-active fade-leave-active">
    </template>
</div>
