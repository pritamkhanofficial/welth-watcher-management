<!doctype html>
<html lang="en">

<head>

    <?=view('component/back/head')?>


</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?=view('component/back/header')?>
        <?=view('component/back/sidebar')?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page breadcrumb -->
                    <?=view('component/back/breadcrumb')?>
                    <!-- end page breadcrumb -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">Accordion</h4>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="mt-4">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button fw-medium collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne" aria-expanded="false"
                                                                aria-controls="collapseOne">
                                                                Accordion Item #1
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <div class="text-muted">
                                                                    <strong class="text-dark">This is the first item's
                                                                        accordion body.</strong> It is hidden by
                                                                    default, until the collapse plugin adds the
                                                                    appropriate classes that we use to style each
                                                                    element. These classes control the overall
                                                                    appearance, as well as the showing and hiding via
                                                                    CSS transitions. You can modify any of this with
                                                                    custom CSS or overriding our default variables. It's
                                                                    also worth noting that just about any HTML can go
                                                                    within the <code>.accordion-body</code>, though the
                                                                    transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button fw-medium collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Accordion Item #2
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <div class="text-muted">
                                                                    <strong class="text-dark">This is the second item's
                                                                        accordion body.</strong> It is hidden by
                                                                    default, until the collapse plugin adds the
                                                                    appropriate classes that we use to style each
                                                                    element. These classes control the overall
                                                                    appearance, as well as the showing and hiding via
                                                                    CSS transitions. You can modify any of this with
                                                                    custom CSS or overriding our default variables. It's
                                                                    also worth noting that just about any HTML can go
                                                                    within the <code>.accordion-body</code>, though the
                                                                    transition does limit overflow.

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button fw-medium collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Accordion Item #3
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="text-muted">
                                                                    <strong class="text-dark">This is the third item's
                                                                        accordion body.</strong> It is hidden by
                                                                    default, until the collapse plugin adds the
                                                                    appropriate classes that we use to style each
                                                                    element. These classes control the overall
                                                                    appearance, as well as the showing and hiding via
                                                                    CSS transitions. You can modify any of this with
                                                                    custom CSS or overriding our default variables. It's
                                                                    also worth noting that just about any HTML can go
                                                                    within the <code>.accordion-body</code>, though the
                                                                    transition does limit overflow.

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end accordion -->
                                            </div>
                                        </div>
                                        <!-- end col -->

                                       
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?=view('component/back/footer')?>


        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>


    <?=view('component/back/script')?>


    <script>
    /* $("#changePassword").validate({
        rules: {
            password: {
                required: true
            },
            new_password: {
                required: true
            },
            confirm_password: {
                required: true,
                equalTo: "#new_password"
            }
        },
        messages: {
            confirm_password: {
                equalTo: "The Confirm Password field does not match the New Password field."
            }
        }

    });
    $("#changePassword").ajaxForm({
        contentType: 'application/json',
        beforeSubmit: function() {
            var valid = $('#changePassword').valid();
            if (valid) {
                $("#submit").html("Loading...")
                return valid;
            }
        },
        success: function(response) {
            $("#submit").html("Change")
            if (response?.success) {
                notification();
                // window.location.reload(true);
            }

            $(".password").html(response.message?.password ?? '');
            $(".new_password").html(response.message?.new_password ?? '');
            $(".confirm_password").html(response.message?.confirm_password ?? '');
        }
    }); */
    </script>

</body>

</html>