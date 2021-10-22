document.querySelectorAll('#js-compare').forEach(function (link) {
    link.addEventListener('click', onClickBtnScale);
});
function onClickBtnScale(event) {
    event.preventDefault();

    const url = this.href;
    const icon = this.querySelector('i')
    const scale = this.querySelector('a');
    let divNum=$('#js-compare').data('car');
    let compareCount = $('#compare-count').val();
    alert(divNum);
    axios.get(url).then(function (response) {
        // if (icon.classList.contains('fa-balance-scale')) {
        //     compareCount++;
        //     $('#compare-count').val(compareCount);
        //     icon.classList.replace('fa-balance-scale', 'fa-balance-scale-right');
        //     scale.classList.replace('text-white','text-green');
        // } else {
        //     if (divNum)
        //
        // }
    }).catch(function (error){
        if (error.response.status===403) {
            window.alert("To add this advertisement to your favourite you have to login")
        }
    });
}
