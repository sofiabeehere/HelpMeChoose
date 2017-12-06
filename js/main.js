$('.parallax-window').parallax({imageSrc: 'img/banner.png'});

$(function() {
    function toggleDropdown(t) {
         $(t).siblings(".dropdown-content").toggle();
        $(t).children(".dropdown-arrow").toggleClass('rotate');
        $(t).toggleClass('hide-border');
    }
});