   
function moveComets(){
    movM();
    moveB();
    moveG();
    moveP();
}


function movM()
{   
    var mSquare = document.getElementById("comet1");
    var magentaPos = { top: 0, left: 0 };  // Starts at top-left corner
    var targetPos = { top: 200, left: 200 }; // Target position (center)
    var stepMId = setInterval(stepMag, 10);
    
    
        function stepMag() {
            if (magentaPos.top === targetPos.top && magentaPos.left === targetPos.left) {
                clearInterval(stepMId);
                mSquare.style.display = "none";  // Hide the comet after it reaches the center
                createSupernova();
            } else {
                // Get speed from dropdown
                var speed = parseInt(document.getElementById("cometSpeed").value);
    
                if (magentaPos.top < targetPos.top) magentaPos.top += (35 - speed);
                if (magentaPos.left < targetPos.left) magentaPos.left += (35 - speed);
    
                mSquare.style.top = magentaPos.top + 'px';
                mSquare.style.left = magentaPos.left + 'px';
                mSquare.style.display = "block";
            }
        }
}

function moveB(){
     var bSquare = document.getElementById("comet2");
    var bluePos = { top: 0, left: 300 }; // Starts at top-right corner
    var targetPos = { top: 200, left: 200 }; // Target position (center)
    var stepBId = setInterval(stepBl, 10);

    function stepBl() {
        if (bluePos.top === targetPos.top && bluePos.left === targetPos.left) {
            clearInterval(stepBId);
            bSquare.style.display = "none";  // Hide the comet after it reaches the center
            createSupernova();
        } else {
            // Get speed from dropdown
            var speed = parseInt(document.getElementById("cometSpeed").value);

            if (bluePos.top < targetPos.top) bluePos.top += (35 - speed);
            if (bluePos.left > targetPos.left) bluePos.left -= (35 - speed);

            bSquare.style.top = bluePos.top + 'px';
            bSquare.style.left = bluePos.left + 'px';
            bSquare.style.display = "block";
        }
    }
}


function moveG(){
    var gSquare = document.getElementById("comet3");
    var greenPos = { top: 300, left: 0 }; // Starts at bottom-left corner
    var targetPos = { top: 200, left: 200 }; // Target position (center)
    var stepGId = setInterval(stepGr, 10);

    function stepGr() {
        if (greenPos.top === targetPos.top && greenPos.left === targetPos.left) {
            clearInterval(stepGId);
            gSquare.style.display = "none";  // Hide the comet after it reaches the center
            createSupernova();
        } else {
            // Get speed from dropdown
            var speed = parseInt(document.getElementById("cometSpeed").value);

            if (greenPos.top > targetPos.top) greenPos.top -= (35 - speed);
            if (greenPos.left < targetPos.left) greenPos.left += (35 - speed);

            gSquare.style.top = greenPos.top + 'px';
            gSquare.style.left = greenPos.left + 'px';
            gSquare.style.display = "block";
        }
    }
}

function moveP(){
    var pSquare = document.getElementById("comet4");
    var purplePos = { top: 300, left: 300 }; // Starts at bottom-right corner
    var targetPos = { top: 200, left: 200 }; // Target position (center)
    var stepPId = setInterval(stepPu, 10);

    function stepPu() {
        if (purplePos.top === targetPos.top && purplePos.left === targetPos.left) {
            clearInterval(stepPId);
            pSquare.style.display = "none";  // Hide the comet after it reaches the center
            createSupernova();
        } else {
            // Get speed from dropdown
            var speed = parseInt(document.getElementById("cometSpeed").value);

            if (purplePos.top > targetPos.top) purplePos.top -= (35 - speed);
            if (purplePos.left > targetPos.left) purplePos.left -= (35 - speed);

            pSquare.style.top = purplePos.top + 'px';
            pSquare.style.left = purplePos.left + 'px';
            pSquare.style.display = "block";
        }
    }
}


// Function to create the supernova with a gradient fill
function createSupernova() {
    var stylesheet = document.getElementById('stylesheet');

            if(stylesheet.getAttribute('href')=='styl.css') {
                stylesheet.setAttribute('href', 'style2.css');
            } else {
                stylesheet.setAttribute('href', 'styl.css');
            }
}



















function moveRed()
{   
    var redSquare = document.getElementById("redSq");   
    var redPos = 0;
    var stepRedId = setInterval(stepRed, 10);
    


    function stepRed() {
        if (redPos == 350) {
            clearInterval(stepRedId);
        } else {
            // Get speed from dropdown
            var speed = parseInt(document.getElementById("redSpeed").value);
            redPos+=(35-speed); 
            redSquare.style.top = redPos + 'px'; 
            redSquare.style.left = redPos + 'px';
        }
    }
}

function moveBlue()
{   
    var blueSquare = document.getElementById("blueSq");   
    var bluePos = 350;
    var stepBlueId = setInterval(stepBlue, 10);
    

    function stepBlue() {
        if (bluePos == 0) {
            clearInterval(stepBlueId);
        } else {
            // Get speed from dropdown
             var speed = parseInt(document.getElementById("blueSpeed").value);
            bluePos -=(35-speed);
            blueSquare.style.top = bluePos + 'px'; 
            blueSquare.style.left = bluePos + 'px';
        }
    }
}