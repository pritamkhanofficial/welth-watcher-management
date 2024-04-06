<?php 
// getPrint($data['job_cat']);
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
            <div class="bg-img"> <img src="<?=base_url('front/')?>images/banner/contact.png" alt="banner" /></div>
            <div class="container">
                <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white"
                        href="<?= base_url('/') ?>">Home</a><i class="ph ph-caret-double-right text-white"></i>
                    <div class="caption1 text-white">Career</div>
                </div>
                <div class="text-nav">
                    <div class="heading3 text-white">Career</div>
                    <div class="sub-heading mt-8 text-white fw-400">Explore our Contact Us page for prompt assistance
                        from our dedicated team.</div>
                </div>
            </div>
        </div>
        <div class="form-contact style-one mt-100">
            <div class="container">
                <div class="row flex-center row-gap-32">
                    <div class="col-12 col-xl-12">
                        <div class="form-block flex-columns-between gap-20">
                            <div class="heading">
                                <div class="heading5">Job Openings</div>
                                <div class="body3 text-secondary mt-8">We will get back to you within 24 hours, or call
                                    us everyday</div>
                            </div>
                            <div class="row row-gap-20">
                                <div class="col-12 col-sm-4">
                                    <input
                                        class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                        type="text" id="search" onblur="search()" placeholder="Search" /><i class="ph ph-magnifying-glass" onclick="search()"></i>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <select class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                        id="job_category" onchange="search()">
                                        <option value="" selected>Select</option>
                                        <?php foreach($data['job_cat'] as $job_cat){?>
                                        <option value="<?= $job_cat->id?>"><?= $job_cat->label?></option>
                                        <?php } ?>
                                    </select><i class="ph ph-caret-down"></i>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <select class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8" onchange="search()"
                                        id="job_type">
                                        <option value="">Select</option>
                                        <option value="FULL">Full Time</option>
                                        <option value="PART">Part Time</option>
                                    </select><i class="ph ph-caret-down"></i>
                                </div>
                            </div>
                            <!-- <div class="button-block">
                    <button class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Submit request</button>
                </div> -->
                        </div>
                    </div>
                </div>


                <div class="list-service row mt-40" id="job_list">
                </div>
            </div>
        </div><a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
        <div class="pb-100"></div>
    </div>
    <?php echo view('component/front/footer'); ?>
    <!--build:js assets/js/main.min.js-->
    <?php echo view('component/front/script'); ?>
    <!--endbuild-->
    <script>
    $(document).ready(function() {
        $.ajax({
            url: "<?=base_url('get-all-job')?>",
            type: "POST",
            success: function(response) {
                // You will get response from your PHP page (what you echo or print)
                console.log(response);
                $("#job_list").html(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });

    function search(){
        var job_category = $("#job_category").val();
        var job_type = $("#job_type").val();
        var search = $("#search").val();
        $.ajax({
            url: "<?=base_url('get-all-job')?>",
            type: "POST",
            data:{job_category:job_category,job_type:job_type,search:search},
            success: function(response) {
                // You will get response from your PHP page (what you echo or print)
                console.log(response);
                $("#job_list").html(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }

    
    </script>
</body>

</html>