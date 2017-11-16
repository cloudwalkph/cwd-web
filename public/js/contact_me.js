// Contact Form Scripts

$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var token = $("input.token").val();
            var first_name = $("input#first_name").val();
            var last_name = $("input#last_name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var message = $("textarea#message").val();
            var recaptcha = $("#g-recaptcha-response").val();

            $('#btn-submit').attr('disabled', true);
            $('#btn-submit').html('<i class="fa fa-spin fa-spinner fa-lg"></i> &nbsp; SEND YOUR MESSAGE');

            $.ajax({
                url: "/contact-us",
                type: "POST",
                data: {
                    _token: token,
                    first_name: first_name,
                    last_name: last_name,
                    phone: phone,
                    email: email,
                    message: message,
                    'g-recaptcha-response': recaptcha
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>﻿Thank you for sending your message! Our team will get back to you soonest. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#btn-submit').removeAttr('disabled');
                    $('#btn-submit').html('SEND YOUR MESSAGE');
                    $('#contactForm').trigger("reset");
                },
                error: function(jqXHR, textStatus) {
                    if (jqXHR.status == 422) {
                        var error = JSON.parse(jqXHR.responseText);

                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-danger').append("<strong>"+ error['g-recaptcha-response'][0]);
                        $('#success > .alert-danger').append('</div>');

                        $('#btn-submit').removeAttr('disabled');
                        $('#btn-submit').html('SEND YOUR MESSAGE')
                    } else {
                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-danger').append("<strong>Sorry it seems that the mail server is not responding. Please try again later!");
                        $('#success > .alert-danger').append('</div>');

                        $('#btn-submit').removeAttr('disabled');
                        $('#btn-submit').html('SEND YOUR MESSAGE')
                    }
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});