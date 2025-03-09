document.addEventListener("DOMContentLoaded", function () {

    document.getElementById("gen").addEventListener("click", function (){
        const rows = parseInt(document.getElementById("rows").value) > 0;
        const columns = parseInt(document.getElementById("columns").value) > 0;
        const table = document.getElementById("grid");

        table.innerHTML = "";//clear existing table

        //gen rows and cols
        for (let i = 0; i < rows; i++) {
            let tr = document.createElement("tr");
            for (let j = 0; j < columns; j++) {
                let td = document.createElement("td");
                td.classList.add("cell");
                tr.appendChild(td);
            }
            table.appendChild(tr);
        }
    });
});