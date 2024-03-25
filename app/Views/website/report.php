<?php 
// getPrint($data['state']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('component/front/head'); ?>
</head>

<body>
    <?php echo view('component/front/header'); ?>
    <div id="content">
        <div class="slider-sub ">
            <div class="bg-img"> <img src="<?=base_url('front/')?>images/banner/report.jpg" alt="banner" /></div>
            <div class="container">
                <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white"
                        href="index-2.html">Home</a><i class="ph ph-caret-double-right text-white"></i>
                    <div class="caption1 text-white">Report Analysis</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="text-nav">
                            <div class="heading3 text-white">Report Analysis</div>
                            <div class="sub-heading mt-8 text-white fw-400">We perform a full analysis of the client’s
                                website .</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5 pb-5">
            <div class="content">
                <div class="row">
                    <?php if(getFrontUserData()){ ?>
                    <div class="col-lg-12 text-center">
                        <h1 class="display-1">Live Report</h1>
                    </div>
                    <?php }else{ ?>
                    <div class="col-lg-12 text-center ">
                        <h1 class="display-4">Demo Report</h1>
                        <div class="button-block">
                            <?php if(!getFrontUserData()){ ?>
                            <button
                                class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">Register</button>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>

    </div>
    <?php echo view('component/front/footer'); ?>
    <!--build:js assets/js/main.min.js-->
    <?php echo view('component/front/script'); ?>
    <!--endbuild-->
    <script>
    $('#contactForm').validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            phone_no: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            state: "required",
            city: "required",
            zip_code: {
                required: true,
                number: true,
                minlength: 6,
                maxlength: 6
            },
            message: "required",
        },
        messages: {
            name: "Please enter your name",
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email"
            },
            phone_no: {
                required: "Please enter your phone number",
                number: "Phone number must be numeric",
                minlength: "Phone number must be 10 digit",
                maxlength: "Phone number must be 10 digit"
            },
            state: "Please select your state",
            city: "Please select your state",
            zip_code: {
                required: "Please enter your zip code",
                number: "Please enter a valid zip code",
                minlength: "Please enter a valid zip code",
                maxlength: "Please enter a valid zip code"
            },
            message: "Please leave some message for us"
        }
    });


    $("#contactForm").ajaxForm({
        // contentType: 'application/json',
        beforeSubmit: function() {
            var valid = $('#contactForm').valid();
            if (valid) {
                /* $("#send_otp").html("Loading...")
                $("#submit_otp").html("Loading...") */

                $(".spinner-border").removeClass("d-none")
                return valid;
            }
        },
        success: function(response) {
            // console.log(response.email);
            /* $(".institute_id").html(response.message.institute_id ?? '');
            $(".course_id").html(response.message.course_id ?? '');
            $(".quota").html(response.message.quota ?? '');
            $(".mobile").html(response.message.mobile ?? '');
            $(".email").html(response.message.email ?? '');
            $(".otp").html(response.message.otp ?? '');
           
            if (response.success) {

                

                if (response.data.url || response.message === "verified") {
                    window.location.href = response.data.url;
                }else if (response.message == "Form Fillup Done for this email and mobile number") {
                    alert(response.message);
                }else {
                    var time = 60;
                    timer(time);
                    var counter = setInterval(function() {
                        if (!timerOn) {
                            clearInterval(counter);
                             //alert(timerOn)
                            $("#send_otp_div").removeClass("d-none");
                            $("#otp").attr("required", false);
                            $(".submit_otp_div").addClass("d-none");
                        }

                    }, time);
                     //alert(timerOn);
                    $("#send_otp_div").addClass("d-none");
                    $("#otp").attr("required", true);
                    $(".submit_otp_div").removeClass("d-none");
                }


            }
            $("#send_otp").html("Send OTP");
            $("#submit_otp").html("Submit OTP"); */

            alert(response.message);
            $('#contactForm')[0].reset();
            $(".spinner-border").addClass("d-none")
        }
    });
    </script>
</body>

</html>