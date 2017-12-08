var filterList = [];

$(function() {
    // Dropdowns in Filtering Sidebar for browse.html
    function toggleDropdown(t) {
        $(t).siblings(".dropdown-content").toggle();
        $(t).children(".dropdown-arrow").toggleClass('rotate');
        $(t).toggleClass('hide-border');
    }

    // Reading progress indicator for details.html
    $('.progress-sidebar a').on('click', function() {
        var scrollAnchor = $(this).attr('data-scroll'),
        scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 75;

        $('body,html').animate({
            scrollTop: scrollPoint
        }, 500);
        return false;
    })

    $(window).scroll(function() {
        var windscroll = $(window).scrollTop();
        if (windscroll >= 100) {
            $('.progress-sidebar').addClass('fixed');
            $('.main-program-content section').each(function(i) {
                if ($(this).position().top <= windscroll - 400) {
                    $('.progress-sidebar a.active').removeClass('active');
                    $('.progress-sidebar a').eq(i).addClass('active');
                }
            });

        } else {
            $('.progress-sidebar').removeClass('fixed');
            $('.progress-sidebar a.active').removeClass('active');
            $('.progress-sidebar a:first').addClass('active');
        }

    }).scroll();
});

// Parallax Images
$('.parallax-window').parallax({imageSrc: 'img/banner.png'});
$('.env-parallax-window').parallax({imageSrc: 'img/programs/envsci.png'});
$('.waste-energy-window').parallax({imageSrc: 'img/project/waste-energy-img.jpg'});
$('.iat334-window').parallax({imageSrc: 'img/project/iat334-banner.jpg'});

// Bootstrap tooltip

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});