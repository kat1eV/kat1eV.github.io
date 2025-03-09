//table
<div id="tableContainer"></div>

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
}