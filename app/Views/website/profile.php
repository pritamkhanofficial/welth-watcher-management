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
                        href="index-2.html">Home</a><i class="ph ph-caret-double-right text-white"></i>
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

        <div class="container pt-5 pb-5">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card overflow-hidden" style="border: 1px solid rgba(0,0,0,.125) !important;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Full Name: <?=getFrontUserData()->full_name?></li>
                                <li class="list-group-item">Username: <?=getFrontUserData()->username?></li>
                                <li class="list-group-item">Email: <?=getFrontUserData()->email?></li>
                                <li class="list-group-item">Mobile: <?=getFrontUserData()->mobile?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card overflow-hidden" style="border: 1px solid rgba(0,0,0,.125) !important;">
                            <div class="card-body p-5">
                                <div class="p-2">
                                    <form class="form-horizontal" action="<?=base_url('profile')?>" id="profile-update">

                                        <div class="mb-3 row">
                                            <label for="full_name" class="form-label col-lg-2">Full Name</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="full_name" id="full_name"
                                                    value="<?=getFrontUserData()->full_name?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="mobile" class="form-label col-lg-2">Mobile</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="mobile" id="mobile"
                                                    value="<?=getFrontUserData()->mobile?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="email" class="form-label col-lg-2">Email</label>
                                            <div class="col-lg-10">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    value="<?=getFrontUserData()->email?>">
                                            </div>
                                        </div>


                                        <div class="mt-3 text-center">
                                            <button class="btn btn-primary waves-effect waves-light w-25" name="submit"
                                                value="submit" type="submit">Update <span
                                                    class="spinner-border spinner-border-sm d-none" role="status"
                                                    aria-hidden="true"></span></button>
                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>

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