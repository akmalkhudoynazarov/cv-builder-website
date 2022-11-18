$(document).ready(function(){

    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'File size must be less than {0}');

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
                required: 'First name is required',
                maxlength: 'Max. 20 characters are allowed'
            },
            lname:{
                required: 'Last name is required',
                maxlength: 'Max. 25 characters are allowed'
            },
            email: {
                required: 'Email is required',
                email: 'Please, enter a valid email',
                maxlength: 'Max. 50 characters are allowed'
            },
            phone: {
                required: 'Phone number is required',
                maxlength: 'Max. 15 digits are allowed',
                minlength: 'Please, use a correct format (+xxx)'
            },
            country: {
                required: 'Please, enter your country',
                maxlength: 'Max. 20 characters are allowed'
            },
            city: {
                required: 'Please, enter your city',
                maxlength: 'Max. 20 characters are allowed'
            },
            age: {
                required: 'Age is required',
                min: 'Min.age is 17',
                max: 'Max.age is 70'
            },
            gender: {
                required: 'Gender is required'
            },
            userfile:{
                extension: "Please, use only jpg|jpeg|png"
            },
            'school[]':{
                required: "This field is required"
            },
            'degree[]': {
                required: 'Please, select'
            },
            'specialization[]':{
                required: 'Enter your field od study'
            },
            'school_country[]':{
                required: 'This field is required'
            },
            'school_city[]':{
                required: 'This field is required'
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