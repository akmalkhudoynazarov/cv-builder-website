$(document).ready(function(){
    
    var school = '<div class="row">'+
    '<div class="column">'+
    ' <i class="fa-solid fa-building-columns"></i>'+
    ' <input type="text" name="school[]" placeholder="O\'quv maskani" />'+
    '</div>'+
    '<div class="column">'+
    '  <i class="fa-solid fa-scroll"></i>'+
    ' <select name="degree[]" id="">'+
    '   <option value="" hidden>Daraja</option>'+
    '   <option value="Secondary School">'+
    '     O\'rta ta\'lim'+
    '   </option>'+
    '   <option value="High School">O\'rta-maxsus</option>'+
    '   <option value="Bachelor Degree">Bakalavr</option>'+
    '   <option value="Master Degree">Magistr</option>'+
    '   <option value="PhD">PhD</option>'+
    '   <option value="Diploma">Diplom</option>'+
    '   <option value="Certificate">Sertifikat</option>'+
    ' </select>'+
    '</div>'+
    '<div class="column">'+
    ' <i class="fa-solid fa-graduation-cap"></i>'+
    ' <input'+
     '   type="text"'+
     '  name="specialization[]"'+
     '  placeholder="Ta\'lim Yo\'nalishi"'+
     '/>'+
     '</div>'+
     '<div class="column">'+
     '<i class="fa-solid fa-location-dot"></i>'+
     '<input type="text" name="school_country[]" placeholder="Davlat" />'+
     '</div>'+
     '<div class="column">'+
     '<i class="fa-solid fa-location-dot"></i>'+
     '<input type="text" name="school_city[]" placeholder="Shahar" />'+
     '</div>'+
     '<div class="column">'+
     '<i class="fa-solid fa-calendar-days"></i>'+
     '<input'+
     '  type="text"'+
     '  class="date-border datepicker"'+
     '  name="school_from[]"'+
     'placeholder="Dan"/>'+
     '<input type="text" class="datepicker" name="school_to[]" placeholder="Gacha" />'+
     '</div>'+
     '<div class="column ongoing">'+
      '<a href="#" id="removeSchool" class="remove-btn"><i class="fa-solid fa-trash"></i></a>'+
     '</div>'+
     '</div>';

     var x = 10;
     var y = 1;

  // add rows
     $('#addSchool').click(function(e){
      e.preventDefault(e);
      if(y <= x){
        $('#school').append(school);
        jDate();
        y++;
      }
    })
// remove rows
      $('#school').on('click', '#removeSchool', function(e){
        e.preventDefault(e);
        $(this).parent('div').parent('div').remove();
        y--;
      })


      // Disable Date To
    $('#school').on('click', '#checkedschool', function(e){
      var disabled = $(this).parent().parent().find('#schoolTo');
      var opacity = $(this).parent('div');
        $(disabled).prop('hidden', true);
        $(opacity).addClass('ongoingop');
      if(!$(this).is(':checked')){
        $(disabled).prop('hidden', false);
        $(opacity).removeClass('ongoingop');
      }

    })

})