$(document).ready(function(){
    
    var employer = '<div class="row">'+
    '<div class="column">'+
      '<i class="fa-solid fa-building"></i>'+
      '<input type="text" name="employer[]" placeholder="Employer" />'+
    '</div>'+
    '<div class="column">'+
      '<i class="fa-solid fa-briefcase"></i>'+
      '<input type="text" name="position[]" placeholder="Position" />'+
    '</div>'+
    '<div class="column">'+
      '<i class="fa-solid fa-location-dot"></i>'+
      '<input type="text" name="employer_country[]" placeholder="Country"/>'+
    '</div>'+
    '<div class="column">'+
      '<i class="fa-solid fa-location-dot"></i>'+
      '<input type="text" name="employer_city[]" placeholder="City" />'+
    '</div>'+
    '<div class="column">'+
      '<i class="fa-solid fa-calendar-days"></i>'+
      '<input type="text" class="date-border datepicker" name="employment_from[]" placeholder="From" />'+
      '<input type="text" class="datepicker" name="employment_to[]" placeholder="To" />'+
    '</div>'+
    '<div class="column ongoing">'+
      '<a href="#" id="removeEmployer" class="remove-btn"><i class="fa-solid fa-trash"></i></a>'+
    '</div>'+
  '</div>';

  var x = 10;
  var y = 1;

//   Add rows
    $('#addEmployer').click(function(e){
        e.preventDefault(e);
        if(y <= x){
        $('#employer').append(employer);
        jDate();
        y++;
    }
    })

    // Remove rows
    $('#employer').on('click', '#removeEmployer', function(e){
        e.preventDefault(e);
        $(this).parent('div').parent('div').remove();
        y--;
    })

    // Disable Date To
    
    $('#employer').on('click', '#checked', function(e){
      var disabled = $(this).parent().parent().find('#employerTo');
      var opacity = $(this).parent('div');
        $(disabled).prop('hidden', true);
        $(opacity).addClass('ongoingop');
      if(!$(this).is(':checked')){
        $(disabled).prop('hidden', false);
        $(opacity).removeClass('ongoingop');
      }

  })
    
})