window.onload = () => {
    //management of "delete" buttons
    let links = document.querySelectorAll("[data-delete]")

    for (let link of links) {
        link.addEventListener("click", function (e) {
            e.preventDefault()

            if (confirm("Вo you really want to delete this image?")) {
                fetch(this.getAttribute("href"), {
                    method: "DELETE",
                    headers: {
                        "X-Requested-With": "XM:HttpRequest",
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({"_token": this.dataset.token})
                }).then(
                    response => response.json()
                ).then(data => {
                    if (data.success) {
                        this.parentElement.remove()
                    } else {
                        alert(data.error)
                    }
                }).catch(e => alert(e))
            }
        })
    }
}