
$('#more').on('click', ClickBtnMore);

function ClickBtnMore(event) {
    const more = document.getElementById('more');
    event.preventDefault();
    if (more.classList.contains('fa-chevron-circle-down')) {
        more.classList.replace('fa-chevron-circle-down', 'fa-chevron-circle-up');
    } else {
        more.classList.replace('fa-chevron-circle-up', 'fa-chevron-circle-down');
    }
    $(".content").each(function () {

        $(this).toggleClass("showContent", 1000);
    });
}