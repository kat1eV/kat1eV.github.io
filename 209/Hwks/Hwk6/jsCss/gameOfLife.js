
let generations = 1;

  function gen(){    
        const rows = parseInt(document.getElementById("rows").value) || 0;
        const columns = parseInt(document.getElementById("columns").value) || 0;
        const table = document.getElementById("grid");
        
        table.innerHTML = "";//clear existing table
        generations == 1;

        //gen rows and cols
        if (rows <= 0 || columns <= 0) {
            alert("please enter valid positive integers for rows and columns.");
            return;
        }    

        for (let i = 0; i < rows; i++) {
            
            let tr = document.createElement("tr");
            for (let j = 0; j < columns; j++) {
                let td = document.createElement("td");
                td.classList.add("cell");

                td.addEventListener("click", function () {
                    this.classList.toggle("alive"); // Toggle class
                });

                tr.appendChild(td);
            }
            table.appendChild(tr);
        }
        generations = 1;
        document.getElementById("generationCount").textContent = generations;
    }



    function countAliveN(i, j){ //feed in grid as well as i&j for particular cell
        const directions = [
            [-1, -1], [-1, 0], [-1, 1], //top row of neighbors
            [0, -1],         [0, 1],    // neighbors to left and right
            [1, -1], [1, 0], [1, 1]     // bottom row of neighbors
        ];

        let aliveNeighbors = 0;
        const rows = document.getElementById("grid").rows.length;
        const cols = document.getElementById("grid").rows[0].cells.length;
        
        for (let [dx, dy] of directions) {
            let newRow = i + dx;
            let newCol = j + dy;
            
    
            if (newRow >= 0 && newRow < rows && newCol >= 0 && newCol < cols) {//esnures within the bounds of grid
                let neighbor = document.querySelector(`#grid tr:nth-child(${newRow + 1}) td:nth-child(${newCol + 1})`);
    
                if (neighbor && neighbor.classList.contains("alive")) {
                aliveNeighbors++;
            }
        }
            
    }
    return aliveNeighbors;
}



 

    function nextGen(){
        
        const rows = document.getElementById("grid").rows.length;
        const cols = document.getElementById("grid").rows[0].cells.length;

        let newGridState = Array.from({ length: rows }, () => Array(cols).fill(false));//state of grid when button pressed
        
        for(let i = 0;i < rows; i++){
            for (let j = 0; j < cols; j++){
                let cell = document.querySelector(`#grid tr:nth-child(${i + 1}) td:nth-child(${j + 1})`);
                let aliveNeighbors= countAliveN(i, j);
                let isAlive = cell.classList.contains("alive");
            
                //game of life rules
                if (isAlive && (aliveNeighbors === 2 || aliveNeighbors === 3)){
                    newGridState[i][j] = true; //stay a live cell
                }else if (!isAlive && aliveNeighbors === 3) {
                    newGridState[i][j] = true;  // become a live cell 
                } else{
                    newGridState[i][j] = false; //cell dies
                }
        }   
    }
        //update grid in new state
        for(let i=0; i <rows; i++ ){
            for(let j=0; j< cols; j++){
                let cell = document.querySelector(`#grid tr:nth-child(${i + 1}) td:nth-child(${j + 1})`);
            
            if (newGridState[i][j]){
                cell.classList.add("alive");
            }else{
                cell.classList.remove("alive");
            }
        }
    }
    generations++;
    document.getElementById("generationCount").textContent = generations;
}