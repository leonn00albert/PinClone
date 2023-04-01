

function random(arr) {
    return arr[Math.floor(Math.random() * (arr.length - 1))]
}

window.addEventListener("load", (event) => {
    let cards = document.getElementsByClassName('overlay');

    for (let i = 0; i < cards.length; i++) {
        cards[i].addEventListener("mouseenter", function (event) {
            event.target.style.opacity = "1"
        })
        cards[i].addEventListener("mouseleave", function (event) {
            event.target.style.opacity = "0"
        })

    }
});



var modal = document.getElementById("myModal");

var btn = document.getElementById("login-btn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var createModal = document.getElementById("createModal");

var createBtn = document.getElementById("create-btn");

var createSpan = document.getElementsByClassName("create-close")[0];


createBtn.onclick = function() {
    createModal.style.display = "block";
  }
  
  createSpan.onclick = function() {
    createModal.style.display = "none";
  }
  
  window.onclick = function(event) {
    if (event.target == createModal) {
        createModal.style.display = "none";
    }
  }