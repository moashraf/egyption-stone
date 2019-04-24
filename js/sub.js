jQuery(function($) {
    $('.gallery .item img').click(function() {
        var imgSrc = $(this).attr('src');
        $('.img-src').attr("src", imgSrc);
        $('.popup-overlay').toggleClass('none')
    })
});

jQuery(function($) {
    $('.blog-slider .item img').click(function() {
        var imgSrc = $(this).attr('src');
        $('.blog-img-src').attr("src", imgSrc);
    })
});

jQuery(function($) {
    $('.popup-overlay').click(function() {
        $('.popup-overlay').toggleClass('none')
    })
});

var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);
