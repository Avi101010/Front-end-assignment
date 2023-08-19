var modal = document.getElementById("myModal");
var submitButton = document.getElementById("contact-form").querySelector('input[type="submit"]');
var okayButton = modal.querySelector("#modal-okay-button");

submitButton.addEventListener("click", function (event) {
    event.preventDefault();
    modal.style.display = "block";
    document.body.classList.add("modal-open");
});

okayButton.addEventListener("click", function () {
    modal.style.display = "none";
    document.body.classList.remove("modal-open");
});

window.addEventListener("click", function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
        document.body.classList.remove("modal-open");
    }
});