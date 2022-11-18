$(document).ready(function(){
    
  var school = '<div class="row">'+
  '<div class="personal">'+
      '<div class="personal-col">'+
      '<i class="fa-solid fa-building-columns"></i>'+
          '<input type="text" name="school[]" placeholder="School" />'+
          '</div>'+
      '<label for="school[]"></label>'+
      '</div>'+
  '<div class="personal">'+
      '<div class="personal-col custom-select">'+
      '<i class="fa-solid fa-scroll"></i>'+
          '<select name="degree[]">'+
          '<option value="" hidden>Degree</option>'+
              '<option value="Secondary School">Secondary School</option>'+
              '<option value="High School">High School</option>'+
              '<option value="Bachelor Degree">Bachelor Degree</option>'+
              '<option value="Master Degree">Master Degree</option>'+
              '<option value="PhD">PhD</option>'+
              '<option value="Diploma">Diploma</option>'+
              '<option value="Certificate">Certificate</option>'+
              '</select>'+
          '</div>'+
      '<label for="degree[]"></label>'+
      '</div>'+
  '<div class="personal">'+
  '<div class="personal-col">'+
          '<i class="fa-solid fa-graduation-cap"></i>'+
          '<input type="text" name="specialization[]" placeholder="Specialization" />'+
          '</div>'+
      '<label for="specialization[]"></label>'+
      '</div>'+
  '<div class="personal">'+
      '<div class="personal-col">'+
      '<i class="fa-solid fa-location-dot"></i>'+
          '<input type="text" name="school_country[]" placeholder="Country" />'+
          '</div>'+
      '<label for="school_country[]"></label>'+
      '</div>'+
  '<div class="personal">'+
      '<div class="personal-col">'+
      '<i class="fa-solid fa-location-dot"></i>'+
          '<input type="text" name="school_city[]" placeholder="City" />'+
          '</div>'+
      '<label for="school_city[]"></label>'+
      '</div>'+
  '<div class="column">'+
      '<i class="fa-solid fa-calendar-days"></i>'+
      '<input type="text" class="date-border datepicker" name="school_from[]" placeholder="From" />'+
      '<input type="text" class="datepicker" name="school_to[]" placeholder="To" />'+
      '</div>'+
  '<div class="column ongoing">'+
  '<a href="#" id="removeSchool" class="remove-btn"><i class="fa-solid fa-trash"></i></a>'+
      '  </div>'+
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