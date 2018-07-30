function updateHistory(){
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
    var a = document.getElementById('animal').value;
    var o = document.getElementById('owner').value;
    var h = document.getElementById('history').value;

    var queryString = "?d=" + a ;
    queryString += "&o=" + o + "&h=" + h;
    ajaxRequest.open("GET","../tests/Models/update_history.php" + queryString, true);
    ajaxRequest.send(); 
 }