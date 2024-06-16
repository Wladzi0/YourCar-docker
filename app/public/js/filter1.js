$(document).ready(function () {
    $('#filterForm').change(function () {
        let form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '/cars/comparing',
            data: form_data,
            async: true,
            success: function (response) {
                let queryList = response[2];
                let resultList = response[0];
                let text = "";
                // let countResult = document.createTextNode();
                if (response[1] === 'fuelConsumption') {
                    text = 'Fuel consumption (l/km) (' + resultList.length + ')';
                } else if (response[1] === 'power') {
                    text = 'Power (HP) (' + resultList.length + ')';
                } else if (response[1] === 'age') {
                    text = 'Age (' + resultList.length + ')';
                } else if (response[1] === 'tuning') {
                    text = 'Tuning possibility (' + resultList.length + ')';
                } else {
                    text = 'Transmission (' + resultList.length + ')';
                }
               document.getElementById('l_' + response[1]).innerHTML = text;

                for (let i = 0; i < queryList.length; i++) {
                    if (queryList[i] === resultList[i]) {
                        queryList.splice(i, 1);
                    }
                }
                for (const el1 of queryList) {

                    $('[name=' + el1 + ']' + ' [name=' + response[1] + ']').removeClass('bg-success');
                }
                for (const el of resultList) {
                    $('[name=' + el + ']' + ' [name=' + response[1] + ']').addClass('bg-success ');
                }

            }
        });
    })
});