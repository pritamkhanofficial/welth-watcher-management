<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>front/js/jquery-3.7.0.js"></script>
<!-- <script src="<?=base_url()?>front/js/jquery-migrate-3.4.1.js"></script> -->
<script src="<?=base_url()?>front/js/slick.min.js"></script>
<script src="<?=base_url()?>front/js/waypoints.min.js"></script>
<script src="<?=base_url()?>front/js/countUp.min.js"></script>
<script src="<?=base_url()?>front/js/phosphor-icon.js"></script>
<script src="<?=base_url()?>front/js/scrollreveal-4.0.0.min.js"></script>
<script src="<?=base_url()?>front/js/bootstrap-drawer.min.js"></script>
<script src="<?=base_url()?>front/js/drawer.min.js"></script>
<script src="<?=base_url()?>front/js/main.min.js"></script>
<script src="<?=base_url()?>front/js/jquery.steps.js"></script>
<script src="<?=base_url()?>front/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<!-- Ajax Form -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
/*  $(document).ready(function(){
        Swal.fire("Saved!", "fdsdsf", "success");
    }); */
function swAlert(data) {
    Swal.fire(data?.title, data?.message, data?.type);
}
</script>

<script>
function asd(a) {
    if (a == 1) {
        $('#updatef').hide();
        $('#forgot-password').hide();
        $('#login_form').show();
    } else if (a == 2) {
        $('#login_form').hide();
        $('#forgot-password').hide();
        $('#updatef').show();
    } else if (a == 3) {
        $('#login_form').hide();
        $('#updatef').hide();
        $('#forgot-password').show();
    }
}


$('.register').validate({
    rules: {
        full_name: {
            required: true
        },
        email: {
            required: true,
            email: true,
            remote: "<?=base_url('check-email')?>"
        },
        mobile_no: {
            required: true,
            number: true,
            minlength: 10,
            maxlength: 10,
            remote: "<?=base_url('check-mobile')?>"
        },
        password: {
            required: true,
            minlength: 3
        },
        confirm_password: {
            required: true,
            minlength: 3,
            equalTo: "#password"
        }
    },
    messages: {
        name: "Please enter your name",
        email: {
            required: "Please enter your email",
            email: "Please enter a valid email"
        },
        mobile_no: {
            required: "Please enter your mobile number",
            number: "Mobile number must be numeric",
            minlength: "Mobile number must be 10 digit",
            maxlength: "Mobile number must be 10 digit"
        }
    }
});
$('#forgot-password').validate({
    rules: {
        email: {
            required: true,
            email: true
        }
    },
    messages: {
        email: {
            required: "Please enter your email",
            email: "Please enter a valid email"
        }
    }
});



$(".register").ajaxForm({
    // contentType: 'application/json',
    beforeSubmit: function() {
        var valid = $('.register').valid();
        if (valid) {
            $(".spinner-border").removeClass("d-none")
            return valid;
        }
    },
    success: function(response) {
        swAlert(response)
        if (response?.type == 'success') {
            if (response?.message == 'Registration successful! You can now log in.') {
                asd(1)
                $('.register')[0].reset();
                $("#otp").attr("required", false);
                $("#send_otp").removeClass("d-none")
                $(".submit_otp").addClass("d-none")
            } else {
                $("#send_otp").addClass("d-none")
                $(".submit_otp").removeClass("d-none")
                $("#otp").attr("required", true);
                var time = 300;
                timer(time);
                var counter = setInterval(function() {
                    if (!timerOn) {
                        clearInterval(counter);
                        //alert(timerOn)
                        $("#otp").attr("required", false);
                        $("#send_otp").removeClass("d-none")
                        $(".submit_otp").addClass("d-none")
                    }

                }, time);
            }
        }
        $(".spinner-border").addClass("d-none")
    }
});
$("#login_form").ajaxForm({
    // contentType: 'application/json',
    beforeSubmit: function() {

        $(".spinner-border").removeClass("d-none")
    },
    success: function(response) {
        swAlert(response)
        /* if (response?.type == 'success') {
            if (response?.message == 'Registration successful! You can now log in.') {
                asd(1)
                $('.register')[0].reset();
                $("#otp").attr("required", false);
                $("#send_otp").removeClass("d-none")
                $(".submit_otp").addClass("d-none")
            } else {
                $("#send_otp").addClass("d-none")
                $(".submit_otp").removeClass("d-none")
                $("#otp").attr("required", true);
                var time = 300;
                timer(time);
                var counter = setInterval(function() {
                    if (!timerOn) {
                        clearInterval(counter);
                        //alert(timerOn)
                        $("#otp").attr("required", false);
                        $("#send_otp").removeClass("d-none")
                        $(".submit_otp").addClass("d-none")
                    }

                }, time);
            }
        } */
        $(".spinner-border").addClass("d-none")
        if (response?.type == 'success') {
            location.href = location.href
        }
    }
});
$("#forgot-password").ajaxForm({
    // contentType: 'application/json',
    beforeSubmit: function() {

        $(".spinner-border").removeClass("d-none")
    },
    success: function(response) {
        swAlert(response)
        /* if (response?.type == 'success') {
            if (response?.message == 'Registration successful! You can now log in.') {
                asd(1)
                $('.register')[0].reset();
                $("#otp").attr("required", false);
                $("#send_otp").removeClass("d-none")
                $(".submit_otp").addClass("d-none")
            } else {
                $("#send_otp").addClass("d-none")
                $(".submit_otp").removeClass("d-none")
                $("#otp").attr("required", true);
                var time = 300;
                timer(time);
                var counter = setInterval(function() {
                    if (!timerOn) {
                        clearInterval(counter);
                        //alert(timerOn)
                        $("#otp").attr("required", false);
                        $("#send_otp").removeClass("d-none")
                        $(".submit_otp").addClass("d-none")
                    }

                }, time);
            }
        } */
        $(".spinner-border").addClass("d-none")
        /* if (response?.type == 'success') {
            location.href = location.href
        } */
    }
});
</script>