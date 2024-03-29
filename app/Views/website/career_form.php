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
                  <div class="caption1 text-white">Apply For This Position</div>
                </div>
                <div class="text-nav"> 
                  <div class="heading3 text-white">Apply For This Position</div>
                  <div class="sub-heading mt-8 text-white fw-400">Explore our Contact Us page for prompt assistance from our dedicated team.</div>
                </div>
              </div>
            </div>
      <div class="form-contact style-one mt-100"> 
        <div class="container"> 
          <div class="row flex-center row-gap-32">
            <div class="col-12 col-xl-5">
              <div class="infor bg-blue bora-12 p-40 left-datails">
                <div class="heading5 text-white">Bid Manager/Pre-Sales Manager</div>
                <hr>
                <div class="text-button text-white">ID-AIS2023 <br>

Candidate Location-PAN India <br>

Company HQ- Durgapur, West Bengal <br>

Job Types:
Remote (Initially): For candidates staying out of Durgapur <br>

Work from Office: For candidates staying in the suburban areas of Durgapur

Job Description</div>
                <div class="body3 text-white mt-8 bid">As a Bid Manager you will need to create the solution and proposal ensuring compliance with customer requirements while highlighting company value proposition.</div>
                <div class="text-button text-white mt-20">Qualification & Desired Experience Range</div>
                <div class="body3 text-white mt-8 bid">1.)  Graduation in any field <br>

2.)  PGDM /MBA in Sales or marketing <br>

3.)  3 to 7 years of experience in BPO industry <br>

<b>Sales Cycle :</b> Operations and Consultancy
                </div>
                <div class="mt-40"></div>
                <div class="list-more-infor mt-40"> 
                  <div class="item flex-item-center gap-12 mt-20"><i class="ph-fill ph-check-circle fs-20 text-blue bg-white p-8 bora-50"></i>
                    <div class="line-y"> </div>
                    <div class="text-button text-white">Job Category : Bid Manager</div>
                  </div> 
                  <div class="item flex-item-center gap-12 mt-20"><i class="ph-fill ph-check-circle fs-20 text-blue bg-white p-8 bora-50"></i>
                    <div class="line-y"> </div>
                    <div class="text-button text-white">Job Type: Full Time</div>
                  </div>
                  <div class="item flex-item-center gap-12 mt-20"><i class="ph-fill ph-check-circle fs-20 text-blue bg-white p-8 bora-50"></i>
                    <div class="line-y"> </div>
                    <div class="text-button text-white">Job Location: DurgapurWest Bengal</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-6 pl-55">
              <div class="form-block flex-columns-between gap-20">
                <div class="heading">
                  <div class="heading5">Apply for this position</div>
                </div>
                </div>
                <div class="row row-gap-20 mt-20">
                  <div class="col-12 col-sm-12"> 
                    <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="text" placeholder="Name"/>
                  </div>
                  <div class="col-12 col-sm-12"> 
                    <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="text" placeholder="Email"/>
                  </div>
                  <div class="col-12 col-sm-12">
                    <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="text" placeholder="Phone no"/>
                  </div>
                  <div class="col-12 col-sm-4">
                    Upload CV/Resume *
                    <span class="types">Allowed: .pdf, .doc, .docx</span>
                  </div>
                  <div class="col-12 col-sm-8">
                    <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="file" placeholder="Phone no"/>
                  </div>
                  <div class="col-12"> 
                    <textarea class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8" name="message" cols="10" rows="4" placeholder="Your Message"></textarea>
                  </div>
                </div>
                <div class="button-block mt-20">
                   <button class="button-share hover-border-blue bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Submit request</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php echo view('component/front/footer'); ?>
    <!--build:js assets/js/main.min.js-->
    <?php echo view('component/front/script'); ?>
    <!--endbuild-->
    
</body>

</html>