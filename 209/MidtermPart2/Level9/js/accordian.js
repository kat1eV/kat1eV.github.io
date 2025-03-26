// LEVEL 9
var NRIMAGES = 14;  
var acc = [];
var i;

function createAccordion() {
    var body = document.body;

    for (var i = 1; i <= NRIMAGES; i++) {
       
        var button = document.createElement("button");
        button.classList.add("accordion");
        button.textContent = "Download Image " + i;

        var panel = document.createElement("div");
        panel.classList.add("panel");

        var link = document.createElement("a");
        link.href = "../images/IMG_" + String(i).padStart(4, '0') + ".jpeg"; 
        link.textContent = "Image " + i;

        panel.appendChild(link);
        body.appendChild(button);
        body.appendChild(panel);

        acc.push(button);
    }

    toggleFunction();
}

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

createAccordion();