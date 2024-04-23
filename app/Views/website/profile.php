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
    <div id="content" class="service-block bg-surface">
        <div class="form-contact style-two">
            <div class="container mt-60 mb-32">
                <div class="row flex">
                    <div class="col-12 col-lg-6">
                        <div
                            class="infor flex-columns-between hover-box-shadow bora-8 pt-32 pb-32 pl-28 pr-28 bg-white">
                            <div class="heading">
                                <div class="heading5 mb-32">Profile Details</div>
                            </div>
                            <div class="list-more-infor">
                                <div class="item flex-item-center gap-12"><i
                                        class="ph-fill ph-check-circle text-white bg-on-surface p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="heading7">Full Name :</div>
                                    <br>
                                    <div class="line-y"> </div>
                                    <div class="body2"><?=getFrontUserData()->full_name?></div>
                                </div>
                                <div class="item flex-item-center gap-12 mt-20"><i
                                        class="ph-bold ph-user text-white bg-on-surface p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="heading7">Username :</div>
                                    <div class="line-y"> </div>
                                    <div class="body2"><?=getFrontUserData()->username?></div>
                                </div>
                                <div class="item flex-item-center gap-12 mt-20"><i
                                        class="ph-bold ph-phone text-white bg-on-surface p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="heading7">Mobile :</div>
                                    <div class="line-y"> </div>
                                    <div class="body2"><?=getFrontUserData()->mobile?></div>
                                </div>
                                <div class="item flex-item-center gap-12 mt-20"><i
                                        class="ph-bold ph-envelope-simple text-white bg-on-surface p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="heading7">Email:</div>
                                    <div class="line-y"> </div>
                                    <div class="body2"><?=getFrontUserData()->email?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="flex-columns-between hover-box-shadow bora-8 pt-32 pb-32 pl-28 pr-28 bg-white">
                            <div class="heading">
                                <div class="heading5 mb-12">My Profile</div>
                            </div>
                            <form action="<?=base_url('profile')?>" id="profile-update">
                                <div class="row row-gap-20 mt-4">
                                    <div class="col-12 col-sm-12">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            name="full_name" required id="full_name" value="<?=getFrontUserData()->full_name?>"
                                            type="text" placeholder="Name" />
                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="email" name="email" id="email" value="<?=getFrontUserData()->email?>"
                                            placeholder="Email" />
                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="text" name="mobile" id="mobile"
                                            value="<?=getFrontUserData()->mobile?>" placeholder="Phone no" />
                                    </div>
                                </div>
                                <div class="button-block mt-32 text-center">
                                    <button
                                        class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48"
                                        name="submit" value="submit" type="submit"> <span
                                            class="spinner-border spinner-border-sm d-none" role="status"
                                            aria-hidden="true"></span>Update
                                        Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="infor flex-columns-between hover-box-shadow bora-8 pt-32 pb-32 pl-28 pr-28 bg-white"
                            style="margin-top: -30px">
                            <div class="heading">
                                <div class="heading5 mt-12">Linked Account</div>
                                <div class="body3 mt-8">We will get back to you within 24 hours, or call us everyday
                                </div>
                            </div>
                            <div class="list-more-infor">
                                <div class="item flex-item-center gap-12 mt-20"><i
                                        class="ph-bold ph-envelope-simple text-white bg-on-surface p-8 bora-50"></i>
                                    <div class="line-y"> </div>
                                    <div class="body2"><?=getGlobalSetting()?->email?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
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