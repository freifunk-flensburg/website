/*
    smooth scrolling
*/
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});

/*
    init particle background
*/
$(document).ready(function() {
    $('#start_simulate-wlan').particleground({
        minSpeedX: 0.1,
        maxSpeedX: 0.1,
        minSpeedY: 0.1,
        maxSpeedY: 0.1,
        dotColor: '#ffffff',
        lineColor: '#ffffff',
        particleRadius: 10,
        lineWidth: 1,
        proximity: 100,
        parallaxMultiplier: 20
    });
});

/*
    sticky navigation
*/
$(document).ready(function() {
    var stickyTop = $('#main-header').offset().top;
    
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();
             
        if (scrollTop > stickyTop) { 
            $('html').addClass('sticky');
        } else {
            $('html').removeClass('sticky'); 
        }
    };

    $(window).scroll(function() {
        stickyNav();
    });
});
