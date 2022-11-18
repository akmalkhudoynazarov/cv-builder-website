function jDate(){
    $( function() {
        $( ".datepicker" ).datepicker({
            changeMonth: true,
            dateFormat: "yy-mm-dd",
            changeYear: true,
            yearRange: "1980:nn",
            monthNamesShort: [ "Қаң", "Ақп", "Нау", "Сәу", "Мам", "Мау", "Шіл", "Там", "Қыр", "Қаз", "Қар", "Жел" ]
        });
      } );
}
jDate();