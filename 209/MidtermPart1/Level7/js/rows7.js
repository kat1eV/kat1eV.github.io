var FEATURES = ["Katie", "Chrissy", "Buffy", "Edward", "Gerard", "Kurt", "Nana", "Hachi", "Chloe", "Draculaura"];
var BASIC = ["fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove"];
var PRO = ["fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check"];

var NRROWS = 7; 
var rowNum = 2;



function addRow(feature, bIcon, pIcon) {
    let newRow = `
        <tr>
            <td>${feature}</td>
            <td><i class="fa ${bIcon}"></i></td>
            <td><i class="fa ${pIcon}"></i></td>
        </tr>
    `;

    const tableBody = document.getElementById('table');
    tableBody.innerHTML += newRow;

    rowNum++;
    console.log(`Row #${rowNum} added: ${feature}, ${bIcon}, ${pIcon}`);

    if (rowNum % 2 === 0) {
        tableBody.lastElementChild.classList.add('even-row');
    }
}
//level 6

//Level 7 
/*Extend the previous level so that each row has its own entries in the three colums of the table. 
You will get these entries from three javascript arrays (stored in global variables): 
FEATURES, BASIC and PRO. For instance, if NRROWS = 2, you might have FEATURES = ["Mary","Alice"], 
BASIC = ["fa-check","fa- remove"] and PRO = ["fa-remove","fa-check"]. */
function addSevRows() {
    const tableBody = document.getElementById("table");

    tableBody.innerHTML = `
        <tr>
            <th style="width:50%">Name</th>
            <th>Part 1</th>
            <th>Part 2</th>
        </tr>
    `;

    let numRowsToAdd = Math.min(NRROWS, FEATURES.length);
    for (let i = 0; i < numRowsToAdd; i++) {
        addRow(FEATURES[i], BASIC[i], PRO[i]);
    }
}

