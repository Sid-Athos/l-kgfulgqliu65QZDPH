function insertMessage(){
    var ajaxRequest;  // The variable that makes Ajax possible!
     try {
         ajaxRequest = new XMLHttpRequest();
     }catch (e) {
         try {
             ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
         }catch (e) {
             try{
                 ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
             }catch (e){
                 alert("Your browser broke!");
                 return false;
             }
         }
     }
    /** Crée la connexion et récupère la réponse */
         
    ajaxRequest.onreadystatechange = function(){
       if(ajaxRequest.readyState == 4){
          var ajaxDisplay = document.getElementById('txtHint');
          ajaxDisplay.innerHTML = ajaxRequest.responseText;
       }
    }
    

 /** Valeurs à passer en arguments */
    var d = document.getElementById('send_to').value;
    var e = document.getElementById('exp').value;
    var msg = document.getElementById('msg').value;
    var queryString = "?d=" + d ;
 
    queryString +=  "&e=" + e + "&msg=" + msg;
    ajaxRequest.open("GET", "../tests/Models/insert_message.php" + queryString, true);
    ajaxRequest.send(null); 
 }