<?php
$NRWEEKS = 2;
// $WEEK = "<h1>Week NRWEEK</h1>";

$LISTDATES = array("Feb 1","Feb 8","Feb 15","Feb 21","March 1","March 8","March 15","March 21","April 1","April 8","April 15","April 21");
//$LISTDATES = array("Feb 1","Feb 8");

// $DATE = "<h2>DATE</h2>";

$LISTTOPICS= array("Installation","Html","Css","Javascript 1","","","","","","","","","");

// $TOPIC ="<h3>TOPIC</h3";

$LISTDESCRIPTIONS=array("We install software","We make our first Html","We style pages with Css","Get started on Javascript ","","","","","","","","","");

// $TOPIC ="<h3>DESCRIPTION</h3";

?>

<html>
<head>
<style>
        table, th, td {
    border:2px solid black;
    align-self: center;
    }
    </style>
</head>
<body>

<h1 style="color:red;" >VERSION 1: BUGGY <?php echo "NRWEEKS=".$NRWEEKS; ?> </h1>

<?php
for ( $i=1; $i <= $NRWEEKS; $i++){
	echo("<h1>Week $i <h1>");
	echo("<h2>Date: $LISTDATES[$i]</h2>");
	echo("<h2>Topic: $LISTTOPICS[$i]</h2>");
	echo("<h2>Description: ".$LISTDESCRIPTIONS[$i]."</h2>");
	}
?>

<h1 style="color:green;" >VERSION 2: SOLUTION 1 <?php echo "NRWEEKS=".$NRWEEKS; ?> </h1>

<?php
for ( $i=1; $i <= $NRWEEKS; $i++){
	$j=$i-1;
	echo("<h1>Week $i <h1>");
	echo("<h2>Date: $LISTDATES[$j]</h2>");
	echo("<h2>Topic: $LISTTOPICS[$j]</h2>");
	echo("<h2>Description: ".$LISTDESCRIPTIONS[$j]."</h2>");
	}
?>

<h1 style="color:blue;" > VERSION 3: DIFFERENT SOLUTION - NRWEEKS=  <?= $NRWEEKS ?>  </h1>

<?php for ( $i=0; $i <= $NRWEEKS; $i++){ ?>
	<h1>Week <?= $i+1 ?> <h1>
	<h2>Date: <?= $LISTDATES[$i] ?> </h2>
	<h3>Topic: <?= $LISTTOPICS[$i]  ?></h3>
	<h4>Description: " <?= $LISTDESCRIPTIONS[$i] ?> "</h4>
<?php	}?>
	

<h1 style="color:deeppink;">Part 4: Extend w/ a Table</h1>
<?php

	$firstNames= array("Katie", "Chrissy", "Noralina","Owen", "Jayda","Nana");

	$lastNames= array("Vogt", "MacKnight", "Zohayr", "Vogt", "Alcott", "Osaki");

	$ages= array(21, 21, 20, 18, 19, 18);

	$data = array($firstNames, $lastNames, $ages);

	$NRROWS=6;

	$NRCOLS=3;

	function createTable($NRROWS, $NRCOLS, $data){
		echo "<table>";
		echo "<tr>";
		for ($col = 0; $col < $NRCOLS; $col++){
			echo "<th> ".($col+1)." </th>";
		}
		echo"</tr>";

		for($row = 0; $row < $NRROWS; $row++){
			echo"<tr>";
			for($col = 0; $col < $NRCOLS; $col++){
				echo"<td> ".(isset($data[$col][$row])? $data[$col][$row]:"")."</td>";
			}
			echo"</tr>";
		}
		echo"</table";
	}

	createTable($NRROWS, $NRCOLS, $data);

?>
</body>
</html>