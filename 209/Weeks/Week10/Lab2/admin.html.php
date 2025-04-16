<head>
<?php 
    // function reports(){
    //     if(file_exists("./output/users.JSON")==true){
    //         $users = json_decode(file_get_contents("./output/users.JSON",true));
    //         $userNames = array_column($users, 'username');
    //         $usernameString = implode(', ', $userNames);
    //         $userNum = count($users);


    //         document.getElementById("demo").innerHTML =
    //         echo "We have a total of ".$userNum." users on our site.";
    //         echo "Users:".$usernameString;
    //     }else{
    //         echo "sorry there is no current data on our users.";
    //     }
    // }   <--- wasnt working....
?>
</head>
<body>

<h2>Administrator's Page</h2>
<button type="button" onclick="reports()">Show User Reports</button>
<div id="demo">
</div>

<script>
function reports() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "./output/users.JSON");
  xhttp.send();
}
</script>
</body>
