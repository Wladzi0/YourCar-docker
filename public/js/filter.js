$(document).ready(function() {
    $('#filterForm').change(function () {
        let form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '/cars/comparing',
            data: form_data,
        });
    });
});