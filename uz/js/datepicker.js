function jDate(){
    $( function() {
        $( ".datepicker" ).datepicker({
            changeMonth: true,
            dateFormat: "yy-mm-dd",
            changeYear: true,
            yearRange: "1980:nn",
            monthNamesShort: [ "Yan", "Fev", "Mar", "Apr", "May", "Yun", "Yul", "Avg", "Sen", "Okt", "Noy", "Dek" ]
        });
      } );
}
jDate();