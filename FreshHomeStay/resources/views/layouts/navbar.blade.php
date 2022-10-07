 <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4 ">
        <!-- Swiper -->
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/images/carousel/1.jpg" class="w-100 d-block" height="350px;" />
                </div>
                <div class="swiper-slide">
                    <img src="/images/carousel/2.jpg" class="w-100 d-block" height="350px;" />
                </div>
                <div class="swiper-slide">
                    <img src="/images/carousel/3.jpg" class="w-100 d-block" height="350px;" />
                </div>
                <div class="swiper-slide">
                    <img src="/images/carousel/4.jpg" class="w-100 d-block" height="350px;" />
                </div>
                <div class="swiper-slide">
                    <img src="/images/carousel/5.jpg" class="w-100 d-block" height="350px;" />
                </div>
                <div class="swiper-slide">
                    <img src="/images/carousel/6.jpg" class="w-100 d-block" height="350px;" />
                </div>
                <div class="swiper-slide">
                    <img src="/images/carousel/7.jpg" class="w-100 d-block" height="350px;" />
                </div>
                <div class="swiper-slide">
                    <img src="/images/carousel/8.jpg" class="w-100 d-block" height="350px;" />
                </div>
                <div class="swiper-slide">
                    <img src="/images/carousel/9.jpg" class="w-100 d-block" height="350px;" />
                </div>
                <div class="swiper-slide">
                    <img src="/images/carousel/10.jpg" class="w-100 d-block" height="350px;" />
                </div>
                <div class="swiper-slide">
                    <img src="/images/carousel/11.jpg" class="w-100 d-block" height="350px;" />
                </div>
                <div class="swiper-slide">
                    <img src="/images/carousel/12.jpg" class="w-100 d-block" height="350px;" />
                </div>
                <div class="swiper-slide">
                    <img src="/images/carousel/13.jpg" class="w-100 d-block" height="350px;" />
                </div>
            </div>
        </div>
    </div>

    
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: 0,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
