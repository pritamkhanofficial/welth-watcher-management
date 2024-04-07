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
            <div class="bg-img"> <img src="<?=base_url('front/')?>images/banner/report.png" alt="banner" /></div>
            <div class="container">
                <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white"
                        href="index-2.html">Home</a><i class="ph ph-caret-double-right text-white"></i>
                    <div class="caption1 text-white">Reset Password</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="text-nav">
                            <div class="heading3 text-white">Reset Password</div>
                            <div class="sub-heading mt-8 text-white fw-400">Please set your new Password.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-contact style-one mt-100 mb-3">
            <div class="container">
                <div class="row flex-center row-gap-32">
                    <?php if($valid){ ?>
                    <div class="col-12 col-xl-5 pl-55">
                        <div class="form-block  flex-columns-between gap-20">
                            <div class="heading">
                                <div class="heading5">Reset Your passward</div>
                                <div class="body3 text-secondary mt-8">We will get back to you within 24 hours, or call
                                    us everyday
                                </div>
                            </div>
                            <form action="" class="form-horizontal" id="forgot-password-complete">
                                <div class="row row-gap-20 pb-2">

                                    <div class="col-12 col-sm-12">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="password" name="new_password" id="new_password"
                                            placeholder="New Passward" />
                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <input
                                            class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            type="password" name="confirm_password" id="confirm_password"
                                            placeholder="Confirm Passward" />
                                    </div>
                                </div>
                                <div class="button-block text-center ">
                                    <button type="submit"
                                        class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48"
                                        name="submit" value="submit">Submit
                                        <span class="spinner-border spinner-border-sm d-none" role="status"
                                            aria-hidden="true"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="col-12 col-xl-4 pl-55 mb-5">
                        <div class="form-block  flex-columns-between gap-20">
                            <div class="heading">
                                <div class="heading5">Password Reset Timeout</div>
                                <div class="body3 text-secondary mt-8">Please try resetting your password again by initiating the process once more
                                </div>
                            </div>
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
    $('#forgot-password-complete').validate({
        rules: {
            new_password: {
                required: true,
                minlength: 3
            },
            confirm_password: {
                required: true,
                minlength: 3,
                equalTo: "#new_password"
            }
        },

    });


    $("#forgot-password-complete").ajaxForm({
        // contentType: 'application/json',
        beforeSubmit: function() {
            var valid = $('#forgot-password-complete').valid();
            if (valid) {
                $(".spinner-border").removeClass("d-none")
                return valid;
            }
        },
        success: function(response) {
            swAlert(response)
            $(".spinner-border").addClass("d-none")
            if (response?.type == 'success') {
                location.href = "<?=base_url('/')?>"
            }
        }
    });
    </script>
</body>

</html>