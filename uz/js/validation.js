$(document).ready(function(){

    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'Eng katta rasm hajmi {0}');

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
                required: 'Ismni kiriting',
                maxlength: 'Maksimum 20 ta harf kiriting'
            },
            lname:{
                required: 'Familiyani kiriting',
                maxlength: 'Maksimum 25 ta harf kiriting'
            },
            email: {
                required: 'Emailni kiriting',
                email: "Emailni to'g'ri kiriting",
                maxlength: 'Maksimum 50 ta belgi kiriting'
            },
            phone: {
                required: 'Telefon raqamini kiriting',
                maxlength: 'Maksimum 14 ta raqam kiriting',
                minlength: "Raqam formatini to'g'ri kiriting (+xx)"
            },
            country: {
                required: 'Yashayotgan davlatingiz nomini kiriting',
                maxlength: 'Maksimum 20 ta harf kiriting'
            },
            city: {
                required: 'Yashayotgan shahringiz nomini kiriting',
                maxlength: 'Maksimum 20 ta harf kiriting'
            },
            age: {
                required: 'Yoshingizni kiriting',
                min: 'Eng kichik raqam - 17',
                max: 'Eng katta raqam - 70'
            },
            gender: {
                required: 'Jinsingizni tanlang'
            },
            userfile:{
                extension: "Rasm faqat jpg|jpeg|png bo'lsin"
            },
            'school[]':{
                required: "Ushbu maydonni to'ldiring"
            },
            'degree[]': {
                required: 'Iltimos, darajani tanlang'
            },
            'specialization[]':{
                required: "Ushbu maydonni to'ldiring"
            },
            'school_country[]':{
                required: 'Ushbu maydonni to\'ldiring'
            },
            'school_city[]':{
                required: 'Ushbu maydonni to\'ldiring'
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