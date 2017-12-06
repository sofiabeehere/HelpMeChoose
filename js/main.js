$('.parallax-window').parallax({imageSrc: 'img/banner.png'});

$('.env-parallax-window').parallax({imageSrc: 'img/programs/envsci.png'});

$(function() {
    function toggleDropdown(t) {
         $(t).siblings(".dropdown-content").toggle();
        $(t).children(".dropdown-arrow").toggleClass('rotate');
        $(t).toggleClass('hide-border');
    }
});