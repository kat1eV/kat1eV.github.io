//from Level 3
var ROW = '\n<tr> \n <td> SampleText </td> \n<td> CHECKCROSSBASIC </td> \n <td> CHECKCROSSPRO </td> \n</tr>';

//alert('Printing of ROW variable:'+ROW);

var ROW2= '\n<tr> \n <td> SampleText </td>  \n<td> .fa-remove </td> \n <td> .fa-check </td> \n</tr>';


//alert('Printing of ROW2 variable:'+ROW2);

const table = document.getElementById("table");

let addedRows = [];
rowNum = 2;


//I keep adding this file bc when i add it into the rows.js file everything breaks and 
//somehow when i add the file back on its own it all magically works again.....