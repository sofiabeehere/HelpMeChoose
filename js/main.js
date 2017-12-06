// Parallax Images

$('.parallax-window').parallax({imageSrc: 'img/banner.png'});

$('.env-parallax-window').parallax({imageSrc: 'img/programs/envsci.png'});

// Dropdowns in Filtering Sidebar for browse.html

$(function() {
    function toggleDropdown(t) {
         $(t).siblings(".dropdown-content").toggle();
        $(t).children(".dropdown-arrow").toggleClass('rotate');
        $(t).toggleClass('hide-border');
    }
});

// Filtering Sidebar for browse.html

var $grid = $('.programs-grid').isotope({
  // options
  itemSelector: '.card',
  layoutMode: 'fitRows'
});

$(".checkbox-values").on("click", "input", function() {
	console.log("clicked");
    var o = $(this).attr("data-filter");
    $grid.isotope({
        filter: o
    })
});

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