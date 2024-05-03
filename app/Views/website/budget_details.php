<?php
// getBudgetDetails();

// getPrint(getBudgetDetails()); 
$getBD = getBudgetDetails();
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
            <div class="bg-img bg-info  d-flex flex-column">
                <div id="gauge-chart" class="align-self-center" style="width: 600px;height:400px;"></div>
            </div>
            <div class="container">
                <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white"
                        href="index-2.html">Home</a><i class="ph ph-caret-double-right text-white"></i>
                    <div class="caption1 text-white">Wealth Calculator</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="text-nav">
                            <div class="heading3 text-white">Wealth Calculator</div>
                            <div class="sub-heading mt-8 text-white fw-400">We perform a full analysis of the client’s
                                website .</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5 pb-5">
            <div class="content">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link " id="your-sort-tab" data-bs-toggle="tab" data-bs-target="#your-sort"
                            type="button" role="tab" aria-controls="your-sort" aria-selected="true">YOUR
                            SNAPSHOT</button>
                        <button class="nav-link active" id="your-details-tab" data-bs-toggle="tab"
                            data-bs-target="#your-details" type="button" role="tab" aria-controls="your-details"
                            aria-selected="false">YOUR DETAILS</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade mt-5" id="your-sort" role="tabpanel" aria-labelledby="your-sort-tab">

                    </div>
                    <div class="tab-pane fade show active mt-5" id="your-details" role="tabpanel"
                        aria-labelledby="nav-contact-tab">
                        <div class="container ">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p>Here you can find a summary of the responses you provided, along with a few
                                        totals that were calculated when determining your WealthScore.</p>
                                    <br>
                                    <div class="card border  mb-3">
                                        <div class="card-header"><b>Basics</b><span class="float-end"><a
                                                    href="<?= base_url('budget-planning/0') ?>"><i
                                                        class="fas fa-pen"></i></a></span></div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Hometown <span
                                                    class="float-end"><b><?= isset($getBD->area_name) ? $getBD->area_name : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Household Size<span
                                                    class="float-end"><b><?= isset($getBD->household_size) ? $getBD->household_size : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Age<span
                                                    class="float-end"><b><?= isset($getBD->age) ? $getBD->age : '' ?></b></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="card border  mb-3">
                                        <div class="card-header"><b>Your Annual Income</b><span class="float-end"><i
                                                    class="fas fa-pen"></i></span></div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Pre-tax Income <span
                                                    class="float-end"><b>₹<?= isset($getBD->income) ? $getBD->income : '' ?></b></span></span>
                                            </li>
                                            <li class="list-group-item">After-tax Income<span
                                                    class="float-end"><b>₹<?= isset($getBD->income_after_taxes) ? $getBD->income_after_taxes : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Social Security Contribution<span
                                                    class="float-end"><b>₹<?= isset($getBD->social_security_taxes) ? $getBD->social_security_taxes : '' ?></b></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="card border  mb-3">
                                        <div class="card-header"><b>Your Annual Expenses</b>
                                            <span class="float-end"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Food and Beverages <span
                                                    class="float-end"><b>₹<?= isset($getBD->food_and_beverages) ? $getBD->food_and_beverages : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Clothes<span
                                                    class="float-end"><b>₹<?= isset($getBD->clothes) ? $getBD->clothes : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Housing<span
                                                    class="float-end"><b>₹<?= isset($getBD->housing) ? $getBD->housing : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Transportation<span
                                                    class="float-end"><b>₹<?= isset($getBD->transportation) ? $getBD->transportation : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Healthcare & Personal Products<span
                                                    class="float-end"><b>₹<?= isset($getBD->healthcare_and_personal_care) ? $getBD->healthcare_and_personal_care : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Entertainment<span
                                                    class="float-end"><b>₹<?= isset($getBD->entertainment) ? $getBD->entertainment : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Education<span
                                                    class="float-end"><b>₹<?= isset($getBD->education) ? $getBD->education : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Miscellaneous<span
                                                    class="float-end"><b>₹<?= isset($getBD->other_expenses) ? $getBD->other_expenses : '' ?></b></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="card border  mb-3">
                                        <div class="card-header"><b>Your Annual Retirement Contributions</b>
                                            <span class="float-end"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Retirement Contributions <span
                                                    class="float-end"><b>₹<?= isset($getBD->retirement_savings_amount) ? $getBD->retirement_savings_amount : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Employer Contributions<span
                                                    class="float-end"><b>₹<?= isset($getBD->employer_contribution) ? $getBD->employer_contribution : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Age You Began Saving<span
                                                    class="float-end"><b>₹<?= isset($getBD->starting_age_for_saving) ? $getBD->starting_age_for_saving : '' ?></b></span>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                                <div class="col-lg-8">
                                    <div class="card border  mb-3" style="max-width: 25rem;">
                                        <div class="card-header"><b>Your Assets</b><span class="float-end"><i
                                                    class="fas fa-pen"></i></span></div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Checking & Savings <span
                                                    class="float-end"><b>₹<?= isset($getBD->bank_accounts_value) ? $getBD->bank_accounts_value : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Non-Retirement Investments<span
                                                    class="float-end"><b>₹<?= isset($getBD->investment_accounts_value) ? $getBD->investment_accounts_value : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Real Estate: Home<span
                                                    class="float-end"><b>₹<?= isset($getBD->home_value) ? $getBD->home_value : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Real Estate: Rental Properties<span
                                                    class="float-end"><b>₹<?= isset($getBD->rental_properties_value) ? $getBD->rental_properties_value : '' ?></b></span>
                                            </li>
                                            <!-- <li class="list-group-item">Real Estate: Other<span class="float-end">₹< ?=isset($getBD->starting_age_for_saving)?$getBD->starting_age_for_saving:''?></li> -->
                                            <li class="list-group-item">Motor Vehicles<span
                                                    class="float-end"><b>₹<?= isset($getBD->vehicles_value) ? $getBD->vehicles_value : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Other Assets<span
                                                    class="float-end"><b>₹<?= isset($getBD->other_assets_value) ? $getBD->other_assets_value : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Retirement Accounts<span
                                                    class="float-end"><b>₹<?= isset($getBD->retirement_savings_value) ? $getBD->retirement_savings_value : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Emergency Nest-Egg<span
                                                    class="float-end"><b>₹<?= isset($getBD->emergency_assets_value) ? $getBD->emergency_assets_value : '' ?></b></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="card border  mb-3" style="max-width: 25rem;">
                                        <div class="card-header"><b>Your Debt</b><span class="float-end"><i
                                                    class="fas fa-pen"></i></span></div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Mortgage & Home-Equity Loans<span
                                                    class="float-end"><b>₹<?= isset($getBD->mortgage_loans_value) ? $getBD->mortgage_loans_value : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Business Debt<span
                                                    class="float-end"><b>₹<?= isset($getBD->business_debt_value) ? $getBD->business_debt_value : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Vehicle LoansA third item<span
                                                    class="float-end">₹<?= isset($getBD->vehicle_loans_value) ? $getBD->vehicle_loans_value : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Credit Card Debt<span
                                                    class="float-end"><b>₹<?= isset($getBD->credit_card_debt_value) ? $getBD->credit_card_debt_value : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Student Loans<span
                                                    class="float-end"><b>₹<?= isset($getBD->student_debt_value) ? $getBD->student_debt_value : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Other Debt<span
                                                    class="float-end"><b>₹<?= isset($getBD->other_debts_value) ? $getBD->other_debts_value : '' ?></b></span>
                                            </li>
                                            <li class="list-group-item">Annual Debt Spending<span
                                                    class="float-end"><b>₹<?= isset($getBD->debt_payment_value) ? $getBD->debt_payment_value : '' ?></b></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="card border  mb-3" style="max-width: 25rem;">
                                        <div class="card-header"><b>Totals</b></div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Total Annual Spending
                                                <span class="float-end"><b>₹ 0</b></span>
                                            </li>
                                            <li class="list-group-item">Total Assets<span class="float-end"><b>₹
                                                        0</b></span></li>
                                            <li class="list-group-item">Unsecured Debt
                                                <span class="float-end"><b>₹
                                                        0</b></span>
                                            </li>
                                            <li class="list-group-item">Net Worth<span class="float-end"><b>₹
                                                        0</b></span></li>
                                        </ul>
                                    </div>
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

    <script src="<?= base_url() ?>front/js/echarts.min.js<?= ct() ?>"></script>
    <!--endbuild-->
    <script type="text/javascript">
    // Initialize the echarts instance based on the prepared dom
    var myChart = echarts.init(document.getElementById('gauge-chart'));

    // Specify the configuration items and data for the chart
    var option = {
        tooltip: {
            formatter: "{a} <br/>{b} : {c}%"
        },
        // toolbox: { feature: { restore: { title: "Refresh" }, saveAsImage: { title: "Download Image" } } },
        series: [{
            name: "Business indicator",
            type: "gauge",
            detail: {
                formatter: "{value}%"
            },
            axisLine: {
                lineStyle: {
                    color: [
                        [0.2, 'rgb(220, 53, 69)'],
                        [0.8, 'rgb(13, 107, 253)'],
                        [1, 'rgb(25, 135, 84)'],
                    ],
                    width: 20,
                },
            },
            data: [{
                value: <?= rand(10, 100) ?>,
                name: ""
            }],
        }, ],
    }

    // Display the chart using the configuration items and data just specified.
    myChart.setOption(option);
    </script>
</body>

</html>