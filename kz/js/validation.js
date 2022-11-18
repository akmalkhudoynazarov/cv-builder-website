$(document).ready(function(){

    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'Макс. размер изображения {0}');

    $('form').validate({

        errorPlacement: function(error, element) {
            error.appendTo( element.parent("div").next("label") );
          },
         rules:{
            fname:{
                required: true,
                maxlength: 20
            },
            lname: {
                required: true,
                maxlength: 25
            },
            email: {
                required: true,
                email: true,
                maxlength: 50
            },
            phone: {
                required: true,
                maxlength: 16,
                minlength: 10,
            },
            country: {
                required: true,
                maxlength: 20 
            },
            city: {
                required: true,
                maxlength: 20
            },
            age: {
                required: true,
                min: 17,
                max: 70
            },
            gender: {
                required: true
            },
            userfile:{
                extension: "jpg|jpeg|png",
                filesize: 12000000
            },
            'school[]':{
                required: true
            },
            'degree[]': {
                required: true
            },
            'specialization[]':{
                required: true
            },
            'school_country[]':{
                required: true
            },
            'school_city[]':{
                required: true
            }
        },
        messages:{
            fname:{
                required: 'Атыңызды енгізіңіз',
                maxlength: '20 әріптен көп емес'
            },
            lname:{
                required: 'Фамилияңызды енгізіңіз',
                maxlength: '25 әріптен көп емес'
            },
            email: {
                required: 'Бұл талап етіледі',
                email: "Нағыз e-mail енгізіңіз",
                maxlength: '50 таңбадан артық емес'
            },
            phone: {
                required: 'Бұл талап етіледі',
                maxlength: '14 саннан көп емес енгізіңіз',
                minlength: "Халықаралық форматты пайдалану (+xx)"
            },
            country: {
                required: 'Ағымдағы тұрғылықты еліңізді енгізіңіз',
                maxlength: '20 әріптен көп емес енгізіңіз'
            },
            city: {
                required: 'Ағымдағы тұрғылықты қалаңызды енгізіңіз',
                maxlength: '20 әріптен көп емес енгізіңіз'
            },
            age: {
                required: 'Бұл талап етіледі',
                min: 'Ең кіші сан – 17',
                max: 'Ең үлкен сан – 70'
            },
            gender: {
                required: 'Бұл талап етіледі'
            },
            userfile:{
                extension: "Тек jpg|jpeg|png пайдаланыңыз"
            },
            'school[]':{
                required: "Бұл талап етіледі"
            },
            'degree[]': {
                required: 'Бұл талап етіледі'
            },
            'specialization[]':{
                required: "Бұл талап етіледі"
            },
            'school_country[]':{
                required: 'Бұл талап етіледі'
            },
            'school_city[]':{
                required: 'Бұл талап етіледі'
            }
        },
        highlight: function(element){
            $(element).parent().addClass('error-shadow');
            
        },
        unhighlight: function(element){
            $(element).parent().removeClass('error-shadow');
            
        }

    })
    
})