document.querySelectorAll('#js-compare').forEach(function (link) {
    link.addEventListener('click', onClickBtnScale);
});

function onClickBtnScale(event) {
    event.preventDefault();

    const url = this.href;
    const icon = this.querySelector('i')
    let divNum = this.dataset.car;
    let scale = $('#js-compare');
    let compareCount = $('#compare-count').val();
    axios.get(url).then(function (response) {
        if (icon.classList.contains('fa-balance-scale')) {
            compareCount++;
            $('#compare-count').val(compareCount);
            icon.classList.replace('fa-balance-scale', 'fa-balance-scale-right');
            scale.classList.replace('text-white', 'text-green');
        } else {
            if (divNum)
                setTimeout(function () {
                    $('#' + divNum).remove();
                }, 300);
            compareCount--;
            if (compareCount === 0) {
                setTimeout(function () {
                    $('#listParam').remove();
                    $('#more').remove();
                    $('#filterFields').remove();
                }, 300);
                setTimeout(function () {
                    let entitySelector = $('#container').html('');
                    entitySelector.append(
                        '   <h2 class="d-flex justify-content-center align-items-center flex-column" style="height: 600px;">\n' +
                        '                You forgot to add cars to comparing list' +
                        '            </h2>');

                }, 400);

            }
            $('#compare-count').val(compareCount);
            icon.classList.replace('fa-balance-scale-right', 'fa-balance-scale');
            scale.classList.replace('text-green', 'text-white');
        }
    }).catch(function (error) {
        if (error.response.status === 403)
            window.alert("To add this car to your favourite you have to login")
    });
}
