/* Petite astuce magique qui vérifie la touche pressée et balance la requête. PORN */
function search(){
    $( "#target" ).submit(function( event ) {
        if (e.keyCode == 13) {
            $( "#target" ).submit();
            return true;
        }
    });
    $("#search_in").bind("keypress",function(event) {
        if(e.keyCode!==13){
        $("#search_in").CSS("color","#decba4");
        }
    });
}