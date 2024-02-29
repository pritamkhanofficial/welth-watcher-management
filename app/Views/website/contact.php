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
            <div class="bg-img"> <img src="<?=base_url()?>front/images/banner/contact.png" alt="banner" /></div>
            <div class="container">
                <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white"
                        href="index-2.html">Home</a><i class="ph ph-caret-double-right text-white"></i>
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
                    <div class="col-12 col-xl-4">
                        <div class="infor bg-blue bora-12 p-40">
                            <div class="heading5 text-white">Get it touch</div>
                            <div class="body3 text-white mt-8">We will get back to you within 24 hours, or call us
                                everyday</div>
                            <div class="mt-40"></div>
                            <div class="list-social flex-item-center gap-10"><a
                                    class="item bora-50 w-48 h-48 flex-center bg-surface"
                                    href="https://www.facebook.com/" target="_blank"><i
                                        class="icon-facebook icon-on-surface"></i></a><a
                                    class="item bora-50 w-48 h-48 flex-center bg-surface"
                                    href="https://www.linkedin.com/" target="_blank"><i
                                        class="icon-in icon-on-surface"></i></a><a
                                    class="item bora-50 w-48 h-48 flex-center bg-surface"
                                    href="https://www.twitter.com/" target="_blank"><i
                                        class="icon-twitter fs-14 icon-on-surface ml-1"></i></a><a
                                    class="item bora-50 w-48 h-48 flex-center bg-surface"
                                    href="https://www.instagram.com/" target="_blank"><i
                                        class="icon-insta fs-14 icon-on-surface"></i></a><a
                                    class="item bora-50 w-48 h-48 flex-center bg-surface"
                                    href="https://www.youtube.com/" target="_blank"><i
                                        class="icon-youtube fs-12 icon-on-surface"></i></a></div>
                            <div class="list-more-infor mt-40">
                                <!-- <div class="item flex-item-center gap-12"><i class="ph-bold ph-clock text-blue bg-white p-8 bora-50"></i>
                    <div class="line-y"> </div>
                    <div class="text-button text-white">8AM - 6PM, Mon - sun</div>
                  </div> -->
                                <div class="item flex-item-center gap-12 mt-20"><i
                                        class="ph-fill ph-phone text-blue bg-white p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="text-button text-white">123 456 7890</div>
                                </div>
                                <div class="item flex-item-center gap-12 mt-20"><i
                                        class="ph-bold ph-envelope-simple text-blue bg-white p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="text-button text-white">hi.avitex@gmail.com</div>
                                </div>
                                <div class="item flex-item-center gap-12 mt-20"><i
                                        class="ph-bold ph-map-pin text-blue bg-white p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="text-button text-white">4140 Rd. Allentown, New Mexico 31134</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 pl-55">
                        <div class="form-block flex-columns-between gap-20">
                            <div class="heading">
                                <div class="heading5">Request a quote</div>
                                <div class="body3 text-secondary mt-8">We will get back to you within 24 hours, or call
                                    us everyday
                                </div>
                            </div>
                            <from class="cmxform" id="commentForm" method="get" action="">
                            <div class="row row-gap-20">
                                    <div class="col-12 col-sm-6">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="text" id="name" name="name" placeholder="Name" />
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="text" id="email" name="email" placeholder="Email" />
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="text" id="phone_no" name="phone_no" placeholder="Phone no" />
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                            name="state" id="state">
                                            <option value="" disabled selected>Select State</option>
                                            <?php if(!empty($data['state'])){ 
                                                foreach($data['state'] as $key=>$val){
                                                ?>
                                            <option value="<?= $val->id ?>"><?= $val->label ?></option>
                                            <?php } } ?>              
                                        </select><i class="ph ph-caret-down"></i>
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
                                            name="message" id="message" cols="10" rows="4" placeholder="Your Message"></textarea>
                                    </div>   
                            </div>
                            </from>
                            <div class="button-block">
                                <button
                                    class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Submit
                                    request</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
        <div class="pb-100"></div>
    </div>
    <?php echo view('component/front/footer'); ?>
    <!--build:js assets/js/main.min.js-->
    <?php echo view('component/front/script'); ?>
    <!--endbuild-->
</body>
<script>
$("#commentForm").validate();
</script>
<script>
    jQuery('#commentForm').validate({
        rules:{
            name:"required",
            email:{
                required:true,
                email:true
            },
            phone_no:{
                required:true,
                numeric:true,
                minlength:10,
                maxlength:10
            },
            state:"required",
            city:"required",
            zip_code:{
                required:true,
                numeric:true,
                minlength:6,
                maxlength:6
            },
            message:"required",
        },messages:{
            name:"Please enter your name",
            email:{
                required:"Please enter your email",
                email:"Please enter a valid email"
            },
            phone_no:{
                required:"Please enter your phone number",
                numeric:"Phone number must be numeric",
                minlength:"Phone number must be 10 digit",
                maxlength:"Phone number must be 10 digit"
            },
            state:"Please select your state",
            city:"Please select your state",
            zip_code:{
                required:"Please enter your zip code",
                numeric:"Please enter a valid zip code",
                minlength:"Please enter a valid zip code",
                maxlength:"Please enter a valid zip code"
            },
            message:"Please leave some message for us"
        }
    });
</script>

</html>