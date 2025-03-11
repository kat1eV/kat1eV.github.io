//MY JAVASCRIPT

//initialize disk array
function initializeDisks(){
    const numFish = document.getElementById("numFishInput").value;
    if (numFish <= 0 || isNaN(numFish)) {
        alert("enter a valid integer greater than 0");
        return;
    }
    NRPTS = parseInt(numFish);
    disks =[];
    ogLocation=[];

    for(let i = 0; i < NRPTS; i++){
        const disk = {
        x: Math.floor((Math.random() * 1000) + 10),
        y: Math.floor((Math.random() * 1000) + 10),
        radius: Math.floor((Math.random() *70) + 20),
        color: anyColor(),
        speed:Math.floor((Math.random() * 100) + 50),
        speedX: Math.floor((Math.random() * 100) + 50), // x-direction speed
        speedY: Math.floor((Math.random() * 100) + 50), // y-direction speed
        angle: Math.floor((Math.random() * 360) + 0) * Math.PI / 180 
        };
        disks.push(disk);
        ogLocation.push({
            x: disk.x,
            y: disk.y,
            radius: disk.radius,
            color: disk.color,
            speedX: disk.speedX,
            speedY: disk.speedY,
            angle: disk.angle
        });
    }
    draw();
    console.log("Generated disks:", disks); // log disks array after generation
}


//random color
function anyColor(){
    const r = Math.floor(Math.random() * 256);
    const g = Math.floor(Math.random() * 256);
    const b = Math.floor(Math.random() * 256);
    return `rgb(${r},${g},${b})`;
}




 // randomize disks' location and velocity
function randomize(){
    for (let disk of disks) {
        disk.speedX = Math.floor((Math.random() *200) + 20);
        disk.speedY = Math.floor((Math.random() *200) + 20);
        disk.x = Math.floor((Math.random() * 1000) + 10);
        disk.y = Math.floor((Math.random() * 1000) + 10);

    }
    draw();
}


//draw the disk
 function drawDisk(x, y, radius, color) {
    ctx.beginPath();
    ctx.arc(x, y, radius, 0, 2 * Math.PI);
    ctx.fillStyle = color;
    ctx.fill();
    ctx.stroke();
}



 //draw the vector
 function drawVector(x, y, speed, angle, color) {
    const endX = x + speed * Math.cos(angle);
    const endY = y - speed * Math.sin(angle);

    ctx.beginPath();
    ctx.moveTo(x, y);  // start from the center of the disk
    ctx.lineTo(endX, endY);  // end at the vector's tip
    ctx.strokeStyle = color;
    ctx.lineWidth = 3;
    ctx.stroke();
}

// function to draw everything
function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);  // clear the canvas
    // looping through all disks in array
    for (let disk of disks) {
        drawDisk(disk.x, disk.y, disk.radius, disk.color);//draws disks
        drawVector(disk.x, disk.y, disk.speed, disk.angle, disk.color);//draws vectors
    }
}

//move fish
function update(){
    for(let i=0; i< disks.length; i++){
        console.log(`Updating disk at index ${i}:`, disks[i]); // log each disk for debugging
        disks[i].x += disks[i].speedX * 0.1; 
        disks[i].y += disks[i].speedY * 0.1;//used 0.1 to slow down the animation rate

        if (disks[i].x === undefined || disks[i].y === undefined || disks[i].speedX === undefined || disks[i].speedY === undefined) {
            console.error(`Error: Disk at index ${i} is missing required properties`);
            continue; // skip updating this disk if any required property is undefined
        }

        if(disks[i].x <= 0 || disks[i].x >= canvas.width){
            disks[i].speedX = -disks[i].speedX; //bounce when it hits wall
        }
        if(disks[i].y <= 0 || disks[i].y >= canvas.height){
            disks[i].speedY = -disks[i].speedY; //bounce when it top or bottom wall
        }
    }
    if (NRSTEPS > 0){
        NRSTEPS--;
    }
    if(NRSTEPS <= 0){
        clearInterval(intervalID);//stops animating
    }
}


//animate fish
let intervalID;

function startAnimation(){
    if(intervalID){
        clearInterval(intervalID);
    }
    intervalID = setInterval(() => {
        draw();
        update();
    },
    80);

    setInterval(update,20);
}

//reset function
function reset() {
    for(i = 0; i < disks.length; i++){
        for (let i = 0; i < disks.length; i++) {
            disks[i].x = ogLocation[i].x;
            disks[i].y = ogLocation[i].y;
            disks[i].speedX = ogLocation[i].speedX;
            disks[i].speedY = ogLocation[i].speedY;
            disks[i].angle = ogLocation[i].angle;
        }
        draw();
    }
}