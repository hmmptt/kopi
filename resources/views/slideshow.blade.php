

<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        @foreach($sliders as $slide)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset($slide->img) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="{{ $slide->title }}">
            </div>
        @endforeach
    </div>

    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        @foreach($sliders as $index => $slide)
            <button type="button" class="w-3 h-3 rounded-full" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
        @endforeach
    </div>

    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4"/>
                </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

{{-- <div class="relative w-full">
    @foreach($sliders as $slide)
        <div class="absolute inset-0 transition-opacity duration-500 ease-in-out bg-cover bg-center h-screen">
            <img src="{{ $slide->img }}" alt="{{ $slide->title }}" class="w-full h-auto" />
            <div class="container mx-auto h-full flex items-center justify-center">
     <div class="text-center text-white">
      <h1 class="text-5xl font-bold mb-4">
        {{ $slide->title }}
      </h1>
      <p class="text-xl mb-8">
        {{ $slide->desc }}
      </p>
      
     </div>
    </div>
        </div>
    @endforeach
</div>


<button onclick="prevSlide()" class="absolute left-0">Prev</button>
<button onclick="nextSlide()" class="absolute right-0">Next</button>

<script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.absolute');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = (i === index) ? 'block' : 'none';
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }

    showSlide(currentIndex);
</script> --}}