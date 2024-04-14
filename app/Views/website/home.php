<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('component/front/head'); ?>
</head>

<body>
    <?php echo view('component/front/header'); ?>
    <div class="slider-block01">
        <div class="slider-block style-two">
            <div class="slider-main">
                <div class="slider-item">
                    <div class="container">
                        <div class="text-content my-top-text flex-columns-between row-gap-40">
                            <div class="title">
                                <div class="heading2 animate__animated animate__fadeInUp animate__delay-0-2s">If you are
                                    <span class="casualabout">casual about<br> the market,</span> here<br>is what we
                                    have
                                    to say
                                </div>
                                <div
                                    class="body2 text-secondary mt-16 animate__animated animate__fadeInUp animate__delay-0-5s smoll-text">
                                    Get personalized financial advice to help reach your financial goals.</div>
                            </div>
                        </div>
                        <div class="slider-img animate__animated animate__fadeInRight animate__delay-0-2s">
                            <div class="bg-main">
                                <div class="form-block form-stock bora-16 bg-white p-28 flex-columns-between gap-20">
                                    <div class="heading6 free-apply">
                                        Join us in 15 mins**
                                        <div class="body2 text-secondary mt-2">Limited Period Offer</div>
                                    </div>

                                    <!-- <div class="button-block">
                                        <a href="< ?=base_url('register')?>"><button
                                                class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Register</button></a>
                                    </div> -->
                                    <div class="button-block">
                                        <?php if(!getFrontUserData()){ ?>
                                        <button
                                            class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48 regBtn"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Register</button>
                                        <button
                                            class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48 loginBtn"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login </button>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <img class="box-shadow" src="<?=base_url()?>front/images/slider/subslider2-1.png" alt="" />
                            <img class="box-shadow" src="<?=base_url()?>front/images/slider/subslider2-2.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--       <div class="style-two">
        <div class="partner-five-col style-one mt-100 bg-blue">
          <div class="list pt-32 pb-32">
            <div class="bg-img flex-center"><img class="w-100" src="<?=base_url()?>front/images/partner/Logo.png" alt=""/></div>
            <div class="bg-img flex-center"><img class="w-100" src="<?=base_url()?>front/images/partner/Logo-1.png" alt=""/></div>
            <div class="bg-img flex-center"><img class="w-100" src="<?=base_url()?>front/images/partner/Logo-2.png" alt=""/></div>
            <div class="bg-img flex-center"><img class="w-100" src="<?=base_url()?>front/images/partner/Logo-3.png" alt=""/></div>
            <div class="bg-img flex-center"><img class="w-100" src="<?=base_url()?>front/images/partner/Logo-4.png" alt=""/></div>
            <div class="bg-img flex-center"><img class="w-100" src="<?=base_url()?>front/images/partner/Logo-5.png" alt=""/></div>
            <div class="bg-img flex-center"><img class="w-100" src="<?=base_url()?>front/images/partner/Logo.png" alt=""/></div>
            <div class="bg-img flex-center"><img class="w-100" src="<?=base_url()?>front/images/partner/Logo-1.png" alt=""/></div>
            <div class="bg-img flex-center"><img class="w-100" src="<?=base_url()?>front/images/partner/Logo-2.png" alt=""/></div>
            <div class="bg-img flex-center"><img class="w-100" src="<?=base_url()?>front/images/partner/Logo-3.png" alt=""/></div>
            <div class="bg-img flex-center"><img class="w-100" src="<?=base_url()?>front/images/partner/Logo-4.png" alt=""/></div>
            <div class="bg-img flex-center"><img class="w-100" src="<?=base_url()?>front/images/partner/Logo-5.png" alt=""/></div>
          </div>
        </div>
      </div> -->
        <div class="about-home-five mt-100">
            <div class="container">
                <div class="row flex-between row-gap-32">
                    <div class="col-12 col-lg-7">
                        <div class="text-about">
                            <div class="heading3 mt-24">Designed for the serious, welcome to Wealth Watcher!</div>
                            <div class="body3 text-secondary mt-20">Ask any market veteran and you will know that
                                consistently making money from the markets is not easy at all. It requires a serious
                                approach that involves serious research, serious risk analysis and serious discipline.
                                Our full-service model, which consists of an expert Research team, experienced
                                Relationship Managers, wide network of branches, information packed trading & investing
                                platforms and education is designed to help you understand the required serious
                                approach. It also helps you get the power of our experience and expertise on your side
                            </div>
                        </div>
                        <div class="button-block mt-5">
                            <button
                                class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Serious
                                Approach - Investing</button>
                            <button
                                class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Serious
                                Approach - Trading</button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 col-md-8 col-sm-8">
                        <div class="bg-img w-100"><img class="w-100"
                                src="<?=base_url()?>front/images/component/about-home5.png" alt="" /></div>
                        <div class="sub-img"> <img src="<?=base_url()?>front/images/component/sub-about5-left.png"
                                alt="" /><img src="<?=base_url()?>front/images/component/sub-about5.png" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-block service-block-two mt-100">
            <div class="container">
                <div class="row row-gap-32">
                    <div class="col-12 col-xl-4 flex-column gap-16">
                        <div class="bg-img w-100"><img class="w-100"
                                src="<?=base_url()?>front/images/component/gateway2-bg.png" alt="" /></div>
                    </div>
                    <div class="col12 col-xl-8">
                        <div class="list-service pl-40">
                            <div class="row row-gap-32">
                                <div class="text-about">
                                    <div class="heading3 mt-24">For those serious about becoming "Wealth Watcher"</div>
                                    <div class="body3 text-secondary mt-20">The one thing required to become a "Market
                                        ka Watcher" is to constantly improve your knowledge and understanding about
                                        investing and trading. Education is a core pillar of how Sharekhan wants to help
                                        new comers and experienced customers both - so we offer zero cost & paid
                                        education modules to our customers.</div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6">
                                    <div class="service-item hover-box-shadow bora-8 p-24 bg-white box-shadow h-100"><a
                                            class="service-item-main flex-item-center gap-30"
                                            href="service-portfolio-management.html">
                                            <div class="heading"><i class="icon-coin-hand text-blue fs-48"></i></div>
                                            <div class="desc">
                                                <div class="heading7 hover-text-blue">Budget planning</div>
                                                <div class="body3 text-secondary mt-8">Get access to baseline learning
                                                    about the market, whether you want to trade, invest or do both!
                                                </div>
                                                <div class="explore-block flex-item-center gap-4 mt-8">
                                                    <div class="text-button-small text-blue">Explore Plan</div><i
                                                        class="ph-bold ph-caret-double-right fs-12 text-blue"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6">
                                    <div class="service-item hover-box-shadow bora-8 p-24 bg-white box-shadow h-100"><a
                                            class="service-item-main flex-item-center gap-30"
                                            href="service-detail.html">
                                            <div class="heading"><i class="icon-coin-pig text-blue fs-48"></i></div>
                                            <div class="desc">
                                                <div class="heading7 hover-text-blue">Savings advice</div>
                                                <div class="body3 text-secondary mt-8">Master the skills you need to
                                                    trade and invest with confidence, attend a Power Money Webinar (zero
                                                    cost)</div>
                                                <div class="explore-block flex-item-center gap-4 mt-8">
                                                    <div class="text-button-small text-blue">Explore Plan</div><i
                                                        class="ph-bold ph-caret-double-right fs-12 text-blue"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!empty($data['core_need'])){ ?>
        <div class="service-style-five mt-100">
            <div class="container">
                <div class="heading3 text-center">For Those Eager About Getting Services designed <br> to their Core Needs</div>
                <div class="body3 text-secondary text-center mt-20">Our years of experience has indicated that people
                    have different needs when they come to the markets. So to offer services focused on different needs we have different plans that one can refer to and avail of unique services.</div>
            </div>
            <div class="service-block mt-80">
                <div class="container">
                    <div class="list-service row mt-32 row-gap-32">
                        <?php
                      // getPrint($data);
                        foreach($data['core_need'] as $key=>$row):
                          $placehover = str_pad(++$key, 2, "0", STR_PAD_LEFT);
                      ?>
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a
                                    class="service-item-main flex-column gap-16"
                                    href="service-cryptocurrency-trading.html">
                                    <div class="heading flex-between"><i
                                            class="<?= $row->icon_text?> text-blue fs-60"></i>
                                        <div class="number heading3 text-placehover"><?= $placehover ?></div>
                                    </div>
                                    <div class="desc">
                                        <div class="heading7 hover-text-blue"><?= $row->title?></div>
                                        <div class="body3 text-secondary mt-4"><?= $row->description?></div>
                                    </div>
                                    <div class="read-block flex-item-center gap-4 hover-text-blue"><span
                                            class="fs-14 fw-700 text-blue">Read More</span><i
                                            class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($data['news'])){ ?>
        <div class="blog-list style-one mt-100">
            <div class="container">
                <div class="heading3 text-center">Latest News</div>
                <div class="row row-gap-32 mt-40">
                    <?php foreach($data['news'] as $key=>$row){?>
                    <div class="blog-item col-12 col-xl-4 col-sm-6" data-name=""><a class="blog-item-main" href="#">
                            <div class="bg-img w-100 overflow-hidden mb-minus-1"><img class="w-100 h-100 display-block"
                                    src="<?=base_url('get-file/' . $row->featured_image)?>"
                                    alt="CI Financial sells RIA stake in new expansion strategy" /></div>
                            <div class="infor bg-white p-24">
                                <div class="caption2 pt-4 pb-4 pl-12 pr-12 bg-surface bora-40 display-inline-block">
                                    <?= $row->label ?></div>
                                <div class="heading6 mt-8"><?= $row->title ?></div>
                                <div class="date flex-item-center gap-16 mt-8">
                                    <!-- <div class="item-date flex-item-center"><i
                                            class="ph-bold ph-calendar-blank"></i><span class="ml-4 caption2">
                                            <?=dateDiff($row->created_at)?> </span></div>
                                    <div class="author caption2 text-secondary">by <span
                                            class="text-on-surface"><?= $row->full_name ?></span></div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                    <!--  <div class="blog-item col-12 col-xl-4 col-sm-6" data-name=""><a class="blog-item-main"
                            href="blog-detail-two.html">
                            <div class="bg-img w-100 overflow-hidden mb-minus-1"><img class="w-100 h-100 display-block"
                                    src="<?=base_url()?>front/images/blog/item13.png"
                                    alt="Barred financial advisors charged in $72 million criminal" /></div>
                            <div class="infor bg-white p-24">
                                <div class="caption2 pt-4 pb-4 pl-12 pr-12 bg-surface bora-40 display-inline-block">
                                    Development</div>
                                <div class="heading6 mt-8">Barred financial advisors charged in $72 million criminal
                                </div>
                                <div class="date flex-item-center gap-16 mt-8">
                                    <div class="author caption2 text-secondary">by <span
                                            class="text-on-surface">Avitex</span></div>
                                    <div class="item-date flex-item-center"><i
                                            class="ph-bold ph-calendar-blank"></i><span class="ml-4 caption2">2 days
                                            ago</span></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="blog-item col-12 col-xl-4 col-sm-6" data-name=""><a class="blog-item-main"
                            href="blog-detail-two.html">
                            <div class="bg-img w-100 overflow-hidden mb-minus-1"><img class="w-100 h-100 display-block"
                                    src="<?=base_url()?>front/images/blog/item12.png"
                                    alt="Retirement Planning Strategies" /></div>
                            <div class="infor bg-white p-24">
                                <div class="caption2 pt-4 pb-4 pl-12 pr-12 bg-surface bora-40 display-inline-block">
                                    Design</div>
                                <div class="heading6 mt-8">Retirement Planning Strategies</div>
                                <div class="date flex-item-center gap-16 mt-8">
                                    <div class="author caption2 text-secondary">by <span
                                            class="text-on-surface">Avitex</span></div>
                                    <div class="item-date flex-item-center"><i
                                            class="ph-bold ph-calendar-blank"></i><span class="ml-4 caption2">2 days
                                            ago</span></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="blog-item col-12 col-xl-4 col-sm-6 display-none col-lg-show" data-name=""><a
                            class="blog-item-main" href="blog-detail-two.html">
                            <div class="bg-img w-100 overflow-hidden mb-minus-1"><img class="w-100 h-100 display-block"
                                    src="<?=base_url()?>front/images/blog/item10.png" alt="Helping a local business" />
                            </div>
                            <div class="infor bg-white p-24">
                                <div class="caption2 pt-4 pb-4 pl-12 pr-12 bg-surface bora-40 display-inline-block">
                                    Makerting</div>
                                <div class="heading6 mt-8">Helping a local business</div>
                                <div class="date flex-item-center gap-16 mt-8">
                                    <div class="author caption2 text-secondary">by <span
                                            class="text-on-surface">Avitex</span></div>
                                    <div class="item-date flex-item-center"><i
                                            class="ph-bold ph-calendar-blank"></i><span class="ml-4 caption2">3 days
                                            ago</span></div>
                                </div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="pb-100"></div>
    </div>


    <?php echo view('component/front/footer'); ?>
    <!--build:js assets/js/main.min.js-->
    <?php echo view('component/front/script'); ?>
    <!--endbuild-->

</body>

</html>