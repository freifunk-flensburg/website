<?php
require_once "../../config.inc.php";
?>
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
    choose customer
*/
$(document).ready(function() {
    var $chooseCustomerItems = $('.choose-customer li');
    var $showCustomerItems = $('.show-customer article');

    $showCustomerItems.removeClass('active');
    $('.show-customer article:first-child').addClass('active');

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
                window.alert('Bitte gib eine Community an.');
            }
            else {
                prefix = '<?php
                echo $firmware_prefix;
                ?>';
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
