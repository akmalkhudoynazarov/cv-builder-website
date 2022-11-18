function jDate(){
    $( function() {
        $( ".datepicker" ).datepicker({
            changeMonth: true,
            dateFormat: "yy-mm-dd",
            changeYear: true,
            yearRange: "1980:nn",
            monthNamesShort: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ]
        });
      } );
}
jDate();