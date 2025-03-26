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
 //level 5

 /*Extend the previous level so that the javascript function to add a new row to the table 
 is in an external file, which is imported into the html using a script tag. */