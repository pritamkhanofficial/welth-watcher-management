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
              <div class="bg-img"> <img src="<?=base_url('front/')?>images/banner/contact.png" alt="banner"/></div>
              <div class="container"> 
                <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="index-2.html">Home</a><i class="ph ph-caret-double-right text-white"></i>
                  <div class="caption1 text-white">Career</div>
                </div>
                <div class="text-nav"> 
                  <div class="heading3 text-white">Career</div>
                  <div class="sub-heading mt-8 text-white fw-400">Explore our Contact Us page for prompt assistance from our dedicated team.</div>
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
                  <div class="body3 text-secondary mt-8">We will get back to you within 24 hours, or call us everyday</div>
                </div>
                <div class="row row-gap-20">
                  <div class="col-12 col-sm-3"> 
                    <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="search" placeholder="Search"/><i class="ph ph-magnifying-glass"></i>
                  </div>
                  <div class="col-12 col-sm-3"> 
                    <select class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8" name="categories">
                      <option value="">Financial Planning</option>
                      <option value="">Business Planning</option>
                      <option value="">Development Planning</option>
                    </select><i class="ph ph-caret-down"></i>
                  </div>
                  <div class="col-12 col-sm-3"> 
                    <select class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8" name="categories">
                      <option value="Financial Planning">Financial Planning</option>
                      <option value="Business Planning">Business Planning</option>
                      <option value="Development Planning">Development Planning</option>
                    </select><i class="ph ph-caret-down"></i>
                  </div>
                  <div class="col-12 col-sm-3"> 
                    <select class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8" name="categories">
                      <option value="Financial Planning">Financial Planning</option>
                      <option value="Business Planning">Business Planning</option>
                      <option value="Development Planning">Development Planning</option>
                    </select><i class="ph ph-caret-down"></i>
                  </div>
                </div>
                <!-- <div class="button-block">
                    <button class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Submit request</button>
                </div> -->
              </div>
            </div>
          </div>


          <div class="list-service row mt-40">
              <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px my-card"><a class="service-item-main flex-column gap-16" href="<?= base_url('career-form') ?>">
                            <div class="heading flex-between">
                              <div class="number heading3 text-placehover">01</div>
                            </div>
                            <div class="desc">
                              <div class="heading7 hover-text-blue">Job Title: Bid Manager/Pre-Sales Manager</div>
                              <div class="body3 text-secondary mt-4">Bid Manager <br> DurgapurWest Bengal
                            </div>
                            </div>
                            <div class="read-block flex-item-center gap-4 hover-text-blue"><span class="fs-14 fw-700 text-blue">Read More</span><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div></a>
                        </div>
              </div>
              <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px my-card"><a class="service-item-main flex-column gap-16" href="<?= base_url('career-form') ?>">
                            <div class="heading flex-between">
                              <div class="number heading3 text-placehover">02</div>
                            </div>
                            <div class="desc">
                              <div class="heading7 hover-text-blue">Job Title : Senior Website Designer</div>
                              <div class="body3 text-secondary mt-4">Website Designer <br> DurgapurWest Bengal</div>
                            </div>
                            <div class="read-block flex-item-center gap-4 hover-text-blue"><span class="fs-14 fw-700 text-blue">Read More</span><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div></a>
                        </div>
              </div>
              <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px my-card"><a class="service-item-main flex-column gap-16" href="<?= base_url('career-form') ?>">
                            <div class="heading flex-between">
                              <div class="number heading3 text-placehover">03</div>
                            </div>
                            <div class="desc">
                              <div class="heading7 hover-text-blue">Job Title : Graphic Designer and UI/UX Designer</div>
                              <div class="body3 text-secondary mt-4">UI/UX Designer <br>DurgapurWest Bengal</div>
                            </div>
                            <div class="read-block flex-item-center gap-4 hover-text-blue"><span class="fs-14 fw-700 text-blue">Read More</span><i class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div></a>
                        </div>
              </div>
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