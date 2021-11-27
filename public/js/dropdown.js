$( document ).ready(function(){
let dropdown=document.getElementById("dropdown");
    let account= document.getElementById('account');
    if (account) {
        account.addEventListener('click', (evt) => {
            dropdown.classList.toggle("show");
        });
    }
    document.getElementById("account").addEventListener('click',function(event) {
        event.stopPropagation();
    });
});
