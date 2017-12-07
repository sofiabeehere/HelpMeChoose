$(function() {
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
});