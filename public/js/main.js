$('.first-home-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    rtl: true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.service-home-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    rtl: true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
});

$('.sidebar-slider').owlCarousel({
    loop:true,
    margin:0,
    autoplay: true,
    nav: true,
    rtl: true,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
});

$('.blog-slider').owlCarousel({
    loop:true,
    margin:10,
    nav: true,
    rtl: true,
    touchDrag  : false,
    mouseDrag  : false,
    dots: true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

$('.about-slider').owlCarousel({
    loop:true,
    margin:0,
    autoplay: true,
    nav: true,
    rtl: true,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

if ($(window).width() > 996) {
    var waypoint = new Waypoint({
        element: document.getElementById('why-us'),
        handler: function() {
            $('#why-us .visibility-0').removeClass('visibility-0');
            $('.why-us-box-animation').addClass('animated bounceInLeft'),
            $('.why-us-box-animation-2').addClass('animated bounceInRight'),
            $('.why-us-box-animation-3').addClass('animated bounceInRight')
        }, offset: '70%'
    });

    var waypoint = new Waypoint({
        element: document.getElementById('vedio'),
        handler: function() {
            $('#vedio .visibility-0').removeClass('visibility-0');
            $('.vedio-caption').addClass('animated bounceInLeft'),
            $('.vedio').addClass('animated bounceInDown')
        }, offset: '70%'
    });

    var waypoint = new Waypoint({
        element: document.getElementById('services'),
        handler: function() {
            $('#services .visibility-0').removeClass('visibility-0');
            $('.service-animation').addClass('animated bounceInRight'),
            $('.service-animation-2').addClass('animated bounceInRight'),
            $('.service-animation-3').addClass('animated bounceInDown'),
            $('.service-animation-4').addClass('animated bounceInDown')
        }, offset: '70%'
    });

    var waypoint = new Waypoint({
        element: document.getElementById('blogs'),
        handler: function() {
            $('#blogs .visibility-0').removeClass('visibility-0');
            $('.blog-animation').addClass('animated fadeInRight'),
            $('.blog-animation-2').addClass('animated fadeInRight'),
            $('.blog-animation-3').addClass('animated fadeInRight')
        }, offset: '70%'
    });

} else {
    $('.visibility-0').removeClass('visibility-0');
}


window.onload = function() {
	lax.setup() // init

	const updateLax = () => {
		lax.update(window.scrollY)
		window.requestAnimationFrame(updateLax)
	}

	window.requestAnimationFrame(updateLax)
}




