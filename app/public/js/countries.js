$(document).ready(function () {

    $('#form_exclCountry').tokenfield({
        autocomplete: {
            source: function (request, response) {
                $.ajax({
                    type: 'POST',
                    url: '/country-brands/list',
                    data: {'country': 'country'},
                    success: function (data) {
                        let transformed = $.map(data, function (el) {
                            return el;
                        });
                        response(transformed);
                    }
                })
            },
            delay: 100
        },
        showAutocompleteOnFocus: true
    });

    $('#form_exclMake').tokenfield({
        autocomplete: {
            source: function (request, response) {
                $.ajax({
                    type: 'POST',
                    url: '/country-brands/list',
                    data: {'brand': 'brands'},
                    success: function (data) {
                        let transformed = $.map(data, function (el) {
                            return el;
                        });
                        response(transformed);
                    }
                })
            },
            delay: 100
        },
        showAutocompleteOnFocus: true
    });
});
