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
                                    <span class="casualabout">casualabout<br> the market,</span> here<br>is what we have
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
                                        OPEN FREE* DEMAT AND TRADING ACCOUNT IN 15 MIN**
                                        <div class="body2 text-secondary mt-2">Limited Period Offer</div>
                                    </div>

                                    <div class="button-block">
                                        <button
                                            class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Register</button>
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

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Registration Hare</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-3">
                        <div class="row row-gap-20">
                            <div class="col-12 col-sm-12 col-lg-6">
                                <input class="w-100 bg-surface caption1 pl-16 pr-16 pt-12 pb-12 bora-48" type="text"
                                    placeholder="Name" />
                            </div>
                            <div class="col-12 col-sm-12 col-lg-6">
                                <input class="w-100 bg-surface caption1 pl-16 pr-16 pt-12 pb-12 bora-48" type="text"
                                    placeholder="Name" />
                            </div>
                            <div class="col-12 col-sm-12 col-lg-12">
                                <input class="w-100 bg-surface caption1 pl-16 pr-16 pt-12 pb-12 bora-48" type="text"
                                    placeholder="Name" />
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Submit</button>
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
                        <div class="bg-img w-100"><img class="w-100" src="<?=base_url()?>front/images/component/about-home5.png"
                                alt="" /></div>
                        <div class="sub-img"> <img src="<?=base_url()?>front/images/component/sub-about5-left.png" alt="" /><img
                                src="<?=base_url()?>front/images/component/sub-about5.png" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="style-two">
        <div class="count-number-block">
          <div class="container"> 
            <div class="row row-gap-32">
              <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 flex-columns-center">
                <div class="count-block flex-item-center">
                  <div class="counter heading3">2.3</div><span class="heading3">k</span>
                </div>
                <div class="body1 text-secondary">Business Setup Growth</div>
              </div>
              <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 flex-columns-center">
                <div class="count-block flex-item-center">
                  <div class="counter heading3">1.77</div><span class="heading3">k</span>
                </div>
                <div class="body1 text-secondary">Business Problem Solving</div>
              </div>
              <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 flex-columns-center">
                <div class="count-block flex-item-center">
                  <div class="counter heading3">298</div><span class="heading3">k</span>
                </div>
                <div class="body1 text-secondary">Goal achiever</div>
              </div>
              <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 flex-columns-center">
                <div class="count-block flex-item-center">
                  <div class="counter heading3">246</div><span class="heading3">k</span>
                </div>
                <div class="body1 text-secondary">Passive income earners</div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
        <!--  <div class="our-project-block mt-100"> 
        <div class="container">
          <div class="heading3 text-center">Our Projects</div>
          <div class="body2 text-secondary mt-12 text-center">Find your favourite jobs and get the benefits of yourself</div>
        </div>
        <div class="list-project mt-40"> 
          <div class="row"> 
            <div class="col-12 col-xl-3 col-md-4 col-sm-6"> 
              <div class="item">
                <div class="bg-img overflow-hidden"><img class="w-100 h-100" src="<?=base_url()?>front/images/component/Project.png" alt=""/></div><a class="text" href="case-studies-detail.html"> 
                  <div class="heading5 text-white">Financial assessment</div>
                  <div class="body3 text-white mt-4">Budget Planning</div></a><a class="arrow bg-white bora-50" href="case-studies-detail.html"><i class="ph ph-arrow-right fs-28 p-12"></i></a>
              </div>
            </div>
            <div class="col-12 col-xl-3 col-md-4 col-sm-6"> 
              <div class="item">
                <div class="bg-img overflow-hidden"><img class="w-100 h-100" src="<?=base_url()?>front/images/component/Project-1.png" alt=""/></div><a class="text" href="case-studies-detail.html">
                  <div class="heading5 text-white">Budget Planning</div>
                  <div class="body3 text-white mt-4">Financial Advice</div></a><a class="arrow bg-white bora-50" href="case-studies-detail.html"><i class="ph ph-arrow-right fs-28 p-12"></i></a>
              </div>
            </div>
            <div class="col-12 col-xl-3 col-md-4 col-sm-6"> 
              <div class="item">
                <div class="bg-img overflow-hidden"><img class="w-100 h-100" src="<?=base_url()?>front/images/component/Project-2.png" alt=""/></div><a class="text" href="case-studies-detail.html">
                  <div class="heading5 text-white">Insurance advice</div>
                  <div class="body3 text-white mt-4">Financial Planning</div></a><a class="arrow bg-white bora-50" href="case-studies-detail.html"><i class="ph ph-arrow-right fs-28 p-12"></i></a>
              </div>
            </div>
            <div class="col-12 col-xl-3 col-md-4 col-sm-6"> 
              <div class="item">
                <div class="bg-img overflow-hidden"><img class="w-100 h-100" src="<?=base_url()?>front/images/component/Project-3.png" alt=""/></div><a class="text" href="case-studies-detail.html">
                  <div class="heading5 text-white">Savings advice</div>
                  <div class="body3 text-white mt-4">Business Planning</div></a><a class="arrow bg-white bora-50" href="case-studies-detail.html"><i class="ph ph-arrow-right fs-28 p-12"></i></a>
              </div>
            </div>
            <div class="col-12 col-xl-3 col-md-4 col-sm-6"> 
              <div class="item">
                <div class="bg-img overflow-hidden"><img class="w-100 h-100" src="<?=base_url()?>front/images/component/Project-4.png" alt=""/></div><a class="text" href="case-studies-detail.html">
                  <div class="heading5 text-white">Portfolio Management</div>
                  <div class="body3 text-white mt-4">Manage Account Infor</div></a><a class="arrow bg-white bora-50" href="case-studies-detail.html"><i class="ph ph-arrow-right fs-28 p-12"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
        <div class="service-block service-block-two mt-100">
            <div class="container">
                <div class="row row-gap-32">
                    <div class="col-12 col-xl-4 flex-column gap-16">
                        <div class="bg-img w-100"><img class="w-100" src="<?=base_url()?>front/images/component/gateway2-bg.png"
                                alt="" /></div>
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

        <!--         <div class="about-home-five mt-100">
        <div class="container"> 
          <div class="row flex-between row-gap-32">
            <div class="col-12 col-lg-7"> 
              <div class="text-about">
                <div class="heading3 mt-24">For those serious about Options trading</div>
                <div class="body3 text-secondary mt-20">As per a recent SEBI study @, 9 out of 10 individual traders in equity F&O segment incurred an average loss of ₹ 1.1 lakh during FY 2022. Most of them were operating in the Options segment. Our 23+ years of experience seeing different market cycles is what gives us the confidence to effectively guide our customers and their hard earned savings going into Options trading</div>
              </div>
              <div class="button-block mt-5"> 
                <button class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Serious Approach - Investing</button>
                <button class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Serious Approach - Trading</button>
              </div>
            </div>
            <div class="col-12 col-lg-5 col-md-8 col-sm-8">
              <div class="bg-img w-100"><img class="w-100" src="<?=base_url()?>front/images/banner/project-below-home5.png" alt=""/></div>
            </div>
          </div>
        </div>
      </div> -->

        <!-- <div class="service-style-five mt-100">
            <div class="container">
                <div class="heading3 text-center">Services that Empower Your <br>Cryptocurrency Trading</div>
                <div class="body3 text-secondary text-center mt-20">We offer free research recommendations across mutual
                    funds, long term investing and technical analysis for trading.
                    We also offer free research coverage across all segments – Equity, Futures & Options, Currency and
                    Commodity.
                    But before you look at our recommendations it’s important for you to understand how our research
                    calls are derived.</div>
            </div>
            <div class="service-block mt-80">
                <div class="container">
                    <div class="list-service row mt-32 row-gap-32">
                        <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a
                                    class="service-item-main flex-column gap-16"
                                    href="service-cryptocurrency-trading.html">
                                    <div class="heading flex-between"><i class="icon-coin-chair text-blue fs-60"></i>
                                        <div class="number heading3 text-placehover">01</div>
                                    </div>
                                    <div class="desc">
                                        <div class="heading7 hover-text-blue">3R Research Philosophy</div>
                                        <div class="body3 text-secondary mt-4">Long term investing</div>
                                    </div>
                                    <div class="read-block flex-item-center gap-4 hover-text-blue"><span
                                            class="fs-14 fw-700 text-blue">Read More</span><i
                                            class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a
                                    class="service-item-main flex-column gap-16"
                                    href="service-portfolio-management.html">
                                    <div class="heading flex-between"><i class="icon-hand-tick text-blue fs-60"></i>
                                        <div class="number heading3 text-placehover">02</div>
                                    </div>
                                    <div class="desc">
                                        <div class="heading7 hover-text-blue">POP Research Philosophy</div>
                                        <div class="body3 text-secondary mt-4">Technical research philosophy</div>
                                    </div>
                                    <div class="read-block flex-item-center gap-4 hover-text-blue"><span
                                            class="fs-14 fw-700 text-blue">Read More</span><i
                                            class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a
                                    class="service-item-main flex-column gap-16" href="service-investment-advice.html">
                                    <div class="heading flex-between"><i class="icon-hand-house text-blue fs-60"></i>
                                        <div class="number heading3 text-placehover">03</div>
                                    </div>
                                    <div class="desc">
                                        <div class="heading7 hover-text-blue">Q-Square Research</div>
                                        <div class="body3 text-secondary mt-4">Mutual Funds research philosophy.</div>
                                    </div>
                                    <div class="read-block flex-item-center gap-4 hover-text-blue"><span
                                            class="fs-14 fw-700 text-blue">Read More</span><i
                                            class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="testimonials-block style-two mt-100">
        <div class="container">
          <div class="list-comment bg-surface bora-40 pt-80 pb-80 text-center">
            <div class="comment-item row flex-columns-item-center">
              <div class="heading3 col-8">Trusted By Professionals</div>
              <div class="content mt-40 col-8">"Working with this agency has been a game-changer for our business. Their team is knowledgeable, responsive, and always goes the extra mile."</div>
              <div class="text-button mt-20 col-8">maverick Nguyen // Ex-CTO, Dropbox</div>
            </div>
            <div class="comment-item row flex-columns-item-center">
              <div class="heading3 col-8">Trusted By Professionals</div>
              <div class="content mt-40 col-8">"I'm extremely satisfied with your services! Your meticulous financial planning helped me manage my assets efficiently and achieve my financial goals."</div>
              <div class="text-button mt-20 col-8">Luis Garcia // Leading Design, Avitex</div>
            </div>
            <div class="comment-item row flex-columns-item-center">
              <div class="heading3 col-8">Trusted By Professionals</div>
              <div class="content mt-40 col-8">"Your personalized approach and care have improved my financial planning. I highly value your services and attention to detail in crafting financial plans."</div>
              <div class="text-button mt-20 col-8">Christina Ha // CEO, LeoTech</div>
            </div>
          </div>
        </div>
      </div> -->
        <!--  <div class="form-cta-block benefit-two mt-100">
        <div class="bg-img"> <img src="<?=base_url()?>front/images/banner/form-benefit-two.png" alt=""/></div>
        <div class="container h-100">
          <div class="row flex-between h-100 row-gap-20">
            <div class="col-12 col-xl-5 col-lg-6">
              <div class="heading3 text-white">Unlock financial potential with expert guidance. Plan for a secure future.</div>
              <div class="body1 text-line mt-16">Schedule a consultation now to be sure of the plan</div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-block bora-16 bg-white p-28 flex-columns-between gap-20">
                <div class="heading6">request a call back</div>
                <div class="row row-gap-20">
                  <div class="col-12 col-sm-6"> 
                    <input class="w-100 bg-surface caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="text" placeholder="Name"/>
                  </div>
                  <div class="col-12 col-sm-6"> 
                    <input class="w-100 bg-surface caption1 pl-16 pr-16 pt-12 pb-12 bora-8" type="text" placeholder="Email"/>
                  </div>
                  <div class="col-12"> 
                    <select class="w-100 bg-surface caption1 pl-12 pt-12 pb-12 bora-8" name="categories">
                      <option value="Financial Planning">Financial Planning</option>
                      <option value="Business Planning">Business Planning</option>
                      <option value="Development Planning">Development Planning</option>
                    </select><i class="ph ph-caret-down"></i>
                  </div>
                  <div class="col-12"> 
                    <textarea class="w-100 bg-surface caption1 pl-16 pr-16 pt-12 pb-12 bora-8" name="messsage" cols="10" rows="4" placeholder="Your Message"></textarea>
                  </div>
                </div>
                <div class="button-block"> 
                        <button class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Send Message</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
        <div class="service-style-five mt-100">
            <div class="container">
                <div class="heading3 text-center">For those serious about getting services <br>designed for their core
                    needs</div>
                <div class="body3 text-secondary text-center mt-20">Our years of experience has indicated that people
                    have different needs when they come to the markets. So to offer services focused on different needs
                    we have different segments that one can belong to and avail of unique services.</div>
            </div>
            <div class="service-block mt-80">
                <div class="container">
                    <div class="list-service row mt-32 row-gap-32">
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a
                                    class="service-item-main flex-column gap-16"
                                    href="service-cryptocurrency-trading.html">
                                    <div class="heading flex-between"><i class="icon-coin-chair text-blue fs-60"></i>
                                        <div class="number heading3 text-placehover">01</div>
                                    </div>
                                    <div class="desc">
                                        <div class="heading7 hover-text-blue">3R Research Philosophy</div>
                                        <div class="body3 text-secondary mt-4">Long term investing</div>
                                    </div>
                                    <div class="read-block flex-item-center gap-4 hover-text-blue"><span
                                            class="fs-14 fw-700 text-blue">Read More</span><i
                                            class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a
                                    class="service-item-main flex-column gap-16"
                                    href="service-portfolio-management.html">
                                    <div class="heading flex-between"><i class="icon-hand-tick text-blue fs-60"></i>
                                        <div class="number heading3 text-placehover">02</div>
                                    </div>
                                    <div class="desc">
                                        <div class="heading7 hover-text-blue">POP Research Philosophy</div>
                                        <div class="body3 text-secondary mt-4">Technical research philosophy</div>
                                    </div>
                                    <div class="read-block flex-item-center gap-4 hover-text-blue"><span
                                            class="fs-14 fw-700 text-blue">Read More</span><i
                                            class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-xl- col-lg-6 col-md-6 col-sm-6">
                            <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a
                                    class="service-item-main flex-column gap-16" href="service-investment-advice.html">
                                    <div class="heading flex-between"><i class="icon-hand-house text-blue fs-60"></i>
                                        <div class="number heading3 text-placehover">03</div>
                                    </div>
                                    <div class="desc">
                                        <div class="heading7 hover-text-blue">Q-Square Research</div>
                                        <div class="body3 text-secondary mt-4">Mutual Funds research philosophy.</div>
                                    </div>
                                    <div class="read-block flex-item-center gap-4 hover-text-blue"><span
                                            class="fs-14 fw-700 text-blue">Read More</span><i
                                            class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-xl- col-lg-6 col-md-6 col-sm-6">
                            <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px"><a
                                    class="service-item-main flex-column gap-16" href="service-investment-advice.html">
                                    <div class="heading flex-between"><i class="icon-hand-house text-blue fs-60"></i>
                                        <div class="number heading3 text-placehover">03</div>
                                    </div>
                                    <div class="desc">
                                        <div class="heading7 hover-text-blue">Q-Square Research</div>
                                        <div class="body3 text-secondary mt-4">Mutual Funds research philosophy.</div>
                                    </div>
                                    <div class="read-block flex-item-center gap-4 hover-text-blue"><span
                                            class="fs-14 fw-700 text-blue">Read More</span><i
                                            class="ph-bold ph-caret-double-right fs-12 text-blue"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-list style-one mt-100">
            <div class="container">
                <div class="heading3 text-center">Latest News</div>
                <div class="row row-gap-32 mt-40">
                    <div class="blog-item col-12 col-xl-4 col-sm-6" data-name=""><a class="blog-item-main"
                            href="blog-detail-two.html">
                            <div class="bg-img w-100 overflow-hidden mb-minus-1"><img class="w-100 h-100 display-block"
                                    src="<?=base_url()?>front/images/blog/item11.png"
                                    alt="CI Financial sells RIA stake in new expansion strategy" /></div>
                            <div class="infor bg-white p-24">
                                <div class="caption2 pt-4 pb-4 pl-12 pr-12 bg-surface bora-40 display-inline-block">
                                    Makerting</div>
                                <div class="heading6 mt-8">CI Financial sells RIA stake in new expansion strategy</div>
                                <div class="date flex-item-center gap-16 mt-8">
                                    <div class="author caption2 text-secondary">by <span
                                            class="text-on-surface">Avitex</span></div>
                                    <div class="item-date flex-item-center"><i
                                            class="ph-bold ph-calendar-blank"></i><span class="ml-4 caption2">1 days
                                            ago</span></div>
                                </div>
                            </div>
                        </a></div>
                    <div class="blog-item col-12 col-xl-4 col-sm-6" data-name=""><a class="blog-item-main"
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
                        </a></div>
                    <div class="blog-item col-12 col-xl-4 col-sm-6" data-name=""><a class="blog-item-main"
                            href="blog-detail-two.html">
                            <div class="bg-img w-100 overflow-hidden mb-minus-1"><img class="w-100 h-100 display-block"
                                    src="<?=base_url()?>front/images/blog/item12.png" alt="Retirement Planning Strategies" /></div>
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
                        </a></div>
                    <div class="blog-item col-12 col-xl-4 col-sm-6 display-none col-lg-show" data-name=""><a
                            class="blog-item-main" href="blog-detail-two.html">
                            <div class="bg-img w-100 overflow-hidden mb-minus-1"><img class="w-100 h-100 display-block"
                                    src="<?=base_url()?>front/images/blog/item10.png" alt="Helping a local business" /></div>
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
                        </a></div>
                </div>
            </div>
        </div><a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
        <div class="pb-100"></div>
    </div>
    <?php echo view('component/front/footer'); ?>
    <!--build:js assets/js/main.min.js-->
    <?php echo view('component/front/script'); ?>
    <!--endbuild-->
</body>

</html>