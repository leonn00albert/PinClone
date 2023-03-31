

function random(arr) {
    return arr[Math.floor(Math.random() * (arr.length - 1))]
}

window.addEventListener("load", (event) => {
    let cards = document.getElementsByClassName('overlay');

    for (let i = 0; i < cards.length; i++) {
        cards[i].addEventListener("mouseenter", function (event) {
            console.log(event.target.style.opacity = "1")
        })
        cards[i].addEventListener("mouseleave", function (event) {
            console.log(event.target.style.opacity = "0")
        })

    }
});



