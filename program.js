function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


////////////left menu coloring///////////


jQuery(window).scroll(function() {
    var windscroll = jQuery(window).scrollTop();
    if (windscroll >= 0) {
        jQuery('.wrapper section').each(function(i) {
            if (jQuery(this).position().top <= windscroll - 0) {
                jQuery('.menuleft a.active').removeClass('active');
                jQuery('.menuleft a').eq(i).addClass('active');
            }
        });

    } else {
        jQuery('.menuleft a.active').removeClass('active');
        jQuery('.menuleft a:first').addClass('active');
    }

}).scroll();



/////////////////////
/*
jQuery(window).scroll(function(){
    var scroll_top = jQuery(this).scrollTop(); // get scroll position top
    var height_element_parent =  jQuery(".wrapper").height(); //get high parent element
    var height_element = jQuery(".menuleft").height(); //get high of elemeneto
    var position_fixed_max = height_element_parent - height_element; // get the maximum position of the elemen
    var position_fixed = scroll_top < 100 ? 140 - scroll_top : position_fixed_max > scroll_top ? 40 : position_fixed_max - scroll_top ;
    jQuery(".menuleft").css("top",position_fixed);
});*/


//////////////pics

    var vid = document.getElementById("video");
    vid.autoplay = false;
vid.autostart = false;
    vid.load();

