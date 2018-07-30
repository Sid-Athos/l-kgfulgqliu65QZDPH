    /* Quite obvious */

    function datepicker_app() {
        
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        dd = checktime(dd);
        mm = checktime(mm);
        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("datepicker").setAttribute("min", today);
    }

    function checktime(i){
        if(i < 10) {
            i = "0" + i;
        }
        return i;
    }
