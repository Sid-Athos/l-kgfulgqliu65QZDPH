function suppressDay(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {

            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
               var vet = document.getElementById('ID').value;
               var queryString = "?q=" + str;
            
        queryString +=  "&vet=" + vet;
        xmlhttp.open("GET","../tests/Models/delete_day.php"+ queryString,true);
        xmlhttp.send();
    }
}