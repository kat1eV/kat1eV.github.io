//from Level 3
var ROW = '\n<tr> \n <td> Sample Text </td> \n<td> CHECKCROSSBASIC </td> \n <td> CHECKCROSSPRO </td> \n</tr>';

//alert('Printing of ROW variable:'+ROW);

var ROW2= '\n<tr> \n <td> Sample Text </td>  \n<td> .fa-remove </td> \n <td> .fa-check </td> \n</tr>';


//alert('Printing of ROW2 variable:'+ROW2);




//Level 4

const table = document.getElementById("table");

let addedRows = [];
rowNum = 2;

var bIcon= document.getElementsByClassName('fa fa-remove');
var pIcon = document.getElementsByClassName('fa fa-check');//does not currently show icon in addedRows

console.log("bIcon: "+bIcon+" pIcon: "+pIcon);

 function addRow(bIcon, pIcon){
   const tableBody = document.getElementById('table');
   const newRow = '\n<tr> \n <td> Sample Text </td>  \n<td> ${bIcon} </td> \n <td> ${pIcon} </td> \n</tr>';
   tableBody.innerHTML += newRow;
   
   addedRows.push(newRow);
   rowNum++;
   console.log("row #"+rowNum);
   var row = newRow;
   

   //trying to get even rows to match color.....
   if(rowNum%2==0 ){
      document.getElementsByClassName("even-row").appendChild(row);
   }
   
 }