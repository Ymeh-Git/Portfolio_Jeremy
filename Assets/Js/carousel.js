document.addEventListener("DOMContentLoaded", () => {
    
    // ==========================================
    // 1. Principal Carrousel (Manuel)
    // ==========================================
    // Get our container
    const container = document.querySelector('.carousel-container');
    // Get our buttons prev and next
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const totalItemsAvailable = document.querySelectorAll('.item').length;

    if(totalItemsAvailable == 1){
        prevBtn.classList.add("hidden")
        nextBtn.classList.add("hidden")
    }
    // Implement an index to keep track of the current hobby
    let currentIndex = 0;

    function updateMainCarousel() {
        // Get all items to calculate the width of one item
        const items = document.querySelectorAll('.item');
        const width = items[0].getBoundingClientRect().width;
        container.scrollTo({
            left: currentIndex * width,
            behavior: 'smooth'
        });
    }

    nextBtn.addEventListener('click', () => {
        const totalItems = document.querySelectorAll('.item').length;
        if (currentIndex < totalItems - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; 
        }
        updateMainCarousel();
    });

    prevBtn.addEventListener('click', () => {
        const totalItems = document.querySelectorAll('.item').length;
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalItems - 1;
        }
        updateMainCarousel();
    });

    window.addEventListener('resize', updateMainCarousel);


    // ==========================================
    // 2. Internel Carousels (Automatique)
    // ==========================================
    const internalCarousels = document.querySelectorAll('.images-carousel');

    internalCarousels.forEach(carousel => {
        const track = carousel.querySelector('.images-track');
        const images = track.querySelectorAll('img');

        if (images.length <= 1) return; 

        let imgIndex = 0;

        function autoPlay() {
            imgIndex++;
            if (imgIndex >= images.length) {
                imgIndex = 0; 
            }

            track.style.transform = `translateX(-${imgIndex * 100}%)`;
        }

        setInterval(autoPlay, 3000); 
    });
});