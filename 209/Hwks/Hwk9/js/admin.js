function reports() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", "../output/users.JSON");
    xhttp.send();
}

//I tried doing this the PHP way with no luck. as a result i dont know how I'm supposed to get the length of
//the array im getting since i cant just do "const usersNum= length.users"