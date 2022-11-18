function jDate(){
    $( function() {
        $( ".datepicker" ).datepicker({
            changeMonth: true,
            dateFormat: "yy-mm-dd",
            changeYear: true,
            yearRange: "1980:nn",
            monthNamesShort: [ "Янв", "Фев", "Мар", "Апр", "May", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек" ]
        });
      } );
}
jDate();