var FEATURES = ["Katie", "Chrissy", "Buffy", "Edward", "Gerard", "Kurt", "Nana", "Hachi", "Chloe", "Draculaura"];
var BASIC = ["fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove"];
var PRO = ["fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check"];

var NRROWS = FEATURES.length; 
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

//level 7
//Level 8 
function addAllRows() {
    console.log("running addAllRows...")
    const tableBody = document.getElementById("table");

    tableBody.innerHTML = `
        <tr> \n <th style="width:50%">Name</th> \n<th>Part 1</th> \n<th>Part 2</th> \n </tr>
    `;
    console.log(tableBody.innerHTML);

    let numRowsToAdd = Math.min(NRROWS, FEATURES.length);
    for (let i = 0; i < numRowsToAdd; i++) {
        addRow(FEATURES[i], BASIC[i], PRO[i]);
    }
}