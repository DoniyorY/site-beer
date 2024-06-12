$(document).ready(function(){

    const owl = $('.owl-carousel1');
    const menu_owl = $('.owl-carousel2');
    owl.owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:4
            }
        }
    })

    menu_owl.owlCarousel({
        loop:false,
        margin:10,
        nav:false,

        responsive:{
            0:{
                items:2,
                autoplay:true,
            },
            600:{
                items:1
            },
            1000:{
                items:4,
                autoplay:false,
            }
        }
    })

})


