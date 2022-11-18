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
                required: 'Введите ваше имя',
                maxlength: 'Введите не более 20 букв'
            },
            lname:{
                required: 'Введите вашу фамилию',
                maxlength: 'Введите не более 25 букв'
            },
            email: {
                required: 'Введите адрес эл.почты',
                email: "Введите действительный адрес эл.почты",
                maxlength: 'Введите не более 50 символов'
            },
            phone: {
                required: 'Введите номер телефона',
                maxlength: 'Введите не более 14 номеров',
                minlength: "Используйте международный формат (+xx)"
            },
            country: {
                required: 'Введите текущую страну проживания',
                maxlength: 'Введите не более 20 букв'
            },
            city: {
                required: 'Введите текущий город проживания',
                maxlength: 'Введите не более 20 букв'
            },
            age: {
                required: 'Введите свой возраст',
                min: 'Наименьшее число - 17',
                max: 'Самое большое число - 70'
            },
            gender: {
                required: 'Выбери свой пол'
            },
            userfile:{
                extension: "Используйте только jpg|jpeg|png"
            },
            'school[]':{
                required: "Не оставляйте это поле пустым"
            },
            'degree[]': {
                required: 'Пожалуйста, выберите степень'
            },
            'specialization[]':{
                required: "Не оставляйте это поле пустым"
            },
            'school_country[]':{
                required: 'Не оставляйте это поле пустым'
            },
            'school_city[]':{
                required: 'Не оставляйте это поле пустым'
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