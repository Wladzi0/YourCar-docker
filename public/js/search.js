$(document).ready(function () {
    $('#input-search').keyup(function () {
        let minLength = 1;
        let searchQuery = $(this).val();
        let entitySelector = $('#searchResult').html('');
        if (searchQuery.length >= minLength) {
            $.ajax({
                type: 'GET',
                url: '/search',
                data: {
                    'query': searchQuery
                },
                dataType: 'text',
                async: true,
                success: function (response) {
                    entitySelector.innerHTML = '';
                    let arr = JSON.parse(response);
                    arr.forEach(el => {
                        entitySelector.append(
                            '<a style= class="h5" href="/make/' + el['make'] + '/model/' + el['model'] + '">' + el['makeName'] + ' ' + el['modelName'] + '</a><br>');
                    })
                }
            });
        }
    });
});