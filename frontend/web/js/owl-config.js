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
        loop:true,
        margin:10,


        responsive:{
            0:{
                items:2,
                autoplay:true,
                nav:false,
            },
            600:{
                items:1,
                nav:false,
            },
            1000:{
                items:4,
                autoplay:false,
                navText:['<img src="/images/owl-left.png" alt="">','<img src="/images/owl-right.png" alt="">'],
                nav:true,
            }
        }
    })

})


