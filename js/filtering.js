$(function() {

    var qsRegex;

    // Filtering Sidebar for browse.html
    var $grid = $('.programs-grid').isotope({
        // options
        itemSelector: '.card',
        layoutMode: 'fitRows'
    });

    // debounce so filtering doesn't happen every millisecond
    function debounce(fn, threshold) {
        var timeout;
        return function debounced() {
            if (timeout) {
                clearTimeout(timeout);
            }

            function delayed() {
                fn();
                timeout = null;
            }
            setTimeout(delayed, threshold || 100);
        };
    }

    var $quicksearch = $('.search-bar').keyup(debounce(function() {
        qsRegex = new RegExp($quicksearch.val(), 'gi');
        $grid.isotope();
    }));

    var output = $(".checkbox-values").on("click", "input", function() {
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

        $grid.isotope({
            filter: output
        });

    });

    // Filter
    $grid.isotope({
        // filter: output
        filter: function() {
            var $this = $(this);
            var searchResult = qsRegex ? $this.text().match(qsRegex) : true;
            var checkboxResult = output;

            return checkboxResult && searchResult;
        }
    });
});