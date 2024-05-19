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
            <div class="bg-img"> <img src="<?=base_url('front/')?>/images/banner/about1.png" alt="banner" /></div>
            <div class="container">
                <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white"
                        href="<?= base_url('/') ?>">Home</a><i class="ph ph-caret-double-right text-white"></i>
                    <div class="caption1 text-white">About Us</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="text-nav">
                            <div class="heading3 text-white">About Us</div>
                            <div class="sub-heading mt-8 text-white fw-400">At Wealth Watcher Management Consultant, we are dedicated to helping our clients achieve their financial goals through expert investment management and financial planning services. Our team of experienced professionals has a deep understanding of the financial markets and is committed to providing our clients with the highest level of service and support. Our mission is to empower clients to make informed investment decisions and build long-term wealth through strategic investment planning. We believe that every client is unique, and we take the time to understand their individual financial goals, risk tolerance, and investment horizon. Our investment philosophy is centered around a disciplined, research-driven approach that emphasizes diversification and risk management. At Wealth Watcher Management Consultant, we pride ourselves on our commitment to transparency, integrity, and client satisfaction. We believe that open communication and regular reporting are essential to building trust and long-lasting relationships with our clients. Whether you are a seasoned investor or just starting out, we are here to help you navigate the complex world of finance and achieve your financial dreams. Contact us today to learn more about our investment services and how we can help you build a brighter financial future.
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-md-12 col-lg-6">
                        <div class="text-nav">
                            <div class="heading3 text-white">Why Choose Us</div>
                            <div class="sub-heading mt-8 text-white fw-400">We perform a full analysis of the client’s
                                website and
                                collect information about all the competitors to formulate a proper strategy.We perform
                                a full analysis
                                of the client’s website and collect information about all the competitors to formulate a
                                proper
                                strategy.We perform a full analysis of the client’s website and collect information
                                about all the
                                competitors to formulate a proper strategy.</div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="financial-assessment-block pt-100 pb-100 bg-white">
            <div class="container">
                <div class="row flex-item-center">
                    <div class="col-12 col-xl-5 col-lg-12">
                        <div class="bg-img w-100 overflow-hidden bora-20"><img
                                class="w-100 h-100 hover-scale display-block bora-20"
                                src="<?=base_url('front/')?>/images/component/assessment.png" alt="" /></div>
                    </div>
                    <div class="col-12 col-xl-7 col-lg-12 flex-column">
                        <div class="heading3 ml-40">company overview</div>
                        <div class="nav-infor ml-40 mt-40">
                            <div class="list-nav flex-item-center gap-40">
                                <!-- <div class="nav-item active" data-name="about-us">About Us</div> -->
                                <div class="nav-item active" data-name="mission">Mission</div>
                                <div class="nav-item" data-name="vision">Vision</div>
                                <div class="nav-item" data-name="why-choose-us">Why Choose Us</div>
                            </div>
                            <!-- <div class="description item-filter" data-name="about-us">
                                <div class="title body3 text-secondary mt-16">We're a devoted team providing premium
                                    financial
                                    solutions. Explore our mission, values, and achievements as we empower clients for a
                                    secure financial
                                    future.</div>
                                <div class="more-infor mt-24">
                                    <div class="infor flex-item-center gap-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Identification of monthly income</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Creation of savings and investment plan</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Management and calculation of monthly expenses</div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="description item-filter" data-name="mission">
                                <div class="title body3 text-secondary mt-16">To empower individuals and institutions with comprehensive investment solutions ethically personalized to meet their short and long-term goals
                                </div>
                                <div class="more-infor mt-24">
                                    <div class="infor flex-item-center gap-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Creation of savings and investment plans</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Management and calculation of expenses</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Identification of income paths through smart financial plans</div>
                                    </div>
                                </div>
                            </div>
                            <div class="description item-filter hide" data-name="vision">
                                <div class="title body3 text-secondary mt-16">To envision a future that sustainably and transparently aligns our clients' objectives with our innovative financial strategies and unwavering support</div>
                                <div class="more-infor mt-24">
                                    <div class="infor flex-item-center gap-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Creation of savings and investment plans</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Management and calculation of expenses</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Identification of income paths through smart financial plans</div>
                                    </div>
                                </div>
                            </div>
                            <div class="description item-filter hide" data-name="why-choose-us">
                                <!-- <div class="title body3 text-secondary mt-16">Our unwavering vision is to be the most
                                    trusted and
                                    preferred partner in achieving financial success, diligently guiding our valued
                                    clients toward a
                                    secure and prosperous future.</div> -->
                                <!-- <div class="more-infor mt-24">
                                    <div class="infor flex-item-center gap-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button"> We specialize in ethical investing strategies that align with your values, ensuring that your investments contribute positively to society and the environment</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Our personalized approach creates a financial plan that fits your lifestyle and goals, helping you to manage your finances more effectively.</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Our team of experts utilizes cutting-edge techniques to provide you with insights that can help inform and influence your investment decisions.</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Our customer-centric approach provides clear and concise information so you can confidently make financial choices.</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Our history of delivering effective financial advice and achieving results portrays how dedicated we are to continuing this tradition of excellence.</div>
                                    </div>
                                </div> -->

                                <div class="more-infor mt-24">
                                    <div class="infor flex-item-center gap-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">We specialize in ethical investing strategies that align with your values, ensuring that your investments contribute positively to society and the environment.</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Our personalized approach creates a financial plan that fits your lifestyle and goals, helping you to manage your finances more effectively.</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Our team of experts utilizes cutting-edge techniques to provide you with insights that can help inform and influence your investment decisions.</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Our customer-centric approach provides clear and concise information so you can confidently make financial choices.</div>
                                    </div>
                                    <div class="infor flex-item-center gap-12 mt-12"> <i
                                            class="ph-fill ph-check-circle fs-20 text-blue"></i>
                                        <div class="text-button">Our history of delivering effective financial advice and achieving results portrays how dedicated we are to continuing this tradition of excellence.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-block flex-item-center gap-20 ml-40 mt-40 pb-8">
                            <?php if(!getFrontUserData()){ ?>
                            <a class="button-share text-white bg-blue hover-button-black text-button pt-14 pb-14 pl-36 pr-36 bora-48"
                                href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get
                                started</a>
                            <?php } ?>
                            <a class="button-share text-on-surface hover-button-black bg-white text-button pt-12 pb-12 pl-36 pr-36 bora-48 border-blue-2px flex-item-center gap-8"
                                href="tel:<?=getGlobalSetting()?->mobile_no?>"><i class="ph ph-phone fs-20"></i><span><?=getGlobalSetting()?->mobile_no?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="count-number-block">
            <div class="container">
                <div class="row row-gap-32">
                    <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 flex-columns-center">
                        <div class="count-block flex-item-center">
                            <div class="counter heading3"><?=getGlobalSetting()?->business_setup_growth?></div><span
                                class="heading3">K</span>
                        </div>
                        <div class="body1 text-secondary">Business Setup Growth</div>
                    </div>
                    <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 flex-columns-center">
                        <div class="count-block flex-item-center">
                            <div class="counter heading3"><?=getGlobalSetting()?->business_problem_solving?></div><span
                                class="heading3">K</span>
                        </div>
                        <div class="body1 text-secondary">Business Progression Planning</div>
                    </div>
                    <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 flex-columns-center">
                        <div class="count-block flex-item-center">
                            <div class="counter heading3"><?=getGlobalSetting()?->goal_achiever?></div><span
                                class="heading3">K</span>
                        </div>
                        <div class="body1 text-secondary">Families Benefited</div>
                    </div>
                    <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 flex-columns-center">
                        <div class="count-block flex-item-center">
                            <div class="counter heading3"><?=getGlobalSetting()?->passive_income_earners?></div><span
                                class="heading3">K</span>
                        </div>
                        <div class="body1 text-secondary">Passive Incomes Earrned</div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!empty($services)){ ?>
        <div class="service-block mt-100 pt-100 pb-100 bg-surface">
            <div class="container">
                <div class="heading-block text-center">
                    <div class="heading3">Our Services</div>
                    <div class="body3 text-secondary mt-12">We provide customized financial services designed to meet your unique needs and drive your financial success</div>
                </div>
                <div class="list-service row mt-32 row-gap-24">
                    <?php  
                        foreach($services as $key=>$row){
                            // $description = word_limiter(strip_tags($row->containt), 20);

                    ?>
                    <div class="col-12 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="service-item hover-box-shadow bora-8 pt-32 pb-32 pl-28 pr-28 bg-white"><a
                                class="service-item-main flex-column gap-16v2" href="javascript:void(0)" onclick='showDesc("service_desc_id_<?=$key?>")'>
                                <input type="hidden" id="service_desc_id_<?=$key?>" value="<?=strip_tags($row->containt)?>"/> 
                                <div class="heading flex-item-center gap-16v2"><i
                                        class="<?=$row->icon_text?> text-blue fs-42"></i>
                                    <div class="heading6 hover-text-blue"><?=$row->title?></div>
                                </div>
                                <div class="body3 text-secondary"><?=$row->short_description?></div>
                                    <!-- <div class="explore-block flex-item-center gap-4">
                                        <div class="text-button-small text-blue">Explore Plan</div><i
                                            class="ph-bold ph-caret-double-right fs-12 text-blue"></i>
                                    </div> -->
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty(partners())){ ?>
        <div class="partner-five-col style-one mt-60 pb-60 bg-white">
            <div class="list pt-32 pb-32 owl-carousel">
                <?php  foreach(partners() as $row){  ?>
                <div class="bg-img flex-center"><img class="w-100" src="<?=base_url('get-file/' . $row->image)?>"
                        alt=""></div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>

        <!-- Modal -->
        <div class="modal fade" id="service" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Core Need Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="serviceBody">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
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

    <script>
        function showDesc(id) {
            $('#serviceBody').html($("#" + id).val());
            $('#service').modal('show');
        }
    </script>
</body>

</html>