<?php 
// getPrint($data['state']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('component/front/head'); ?>

    <style>
    .spinner-border {
        width: 1rem;
        height: 1rem;
    }
    </style>
</head>

<body>
    <?php echo view('component/front/header'); ?>
    <div id="content">
        <div class="slider-sub ">
            <div class="bg-img"> <img src="<?=base_url()?>front/images/banner/contact.png" alt="banner" /></div>
            <div class="container">
                <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white"
                        href="<?= base_url('/') ?>">Home</a><i class="ph ph-caret-double-right text-white"></i>
                    <div class="caption1 text-white">Terms Of Service</div>
                </div>
                <div class="text-nav">
                    <div class="heading3 text-white">Terms Of Service</div>
                    <!-- <div class="sub-heading mt-8 text-white fw-400">Explore our Contact Us page for prompt assistance
                        from our
                        dedicated team.</div> -->
                </div>
            </div>
        </div>
        <div class="form-contact style-one mt-100">
            <div class="container">
                <div class="row flex-center row-gap-32">
                    <div class="col-12 col-xl-10 col-lg-12">
                        <?=getGlobalSetting()?->terms_of_service?>
                    </div>

                </div>
            </div>

            <div class="pb-100"></div>
        </div>
        <?php echo view('component/front/footer'); ?>
        <!--build:js assets/js/main.min.js-->
        <?php echo view('component/front/script'); ?>
        <!--endbuild-->
</body>

</html>