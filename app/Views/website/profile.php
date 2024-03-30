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
            <div class="bg-img"> <img src="<?=base_url('front/')?>images/banner/profile.jpg" alt="banner" /></div>
            <div class="container">
                <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white"
                        href="<?= base_url('/') ?>">Home</a><i class="ph ph-caret-double-right text-white"></i>
                    <div class="caption1 text-white">Update Profile</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="text-nav">
                            <div class="heading3 text-white">Update Profile</div>
                            <div class="sub-heading mt-8 text-white fw-400">We perform a full analysis of the client’s
                                website .</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-contact style-one mt-100 mb-3">
            <div class="container">
                <div class="row flex-center row-gap-32">
                    <div class="col-12 col-xl-4">
                        <div class="infor bg-blue bora-12 p-40">
                            <div class="heading5 text-white">Profile Details</div>
                            <div class="body3 text-white mt-8">We will get back to you within 24 hours, or call us
                                everyday</div>
                            <div class="mt-40"></div>
                            <div class="list-more-infor mt-40">
                                <div class="item flex-item-center gap-12 mt-20">
                                    <i class="ph-fill ph-check-circle text-blue bg-white p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="text-button text-white">Full Name: <?=getFrontUserData()->full_name?>
                                    </div>
                                </div>
                                <div class="item flex-item-center gap-12 mt-20">
                                    <i class="ph-bold ph-user text-blue bg-white p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="text-button text-white">Username : <?=getFrontUserData()->username?>
                                    </div>
                                </div>
                                <div class="item flex-item-center gap-12 mt-20">
                                    <i class="ph-bold ph-envelope-simple text-blue bg-white p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="text-button text-white">Email : <?=getFrontUserData()->email?></div>
                                </div>
                                <div class="item flex-item-center gap-12 mt-20">
                                    <i class="ph-bold ph-phone text-blue bg-white p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="text-button text-white">Mobile : <?=getFrontUserData()->mobile?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 pl-55">
                        <form action="<?=base_url('profile')?>" id="profile-update">
                            <div class="form-block flex-columns-between gap-20">
                                <div class="heading">
                                    <div class="heading5">Drop your details</div>
                                    <div class="body3 text-secondary mt-8">We will get back to you within 24 hours, or
                                        call
                                        us everyday
                                    </div>
                                </div>
                                <div class="row row-gap-20">
                                    <div class="col-12 col-sm-12">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="text" placeholder="Name" name="full_name" id="full_name"
                                            value="<?=getFrontUserData()->full_name?>" />
                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="text" placeholder="Email" name="email" id="email"
                                            value="<?=getFrontUserData()->email?>" />
                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="text" placeholder="Phone no" name="mobile" id="mobile"
                                            value="<?=getFrontUserData()->mobile?>" />
                                    </div>
                                </div>
                                <div class="button-block text-center ">
                                    <button
                                        class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48"
                                        name="submit" value="submit" type="submit">Update Profile
                                        <span class="spinner-border spinner-border-sm d-none" role="status"
                                            aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
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
    $('#profile-update').validate({
        rules: {
            full_name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
                remote: "<?=base_url('check-email')?>"
            },
            mobile: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10,
                remote: "<?=base_url('check-mobile')?>"
            },
        },

    });


    $("#profile-update").ajaxForm({
        // contentType: 'application/json',
        beforeSubmit: function() {
            var valid = $('#profile-update').valid();
            if (valid) {
                $(".spinner-border").removeClass("d-none")
                return valid;
            }
        },
        success: function(response) {
            swAlert(response)
            $(".spinner-border").addClass("d-none")
            if (response?.type == 'success') {
                location.href = location.href
            }
        }
    });
    </script>
</body>

</html>