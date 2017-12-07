var filterList = [];

$(function() {
    // Dropdowns in Filtering Sidebar for browse.html
    function toggleDropdown(t) {
        $(t).siblings(".dropdown-content").toggle();
        $(t).children(".dropdown-arrow").toggleClass('rotate');
        $(t).toggleClass('hide-border');
    }

<<<<<<< HEAD
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
=======
    // Filtering Sidebar for browse.html
    var $grid = $('.programs-grid').isotope({
        // options
        itemSelector: '.card',
        layoutMode: 'fitRows'
    });

    $(".checkbox-values").on("click", "input", function() {
        var filter = $(this).attr("data-filter");

        // Add or remove from filter
        if ($(this).is(":checked")) {
            filterList.push(filter);
        } else {
            var index = filterList.indexOf(filter);
            if (index > -1) {
                filterList.splice(index, 1);
            }
        }

        // Convert to string
        if (filterList.length > 0) {
            var output = filterList.toString();
        } else {
            var output = '*';
        }

        // Filter
        $grid.isotope({
            filter: output
        });
    });

    // Reading progress indicator for details.html
    $('.progress-sidebar a').on('click', function() {
        var scrollAnchor = $(this).attr('data-scroll'),
        scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 75;

        $('body,html').animate({
            scrollTop: scrollPoint
        }, 500);
        return false;
>>>>>>> 6bbe61399f7e9d8d07f5da6f283b27758b1257e7
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