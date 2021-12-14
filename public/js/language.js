$(document).ready(function () {
        let selector = document.getElementById('language');
        $.ajax({
            type: 'POST',
            url: '/language/add',
            success: function (response) {
                response['languages'].forEach(el => {
                    if(response['userLang'] !== el)
                    selector.options[selector.options.length] = new Option(el, el);
                });
            }
});
    $("#language").bind('change', function () {
        let selectedLanguage = $(this).val();
        $.ajax({
            type: "POST",
            url: "/language/change",
            data: {
                'language': selectedLanguage
            },
            dataType: "text",
            async: true,
            success: function (response) {
                location.reload();
            }

        })
    });
});
