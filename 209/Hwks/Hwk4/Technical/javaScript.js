   
function moveS()
{   
    var redSquare = document.getElementById("redS");   
    var redPos = 0;
    var stepRedId = setInterval(stepRed, 10);
    // Get speed from dropdown
    var speed = parseInt(document.getElementById("redSpeed").value);

    function stepRed() {
        if (redPos == 350) {
            clearInterval(stepRedId);
        } else {
            redPos+=(35-speed); 
            redSquare.style.top = redPos + 'px'; 
            redSquare.style.left = redPos + 'px';
        }
    }
}

function moveC()
{   
    var blueSquare = document.getElementById("pinkC");   
    var bluePos = 350;
    var stepBlueId = setInterval(stepBlue, 10);
    // Get speed from dropdown
    var speed = parseInt(document.getElementById("blueSpeed").value);

    function stepBlue() {
        if (bluePos == 0) {
            clearInterval(stepBlueId);
        }
         else {
            bluePos -=(35-speed); 
            blueSquare.style.top = bluePos + 'px'; 
            blueSquare.style.left = bluePos + 'px';
        }
    }
}


