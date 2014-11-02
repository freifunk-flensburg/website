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

/*
    get json data for map
*/
$(document).ready(function() {

    $.ajax({
      url: '//cdn.leafletjs.com/leaflet-0.7.3/leaflet.js',
      dataType: 'script',
      cache: true, // otherwise will get fresh copy every page load
      success: function() {

        var myIcon = L.icon({
            iconUrl: 'assets/images/map-icon.png',
            iconRetinaUrl: 'assets/images/map-icon.png',
            iconSize: [40, 42],
            iconAnchor: [40, 42],
            popupAnchor: [-20, -42]
        });

        var map = L.map('map', {
            icon: myIcon,
            scrollWheelZoom: false,
            center: [54.790961, 9.435912],
            zoom: 13
        });

        L.tileLayer('http://otile1.mqcdn.com/tiles/1.0.0/map/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        
        var setNodeToMap = function(node) {
            if(node.geo && node.flags.online) {
                L.marker([node.geo[0], node.geo[1]], {icon: myIcon}).addTo(map).bindPopup('<h3>'+node.name+'</h3>');
            }
        }

        $.getJSON('test-nodes.json', function( data ) {
            data.nodes.forEach(setNodeToMap);
            
            var countNodes = 0;
            
            for (var i = data.nodes.length - 1; i >= 0; i--) {
                if(data.nodes[i].flags.online && data.nodes[i].name != '') {
                    countNodes++;
                }
            };

            $('#count-nodes').html(countNodes);
        });

      }
    });

});

/* 
    choose customer
*/
$(document).ready(function() {
    var $chooseCustomerItems = $('#choose-customer li');
    var $showCustomerItems = $('#show-customer article');

    $chooseCustomerItems.click(function() {
        $chooseCustomerItems.removeClass('active');
        $showCustomerItems.removeClass('active');
        
        $(this).addClass('active');
        $('#'+$(this).data('show-customer')).addClass('active');
    });
});
