<?php 
// getPrint($data['state']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('component/front/head'); ?>

    <style>
    .spinner-border {
        width: 1rem;
        height: 1rem;
    }
    </style>
</head>

<body>
    <?php echo view('component/front/header'); ?>
    <div id="content">
        <div class="slider-sub ">
            <div class="bg-img"> <img src="<?=base_url()?>front/images/banner/contact.png" alt="banner" /></div>
            <div class="container">
                <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white"
                        href="<?= base_url('/') ?>">Home</a><i class="ph ph-caret-double-right text-white"></i>
                    <div class="caption1 text-white">Contact Us</div>
                </div>
                <div class="text-nav">
                    <div class="heading3 text-white">Contact Us</div>
                    <div class="sub-heading mt-8 text-white fw-400">Explore our Contact Us page for prompt assistance
                        from our
                        dedicated team.</div>
                </div>
            </div>
        </div>
        <div class="form-contact style-one mt-100">
            <div class="container">
                <div class="row flex-center row-gap-32">
                    <div class="col-12 col-xl-5">
                        <div class="infor bg-blue bora-12 p-40">
                            <div class="heading5 text-white">Get it touch</div>
                            <div class="body3 text-white mt-8">We will get back to you within 24 hours
                            </div>
                            <div class="mt-40"></div>
                            <div class="list-social flex-item-center gap-10"><a
                                    class="item bora-50 w-48 h-48 flex-center bg-surface"
                                    href="<?=getGlobalSetting()?->facebook_url?>" target="_blank"><i
                                        class="icon-facebook icon-on-surface"></i></a><a
                                    class="item bora-50 w-48 h-48 flex-center bg-surface"
                                    href="<?=getGlobalSetting()?->linkedin_url?>" target="_blank"><i
                                        class="icon-in icon-on-surface"></i></a><a
                                    class="item bora-50 w-48 h-48 flex-center bg-surface"
                                    href="<?=getGlobalSetting()?->twitter_url?>" target="_blank"><i
                                        class="icon-twitter fs-14 icon-on-surface ml-1"></i></a><a
                                    class="item bora-50 w-48 h-48 flex-center bg-surface"
                                    href="<?=getGlobalSetting()?->instagram_url?>" target="_blank"><i
                                        class="icon-insta fs-14 icon-on-surface"></i></a><a
                                    class="item bora-50 w-48 h-48 flex-center bg-surface"
                                    href="<?=getGlobalSetting()?->youtube_url?>" target="_blank"><i
                                        class="icon-youtube fs-12 icon-on-surface"></i></a></div>
                            <div class="list-more-infor mt-40">
                                <!-- <div class="item flex-item-center gap-12"><i class="ph-bold ph-clock text-blue bg-white p-8 bora-50"></i>
                    <div class="line-y"> </div>
                    <div class="text-button text-white">8AM - 6PM, Mon - sun</div>
                  </div> -->
                                <div class="item flex-item-center gap-12 mt-20"><i
                                        class="ph-fill ph-phone text-blue bg-white p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="text-button text-white"><?=getGlobalSetting()?->mobile_no?></div>
                                </div>
                                <div class="item flex-item-center gap-12 mt-20"><i
                                        class="ph-bold ph-envelope-simple text-blue bg-white p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="text-button text-white"><?=getGlobalSetting()?->email?></div>
                                </div>
                                <div class="item flex-item-center gap-12 mt-20"><i
                                        class="ph-bold ph-map-pin text-blue bg-white p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="text-button text-white"><?=getGlobalSetting()?->address?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5 pl-55">
                        <div class="form-block flex-columns-between gap-20">
                            <div class="heading">
                                <div class="heading5">Request a quote</div>
                                <div class="body3 text-secondary mt-8">We will get back to you within 24 hours
                                </div>
                            </div>
                            <form class="contactForm" id="contactForm" method="post" action="<?=base_url('/contact')?>">
                                <div class="row row-gap-20">
                                    <div class="col-12 col-sm-6">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="text" id="name" required name="name" placeholder="Name" />
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="email" id="email" name="email" placeholder="Email" />
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="text" id="phone_no" name="phone_no" placeholder="contact no" />
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select
                                            class="form-select w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                            name="state" id="state">
                                            <option value="" selected>Select State</option>
                                            <?php if(!empty($data['state'])){ 
                                                foreach($data['state'] as $key=>$val){
                                                ?>
                                            <option value="<?= $val->id ?>"><?= $val->label ?></option>
                                            <?php } } ?>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="text" id="city" name="city" placeholder="City" />
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="text" id="zip_code" name="zip_code" placeholder="Zip Code" />
                                    </div>
                                    <div class="col-12">
                                        <textarea
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            name="message" id="message" cols="10" rows="4"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="button-block mt-3">
                                    <button type="submit" name="submit" value="submit"
                                        class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Submit
                                        request <div class="spinner-border d-none" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-100"></div>
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

                // alert(response.message);
                swAlert(response)
                $('#contactForm')[0].reset();
                $(".spinner-border").addClass("d-none")
            }
        });
        </script>
</body>

</html>