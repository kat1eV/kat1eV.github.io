// LEVEL 6
var acc = document.getElementsByClassName("accordion"); // Access the accordion buttons
var i;

function togglePanel() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
    } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
    }
}

function toggleFunction(){
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", togglePanel);
    }
}

toggleFunction();