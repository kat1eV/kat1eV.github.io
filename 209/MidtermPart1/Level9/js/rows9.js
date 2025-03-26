var rowNum = 2;


var ROW = '\n<tr> \n <td> SampleText </td> \n<td> CHECKCROSSBASIC </td> \n <td> CHECKCROSSPRO </td> \n</tr>';

var FEATURES = ["Katie", "Chrissy", "Buffy", "Edward", "Gerard", "Kurt", "Nana", "Hachi", "Chloe", "Draculaura"];
var BASIC = ["fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove"];
var PRO = ["fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check", "fa-remove", "fa-check"];

var NRROWS = FEATURES.length; 



function addRow(feature, bIcon, pIcon) {
    let newRow = `
        <tr> \n<td>${feature}</td> \n <td><i class="fa ${bIcon}"></i></td> \n <td><i class="fa ${pIcon}"></i></td>\n</tr>
    `;
    

    const tableBody = document.getElementById('table');
    tableBody.innerHTML += newRow;

    rowNum++;
    

    if (rowNum % 2 === 0) {
        tableBody.lastElementChild.classList.add('even-row');
    }
}

function addAllRows() {
   
    const tableBody = document.getElementById("table");

    tableBody.innerHTML = `
        \n <tr> \n <th style="width:50%">Name</th> \n<th>Part 1</th> \n<th>Part 2</th> \n </tr>
    `;
    rowNum = 1;
    

    let numRowsToAdd = Math.min(NRROWS, FEATURES.length);
    for (let i = 0; i < numRowsToAdd; i++) {
        addRow(FEATURES[i], BASIC[i], PRO[i]);
    }
}