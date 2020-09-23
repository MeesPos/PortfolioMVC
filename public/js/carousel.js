var owl = $('.owl-carousel');
owl.owlCarousel({
    loop: true,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    items: 4,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        },
        1650: {
            items: 4
        }
    }
});