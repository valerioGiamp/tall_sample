<div x-data="{
    images: ['images/animated_strip_1.jpg', 'images/animated_strip_2.jpg'],
    currentIndex: 0, // Indice dell'immagine corrente
    interval: null, // Variabile per l'intervallo dell'animazione
    startInterval() {
        this.interval = setInterval(() => {
            this.currentIndex = (this.currentIndex + 1) % this.images.length; // Cambia l'immagine
        }, 4000); // Cambia l'immagine ogni 5 secondi
    },
}" x-init="startInterval()">
    <img :src="images[currentIndex]" alt="" class="aspect-[5/2] w-full object-cover xl:rounded-3xl">
</div>
