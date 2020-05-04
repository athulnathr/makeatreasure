// ----- CONTACT ----- //

$.validator.addMethod('testmail', function (value) {
    return /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(value);
}, 'Please enter a valid email.');

$('#contact-form').validate({
    rules: {
        name: "required",
        phone: {
            required: true,
            number: true,
            minlength: 10,
            maxlength: 10
        },
        email: {
            email: true,
            required: true,
            testmail: true
        }
    },
    messages: {
        name: "Please enter your name",
        phone: {
            required: 'Please enter your phone number.',
            number: 'Please enter a valid number',
            min: 'Please enter a valid phone number',
            max: 'Please enter a valid phone number'
        },
        email: {
            email: 'Please ente a valid email',
            required: 'An Email id is required for registration'
        }
    }
});

