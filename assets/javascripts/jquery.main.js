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
      url: 'assets/javascripts/leaflet-0.7.3/leaflet.js',
      dataType: 'script',
      cache: true,
      success: function() {

        var myIcon = L.icon({
            iconUrl: 'assets/images/freifunk-flensburg-map-icon.png',
            iconRetinaUrl: 'assets/images/freifunk-flensburg-map-icon.png',
            iconSize: [30, 32],
            iconAnchor: L.Point[30, 32],
            popupAnchor: L.Point[-15, -32]
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

        $.ajax({
            cache: false,
            url: 'nodes.json',
            dataType: 'json',
            success: function(data) {
                data.nodes.forEach(setNodeToMap);

                var countNodes = 0;

                for (var i = data.nodes.length - 1; i >= 0; i--) {
                    if(data.nodes[i].flags.online && data.nodes[i].name != '') {
                        countNodes++;
                    }
                };

                $('#count-nodes').html(countNodes);
            }
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

    $showCustomerItems.removeClass('active');
    $('#show-customer article:first-child').addClass('active');

    $chooseCustomerItems.click(function() {
        $chooseCustomerItems.removeClass('active');
        $showCustomerItems.removeClass('active');

        $(this).addClass('active');
        $('#'+$(this).data('show-customer')).addClass('active');
    });
});

/*
    firmware download
*/
$(document).ready(function() {
    $('#download-form').submit(function( event ) {
        event.preventDefault();

        var type = '',
            fileExtension = '',
            router,
            community = '';


        switch ($('#download-form-type').val()) {
            case '0':
                type = 'factory';
                break;
            case '1':
                type = 'sysupgrade';
                fileExtension = '-sysupgrade';
                break;
            default:
                type = 'factory';
        }

        switch ($('#download_form_choose_comunity').val()) {
            case '0':
                community = 'notset';
                break;
            case '1':
                community = 'nordlab';
                break;
            default:
                community = 'notset';
        }

        router = $('#download-form-router').val();

        if(router === '-1') {
            window.alert('Bitte wähle eine Router aus. Den genauen Namen und die Version deines Routers findest du auf seiner Unterseite.');
         }
         else{
                if(community == 'notset'){
                    window.alert('Bitte gib eine Comunity an.');
                }
                else {
                    prefix = 'gluon-fffl-S-1.1';
                    window.location.href = 'media/firmware/' + community + '/' + type + '/' + prefix + router + fileExtension + '.bin';
                }
        }

        return false;
    });
});

/*
    smooth scrolling
*/
$(function() {
    var $root = $('html, body');

    $('a').click(function() {
        var href = $.attr(this, 'href');
        $root.animate({
            scrollTop: $(href).offset().top
        }, 500);
        return false;
    });
});
