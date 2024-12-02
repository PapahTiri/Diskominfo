<!-- resources/views/carousel.blade.php -->
<div class="relative w-full overflow-hidden mt-8 mb-8">
    <div class="flex space-x-4 transition-transform duration-300 ease-in-out" id="carousel-content">
        @foreach($carousel as $c)
            <div class="min-w-full flex-shrink-0 flex justify-center">
                <img src="{{ asset('storage/' . $c->gambar) }}" alt="visi-misi" class="w-1/2 h-auto object-cover">
            </div>
        @endforeach
    </div>
    <!-- Left and Right buttons -->
    <button id="prev" class="absolute top-1/2 transform -translate-y-1/2 left-4 bg-gray-800 text-white p-2 rounded-full">
        &#10094;
    </button>
    <button id="next" class="absolute top-1/2 transform -translate-y-1/2 right-4 bg-gray-800 text-white p-2 rounded-full">
        &#10095;
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carouselContent = document.getElementById('carousel-content');
        const totalItems = {{ count($carousel) }};
        let index = 0;

        document.getElementById('next').addEventListener('click', () => {
            if (index < totalItems - 1) {
                index++;
                carouselContent.style.transform = `translateX(-${index * 100}%)`;
            }
        });

        document.getElementById('prev').addEventListener('click', () => {
            if (index > 0) {
                index--;
                carouselContent.style.transform = `translateX(-${index * 100}%)`;
            }
        });
    });
</script>
