/*jslint browser:true, devel:true, white:true, vars:true */
/*global $:false */
/* jshint strict: false, -W117 */

$(function() {

    //noinspection JSUnresolvedVariable,JSUnresolvedFunction,JSUnresolvedFunction
    $.validator.setDefaults({
        errorClass: 'help-block',
        highlight: function(element) {
            $(element)
                .closest('.form-group')
                .addClass('has-error');
        },
        unhighlight: function(element) {
            $(element)
                .closest('.form-group')
                .removeClass('has-error');
        }
    });


    //noinspection JSUnresolvedFunction
    $("#userForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: "required",
            password_again: {
                required: true,
                equalTo: "#password"
            },
            carDetails: {
                required: true
            },
            carPrice: {
                required: true,
                number: true
            },
            carType: {
                required: true
            },
            CarTransmssion: {
                required: true
            },
            firstName: {
                required: true
            },
            lastName: {
                required: true
            },
            carOdometer: {
                required: true
            },
            carLocation: {
                required: true
            },
            carImage: {
                required: true
            },
            fullname: {
                required: true
            },
            message: {
                required: true
            },
            carInfo: {
                required: true
            }
        },
        messages: {
            email: {
                required: 'Please Enter a Email Address.',
                email: 'Please Enter a <em>valid</em> Email Address'
            },
            firstName: {
                required: 'Please Enter your First Name'
            },
            lastName: {
                required: 'Please Enter your Last Name'
            },
            password: {
                required: 'Please Enter your passowrd'
            },
            password_again: {
                required: 'Please Enter your passowrd Again'
            },
            carDetails: {
                required: 'Please Enter Car Details'
            },
            carType: {
                required: 'New/Used'
            },
            carPrice: {
                required: 'Please Enter Car Price',
                number: 'Please Number only'
            },
            CarTransmssion: {
                required: 'Automatic/Manual'
            },
            carOdometer: {
                required: 'Please enter car Odometer'
            },
            carLocation: {
                required: 'Please Car Location'
            },
            carImage: {
                required: 'Please select your car Image'
            },
            fullname: {
                required: 'Please enter your Full Name'
            },
            message: {
                required: 'Please enter your Message'
            },
            carInfo: {
                required: 'Please provide your car infromation'
            }
        }
    });
});