$(document).ready(function () {
    $('#fault_form_images').change(function () {
        imagePreview(this);
    });
});
    function imagePreview(input) {
        $("#selectedImage").empty();
        if (input.files.length && input.files[0]) {
            for (let i = 0; i < input.files.length; i++) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $($.parseHTML('<img>')).attr({'src':e.target.result,'width':'200','height':'200','class':'ml-2'}).appendTo('#selectedImage');
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    }

