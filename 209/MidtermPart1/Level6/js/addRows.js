var bIcon= 'fa-check';
var pIcon= 'fa-remove';

console.log("bIcon: "+bIcon+" pIcon: "+pIcon);

 function addRow(bIcon, pIcon){
    let newRow = ROW.replace("CHECKCROSSBASIC", `<i class="fa ${bIcon}"></i>`)
                    .replace("CHECKCROSSPRO", `<i class="fa ${pIcon}"></i>`);

   const tableBody = document.getElementById('table');
   tableBody.innerHTML += newRow;

   //const newRow = '\n<tr> \n <td> Sample Text </td>  \n<td> ${bIcon} </td> \n <td> ${pIcon} </td> \n</tr>';
   
   addedRows.push(newRow);

   
   rowNum++;
   console.log("row #"+rowNum);
   if(rowNum%2==0 ){
    tableBody.lastElementChild.classList.add('even-row');
   }
 }

 //Level 6
 /* Extend the previous level so that you can add a number of rows specified by a javascript global 
variable NRROWS. E.g. you can have NRROWS = 10. Use a for loop to add that many rows to the table. 
For now, each row can have the same entry in the FEATURES, BASIC and PRO columns 
(next level will handle this)*/

var NRROWS= 10;

 function addSevRows(bIcon, pIcon){
    for(let i =0; i < NRROWS; i++){
        console.log("addSevRows is running...");
        let bIcon = i % 2 === 0 ? 'fa-check' : 'fa-times';
        let pIcon = i % 2 === 0 ? 'fa-remove' : 'fa-check';
        
        addRow(bIcon, pIcon);
    }
    
 }