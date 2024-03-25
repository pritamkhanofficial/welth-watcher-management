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
                                                                data-bs-target="#basics" aria-expanded="false"
                                                                aria-controls="basics">
                                                                Basics
                                                            </button>
                                                        </h2>
                                                        <div id="basics" class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <table class="table table-bordered border-primary">
                                                                    <tr>
                                                                        <th></th>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button fw-medium collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#income" aria-expanded="false"
                                                                aria-controls="income">
                                                                Income
                                                            </button>
                                                        </h2>
                                                        <div id="income" class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <table class="table table-bordered border-primary">
                                                                    <tr>
                                                                        <th></th>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button fw-medium collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#spending" aria-expanded="false"
                                                                aria-controls="spending">
                                                                Spending
                                                            </button>
                                                        </h2>
                                                        <div id="spending" class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <table class="table table-bordered border-primary">
                                                                    <tr>
                                                                        <th></th>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button fw-medium collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#retirement" aria-expanded="false"
                                                                aria-controls="retirement">
                                                                Retirement
                                                            </button>
                                                        </h2>
                                                        <div id="retirement" class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <table class="table table-bordered border-primary">
                                                                    <tr>
                                                                        <th></th>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button fw-medium collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#assets" aria-expanded="false"
                                                                aria-controls="assets">
                                                                Assets
                                                            </button>
                                                        </h2>
                                                        <div id="assets" class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <table class="table table-bordered border-primary">
                                                                    <tr>
                                                                        <th></th>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button fw-medium collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#debts" aria-expanded="false"
                                                                aria-controls="debts">
                                                                Debts
                                                            </button>
                                                        </h2>
                                                        <div id="debts" class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <table class="table table-bordered border-primary">
                                                                    <tr>
                                                                        <th></th>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
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