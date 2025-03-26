
var magentaPos = { top: 0, left: 0 };  
var bluePos = { top: 0, left: 300 };  
var greenPos = { top: 300, left: 0 };  
var purplePos = { top: 300, left: 300 };



var originalPositions = {
    magenta: { top: 0, left: 0 },
    blue: { top: 0, left: 300 },
    green: { top: 300, left: 0 },
    purple: { top: 300, left: 300 }
};


function moveComets(){
    movM();
    moveB();
    moveG();
    moveP();
}


function movM()
{   
    var mSquare = document.getElementById("comet1");
    var targetPos = { top: 200, left: 200 }; 
    var stepMId = setInterval(stepMag, 10);
    
    
        function stepMag() {
            if (isCollision(magentaPos, bluePos) || isCollision(magentaPos, greenPos) || isCollision(magentaPos, purplePos)) {
                mSquare.style.display = "none";  
                clearInterval(stepMId);
                return;
            }
            if (magentaPos.top === targetPos.top && magentaPos.left === targetPos.left) {
                clearInterval(stepMId);
                mSquare.style.display = "none";  
                createSupernova();

                
            } else {
                var speed = parseInt(document.getElementById("cometSpeed").value);
    
                if (magentaPos.top < targetPos.top) magentaPos.top += (speed);
                if (magentaPos.left < targetPos.left) magentaPos.left += (speed);
    
                mSquare.style.top = magentaPos.top + 'px';
                mSquare.style.left = magentaPos.left + 'px';
                mSquare.style.display = "block";
            }
        }
}

function moveB(){
        var bSquare = document.getElementById("comet2");
        var targetPos = { top: 200, left: 200 }; 
        var stepBId = setInterval(stepBl, 10);

    function stepBl() {
        if (isCollision(bluePos, magentaPos) || isCollision(bluePos, greenPos) || isCollision(bluePos, purplePos)) {
            bSquare.style.display = "none";  
            clearInterval(stepBId);
            return;
        }
        if (bluePos.top === targetPos.top && bluePos.left === targetPos.left) {
            clearInterval(stepBId);
            bSquare.style.display = "none";  
            createSupernova();

            
        } else {
            var speed = parseInt(document.getElementById("cometSpeed").value);

            if (bluePos.top < targetPos.top) bluePos.top += (speed);
            if (bluePos.left > targetPos.left) bluePos.left -= (speed);

            bSquare.style.top = bluePos.top + 'px';
            bSquare.style.left = bluePos.left + 'px';
            bSquare.style.display = "block";
        }
    }
}


function moveG(){
    var gSquare = document.getElementById("comet3");
    var targetPos = { top: 200, left: 200 }; 
    var stepGId = setInterval(stepGr, 10);

    function stepGr() {
        if (isCollision(greenPos, magentaPos) || isCollision(greenPos, bluePos) || isCollision(greenPos, purplePos)) {
            gSquare.style.display = "none"; 
            clearInterval(stepGId);
            return;
        }
        if (greenPos.top === targetPos.top && greenPos.left === targetPos.left) {
            clearInterval(stepGId);
            gSquare.style.display = "none";  
            createSupernova();
            
        } else {
            var speed = parseInt(document.getElementById("cometSpeed").value);

            if (greenPos.top > targetPos.top) greenPos.top -= (speed);
            if (greenPos.left < targetPos.left) greenPos.left += (speed);

            gSquare.style.top = greenPos.top + 'px';
            gSquare.style.left = greenPos.left + 'px';
            gSquare.style.display = "block";
        }
    }
}

function moveP(){
    var pSquare = document.getElementById("comet4");
    var targetPos = { top: 200, left: 200 }; 
    var stepPId = setInterval(stepPu, 10);

    function stepPu() {
        if (isCollision(purplePos, magentaPos) || isCollision(purplePos, bluePos) || isCollision(purplePos, greenPos)) {
            pSquare.style.display = "none";  
            clearInterval(stepPId);
            return;
        }
        if (purplePos.top === targetPos.top && purplePos.left === targetPos.left) {
            clearInterval(stepPId);
            pSquare.style.display = "none";  
            createSupernova();

            
        } else {
            var speed = parseInt(document.getElementById("cometSpeed").value);
            

            if (purplePos.top > targetPos.top) purplePos.top -= (speed);
            if (purplePos.left > targetPos.left) purplePos.left -= (speed);

            pSquare.style.top = purplePos.top + 'px';
            pSquare.style.left = purplePos.left + 'px';
            pSquare.style.display = "block";
        }
    }
}



function createSupernova() {
    var stylesheet = document.getElementById("stylesheet");

            if(stylesheet.getAttribute('href')=='../css/movies.css') {
                stylesheet.setAttribute('href', '../css/movies2.css');
            } else {
                stylesheet.setAttribute('href', '../css/movies.css');
            }
}

function isCollision(pos1, pos2) {
    const threshold = 1; 
    return Math.abs(pos1.top - pos2.top) < threshold && Math.abs(pos1.left - pos2.left) < threshold;
}

function resetComets() {
    container2.innerHTML = '';
    resetPosition(document.getElementById('comet1'), 'magenta');
    resetPosition(document.getElementById('comet2'), 'blue');
    resetPosition(document.getElementById('comet3'), 'green');
    resetPosition(document.getElementById('comet4'), 'purple');
}

function resetPosition(cometElement, cometId) {
    cometElement.style.top = originalPositions[cometId].top + 'px';
    cometElement.style.left = originalPositions[cometId].left + 'px';
    cometElement.style.display = "block";
    
    var stylesheet = document.getElementById("stylesheet");
    if(stylesheet.getAttribute('href') == '../css/movies2.css') {
        stylesheet.setAttribute('href', '../css/movies.css');
    }
}
