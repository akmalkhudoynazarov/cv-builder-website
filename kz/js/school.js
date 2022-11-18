$(document).ready(function(){
    
    var school = '<div class="row">'+
    '<div class="column">'+
    ' <i class="fa-solid fa-building-columns"></i>'+
    ' <input type="text" name="school[]" placeholder="Білім ордасы" />'+
    '</div>'+
    '<div class="column">'+
    '  <i class="fa-solid fa-scroll"></i>'+
    ' <select name="degree[]" id="">'+
    '<option value="" hidden>Дәреже</option>'+
    '<option value="Secondary School">Орта білім</option>'+
    '<option value="High School">Орта-арнайы</option>'+
    '<option value="Bachelor Degree">Бакалавр</option>'+
    '<option value="Master Degree">Магистр</option>'+
    '<option value="PhD">PhD</option>'+
    '<option value="Diploma">Диплом</option>'+
    '<option value="Certificate">Сертификат</option>'+
    ' </select>'+
    '</div>'+
    '<div class="column">'+
    ' <i class="fa-solid fa-graduation-cap"></i>'+
    ' <input'+
     '   type="text"'+
     '  name="specialization[]"'+
     '  placeholder="Білім бағити"'+
     '/>'+
     '</div>'+
     '<div class="column">'+
     '<i class="fa-solid fa-location-dot"></i>'+
     '<input type="text" name="school_country[]" placeholder="Мемлекет" />'+
     '</div>'+
     '<div class="column">'+
     '<i class="fa-solid fa-location-dot"></i>'+
     '<input type="text" name="school_city[]" placeholder="Қала" />'+
     '</div>'+
     '<div class="column">'+
     '<input type="text" class="date-border datepicker" name="school_from[]" placeholder="Дан" />'+
     '<input type="text" class="datepicker" name="school_to[]" placeholder="Дейін" />'+
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