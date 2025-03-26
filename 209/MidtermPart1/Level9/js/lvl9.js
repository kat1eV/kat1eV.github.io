rowNum = 2;
addedRows =[];

function addSingRow(bIcon, pIcon){
    let newRow = ROW.replace("CHECKCROSSBASIC", `<i class="fa ${bIcon}"></i>`)
                    .replace("CHECKCROSSPRO", `<i class="fa ${pIcon}"></i>`);

   const tableBody = document.getElementById('table');
   tableBody.innerHTML += newRow;
   
   addedRows.push(newRow);

   
   rowNum++;
   
   if (rowNum % 2 === 0) {
    tableBody.lastElementChild.classList.add('even-row');
}
 }


