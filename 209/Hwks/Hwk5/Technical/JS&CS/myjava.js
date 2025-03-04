

//initialize disk array
function initializeDisks(){
    disks =[];

    for(let i = 0; i < NRPTS; i++){
        const disk = {
        x: Math.floor((Math.random() * 1000) + 10),
        y: Math.floor((Math.random() * 1000) + 10),
        radius: Math.floor((Math.random() *70) + 20),
        color: anyColor(),
        speedX: Math.floor((Math.random() * 200) + 20), // x-direction speed
        speedY: Math.floor((Math.random() * 200) + 20), // y-direction speed
        angle: Math.floor((Math.random() *360) + 0) * Math.PI / 180
        };
        disks.push(disk);
    }
    draw();
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
 function drawVector(x, y, speedX, speedY, color) {
    const endX = x + speedX
    const endY = y - speedY

    ctx.beginPath();
    ctx.moveTo(x, y);  // Start from the center of the disk
    ctx.lineTo(endX, endY);  // End at the vector's tip
    ctx.strokeStyle = color;
    ctx.lineWidth = 3;
    ctx.stroke();
}

// Function to draw everything
function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);  // clear the canvas
  
  

    // looping through all disks in array
    for (let disk of disks) {
        drawDisk(disk.x, disk.y, disk.radius, disk.color);//draws disks
        drawVector(disk.x, disk.y, disk.speedX, disk.speedY, disk.color);//draws vectors
    }
}

//move fish a step
function update() {
    // Loop through each disk and update its position
    for (let i = 0; i < disks.length; i++) {
        // Move the disk
        disks[i].x += disks[i].speedX;
        disks[i].y += disks[i].speedY;

        // Check for collisions with canvas edges (bounce if hits)
        if (disks[i].x <= 0 || disks[i].x >= canvas.width) {
            disks[i].speedX = -disks[i].speedX; // Reverse speed in X direction
        }
        if (disks[i].y <= 0 || disks[i].y >= canvas.height) {
            disks[i].speedY = -disks[i].speedY; // Reverse speed in Y direction
        }
    }

    // Stop the animation after a set number of steps
    if (NRSTEPS > 0) {
        NRSTEPS--;
    }

    if (NRSTEPS <= 0) {
        clearInterval(intervalID); // Stop animation when steps reach 0
    }
}

// Animate function to repeatedly call update and draw
function animate() {
    intervalID = setInterval(() => {
        draw(); // Draw the disks
        update(); // Update their positions
    }, 80); // Call every 80ms (~12.5 FPS)
}











// function update(){
//     for(let i=0; i< disks.length; i++){
//         disk[i].x += disks[i].speedX;
//         disk[i].y -= disks[i].speedY;

//         if(disk[i].x <= 0 || disk[i].x >= canvas.width){
//             disk[i].speed.x = -disks[i].speedX; //bounce when it hits wall
//         }
//         if(disk[i].y <= 0 || disk[i].y >= canvas.height){
//             disk[i].speed.y = -disks[i].speedY; //bounce when it top or bottom wall
//         }
//     }
//     if (NRSTEPS > 0){
//         NRSTEPS--;
//     }
//     if(NRSTEPS <= 0){
//         clearInterval(intervalID);//stops animating
//     }
// }

// function animate(){
//     intervalID = setInterval(() => {
//         draw();
//         update();
//     },
//     80);//80 ms per frame
// }








// let step = 0;
// function animate(){
//     ctx.clearRect(0 , 0 , canvas.width, canvas.height);
    
//     function update(){
//         if(step < NRSTEPS){
//             for (let disk of disks){
//                 disk.x += disk.speed //* Math.cos(disk.angle);
//                 disk.y -= disk.speed //* Math.sin(disk.angle);
//             }
//         }
//         draw();
//         step++;
//         requestAnimationFrame(update);  
//     }
//     update();
// }

  