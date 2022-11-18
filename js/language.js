$(document).ready(function(){

    var language = '<div class="column language">'+
    ' <i class="fa-solid fa-globe"></i>'+
    ' <input type="text" name="language[]" placeholder="Language" />'+
     ' <select name="lang_level[]">'+
     '  <option value="" hidden>Level</option>'+
     '  <option value="Basic">Basic</option>'+
     '  <option value="Good">Good</option>'+
     '  <option value="Expert">Expert</option>'+
     '</select>'+
     '<a href="#" id="removeLanguage"'+
     '  ><i class="fa-solid fa-trash"></i'+
     '></a>'+
     '</div>';
    
     var x = 10;
     var y = 1;

    //  add rows
     $('#addLanguage').click(function(e){
        e.preventDefault();
        if(y <= x){
            $('#language').append(language);
            y++;
        }

        // remove rows

        $('#language').on('click', '#removeLanguage', function(e){
            e.preventDefault();
            $(this).parent('div').remove();
            y--;
        })
        
     })
})