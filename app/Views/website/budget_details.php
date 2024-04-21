<?php
// getPrint($budget);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('component/front/head');?>
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
                                    <div class="card border  mb-3" >
                                        <div class="card-header">Basics<span class="float-end"><a href="<?=base_url('budget-planning/0')?>"><i
                                                    class="fas fa-pen"></i></a></span></div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">An item <span class="float-end">₹ 454</span>
                                            </li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="card border  mb-3">
                                        <div class="card-header">Your Annual Income<span class="float-end"><i
                                                    class="fas fa-pen"></i></span></div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">An item <span class="float-end">₹ 454</span>
                                            </li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="card border  mb-3" >
                                        <div class="card-header">Your Annual Spending
                                            <span class="float-end"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">An item <span class="float-end">₹ 454</span>
                                            </li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="card border  mb-3" >
                                        <div class="card-header">Your Annual Retirement Contributions
                                            <span class="float-end"><i class="fas fa-pen"></i></span>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">An item <span class="float-end">₹ 454</span>
                                            </li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                    </div>


                                </div>
                                <div class="col-lg-8">
                                    <div class="card border  mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Your Assets <span class="float-end"><i
                                                    class="fas fa-pen"></i></span></div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">An item <span class="float-end">₹ 454</span>
                                            </li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="card border  mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Your Debt <span class="float-end"><i
                                                    class="fas fa-pen"></i></span></div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">An item <span class="float-end">₹ 454</span>
                                            </li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="card border  mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Totals</div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">An item <span class="float-end">₹ 454</span>
                                            </li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
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

    <script src="<?=base_url()?>front/js/echarts.min.js<?=ct()?>"></script>
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
                value: <?=rand(10,100)?>,
                name: ""
            }],
        }, ],
    }

    // Display the chart using the configuration items and data just specified.
    myChart.setOption(option);
    </script>
</body>

</html>