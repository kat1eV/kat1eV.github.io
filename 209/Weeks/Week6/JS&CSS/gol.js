//table
{/* <div id="tableContainer"></div>

class dynamicTable{    
    constructor(rows, columns){
        this.rows= parseInt(rows);
        this.columns= parseInt(columns);
        this.container = document.getElementById("tableContainer");
    }

    createTable(){
        this.container.innerHTML = ""; //to clear pervious table if exists

        const table = document.createElement("table");

        for (let i=0; i<this.rows;i++ ){
            let tr = document.createElement("tr");
        }for (let j=0; j<this.columns; j++){
            let td = document.createElement("td");
            td.textContent = `Row ${i + 1}, Col ${j + 1}`;
            tr.appendChild(td);
        }
        this.container.appendChild(table);
    }
}

function genTable(){
    let rows = document.getElementById("rows").value;
    let columns = document.getElementById("columns").value;

    let dynamicTable = new DynamicTable(rows, columns);
    dynamicTable.createTable();
} */}

function gen(){    
    const rows = parseInt(document.getElementById("rows").value) || 0;
    const columns = parseInt(document.getElementById("columns").value) || 0;
    const table = document.getElementById("grid");
    
    table.innerHTML = "";//clear existing table
    //generations == 1; <not applicable in this eary stage version>

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

