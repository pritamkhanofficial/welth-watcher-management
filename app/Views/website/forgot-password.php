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
                <!-- <div class="row  justify-content-evenly mt-5">

                    <div class="col-lg-6  ">
                        <div class="card p-2" style="border: 1px solid rgba(0,0,0,.125) !important;">
                            <div class="card-body">
                                <form>
                                    <div class="form-group row m-1">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">New Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="new-password">
                                        </div>
                                    </div>
                                    <div class="form-group row m-1">
                                        <label for="inputPassword" class="col-sm-4 col-form-label">Confirm Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="confirm-password">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div> -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden" style="border: 1px solid rgba(0,0,0,.125) !important;">
                            <div class="card-body pt-0">
                                <div class="p-2">
                                    <form class="form-horizontal" action="" id="forgot-password-complete">

                                        <div class="mb-3">
                                            <label for="new_password" class="form-label">New Password</label>
                                            <input type="password" class="form-control" name="new_password"
                                                id="new_password" placeholder="Enter New Password">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="confirm_password">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password"
                                                id="confirm_password" placeholder="Enter Confirm Password">
                                        </div>



                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" name="submit"
                                                value="submit" type="submit">Log
                                                In <span class="spinner-border spinner-border-sm d-none" role="status"
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