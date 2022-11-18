$(document).ready(function(){

    var digital = '<div class="column language">'+
    '<i class="fa-solid fa-globe"></i>'+
    '<input type="text" name="digital[]" placeholder="ex.Excel" />'+
    '<select name="dig_level[]">'+
    ' <option value="" hidden>Level</option>'+
    ' <option value="Basic">Basic</option>'+
    ' <option value="Good">Good</option>'+
    ' <option value="Expert">Expert</option>'+
    '</select>'+
    '<a href="#" id="removeDigital"'+
    ' ><i class="fa-solid fa-trash"></i'+
    '></a>'+
    '</div>';
    
     var x = 10;
     var y = 1;

    //  add rows
     $('#addDigital').click(function(e){
        e.preventDefault();
        if(y <= x){
            $('#digital').append(digital);
            y++;
        }

        // remove rows

        $('#digital').on('click', '#removeDigital', function(e){
            e.preventDefault();
            $(this).parent('div').remove();
            y--;
        })
        
     })
})