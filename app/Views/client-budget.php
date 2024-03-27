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
                                                                        <th>Budget planning</th>
                                                                        <td><?=$result->budget_planning?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>How many people are in your household?</th>
                                                                        <td><?=$result->household_size?></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th>How old are you?</th>
                                                                        <td><?=$result->age?></td>
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
                                                                        <th>What is your income?</th>
                                                                        <td><?=$result->income?>
                                                                            (<?=$result->income_frequency?>)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>What is your income after taxes? </th>
                                                                        <td><?=$result->income_after_taxes?>
                                                                            (<?=$result->income_after_taxes_frequency?>)
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th>How much do you pay in Social Security
                                                                            taxes?</th>
                                                                        <td><?=$result->social_security_taxes?>
                                                                            (<?=$result->social_security_taxes_frequency?>)
                                                                        </td>
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
                                                                        <th>Food and beverages?</th>
                                                                        <td><?=$result->food_and_beverages?>
                                                                            (<?=$result->food_and_beverages_frequency?>)
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Clothes?</th>
                                                                        <td><?=$result->clothes?>
                                                                            (<?=$result->clothes_frequency?>)
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Housing?</th>
                                                                        <td><?=$result->housing?>
                                                                            (<?=$result->housing_frequency?>)
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Transportation?</th>
                                                                        <td><?=$result->transportation?>
                                                                            (<?=$result->transportation_frequency?>)
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Healthcare and personal care products?</th>
                                                                        <td><?=$result->healthcare_and_personal_care?>
                                                                            (<?=$result->healthcare_and_personal_care_frequency?>)
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Entertainment?</th>
                                                                        <td><?=$result->entertainment?>
                                                                            (<?=$result->entertainment_frequency?>)
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Education?</th>
                                                                        <td><?=$result->education?>
                                                                            (<?=$result->education_frequency?>)
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Everything else except retirement savings?
                                                                        </th>
                                                                        <td><?=$result->other_expenses?>
                                                                            (<?=$result->other_expenses_frequency?>)
                                                                        </td>
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
                                                                        <th>How much do you save for retirement?</th>
                                                                        <td><?=$result->retirement_savings_amount?>
                                                                            (<?=$result->retirement_savings_frequency?>)
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Education?</th>
                                                                        <td><?=$result->employer_contribution?>
                                                                            (<?=$result->employer_contribution_frequency?>)
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Everything else except retirement savings?
                                                                        </th>
                                                                        <td><?=$result->starting_age_for_saving?>
                                                                        </td>
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
                                                                        <th>How much do you have in bank accounts?</th>
                                                                        <td><?=$result->bank_accounts_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>What is the current value of your
                                                                            non-retirement investment accounts?</th>
                                                                        <td><?=$result->investment_accounts_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>If you own your home, what is its current
                                                                            value?</th>
                                                                        <td><?=$result->home_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>What is the combined value of any rental
                                                                            properties you own?</th>
                                                                        <td><?=$result->rental_properties_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>What is the combined value of your vehicles?
                                                                        </th>
                                                                        <td><?=$result->vehicles_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>What is the total value of any other assets?
                                                                        </th>
                                                                        <td><?=$result->other_assets_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>What is the current value of your retirement
                                                                            savings accounts?</th>
                                                                        <td><?=$result->retirement_savings_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>How much of your assets are available for
                                                                            emergencies? </th>
                                                                        <td><?=$result->emergency_assets_value?></td>
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
                                                                        <th>How much do you owe for mortgages and
                                                                            home-equity loans? </th>
                                                                        <td><?=$result->mortgage_loans_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>How much business debt do you have? </th>
                                                                        <td><?=$result->business_debt_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>How much do you owe for vehicle loans?</th>
                                                                        <td><?=$result->vehicle_loans_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>How much credit card debt do you have?</th>
                                                                        <td><?=$result->credit_card_debt_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>How much student debt do you owe? </th>
                                                                        <td><?=$result->student_debt_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>How much do you owe for all other debts?
                                                                        </th>
                                                                        <td><?=$result->other_debts_value?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>How much do you spend to pay off the above
                                                                            debts?
                                                                        </th>
                                                                        <td><?=$result->debt_payment_value?>
                                                                            (<?=$result->debt_payment_frequency?>)
                                                                        </td>
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