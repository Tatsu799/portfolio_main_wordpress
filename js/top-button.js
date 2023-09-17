'use strict';

let topButton = document.querySelector("#top-button");
topButton.addEventListener("click", scroll_top);
function scroll_top() {
    window.scroll({
        top: 0,
        behavior: "smooth"
    });
};

window.addEventListener("scroll", function() {
    const topBtn = document.getElementById("top-button");
    const scroll = window.pageYOffset;
    if (scroll > 350) {
        topBtn.style.opacity = 1;
    } else topBtn.style.opacity = 0;
});