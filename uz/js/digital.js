$(document).ready(function(){

    var digital = '<div class="column language">'+
    '<i class="fa-solid fa-globe"></i>'+
    '<input type="text" name="digital[]" placeholder="mas:Excel" />'+
    '<select name="dig_level[]">'+
    ' <option value="" hidden>Daraja</option>'+
    " <option value='Basic'>Boshlang'ich</option>"+
    ' <option value="Good">Yaxshi</option>'+
    ' <option value="Expert">Ekspert</option>'+
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