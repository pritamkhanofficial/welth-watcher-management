<div id="header">

    <div class="style-subpage style-home-two">
        <div class="header-menu style-one bg-white">
            <div class="container flex-between h-80"><a class="menu-left-block" href="#">
                    <img class="menu-logo" src="<?= base_url() ?>front/images/Logo.png" alt="logo" />
                    <!-- <img class="menu-logo display-none" src="assets/images/Logo.png" alt="logo"/> -->
                </a>
                <div class="menu-center-block h-100">
                    <ul class="menu-nav flex-item-center h-100">
                        <li class="nav-item h-100 flex-center home active"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
                        <li class="nav-item h-100 flex-center home "><a class="nav-link" href="<?= base_url('/about') ?>">About
                                Us</a></li>
                        <li class="nav-item h-100 flex-center home "><a class="nav-link" href="<?= base_url('report') ?>">Report Analysis</a></li>
                        <li class="nav-item h-100 flex-center home "><a class="nav-link" href="<?= base_url('career') ?>">Careers</a>
                        </li>
                        <li class="nav-item h-100 flex-center home "><a class="nav-link" href="<?= base_url('/contact') ?>">Contact
                                Us</a></li>
                    </ul>
                </div>
                <div class="menu-right-block flex-item-center gap-12">
                    <div class="text-button-small display-none">Follow Us</div>
                    <div class="list-social flex-item-center gap-10 style-two"><a
                            class="item bora-50 w-28 h-28 border-grey-1px flex-center"
                            href="<?=getGlobalSetting()?->facebook_url?>" target="_blank"><i
                                class="icon-facebook fs-12 icon-on-surface"></i></a><a
                            class="item bora-50 w-28 h-28 border-grey-1px flex-center"
                            href="<?=getGlobalSetting()?->linkedin_url?>" target="_blank"><i
                                class="icon-in fs-12 icon-on-surface ml-2"></i></a><a
                            class="item bora-50 w-28 h-28 border-grey-1px flex-center"
                            href="<?=getGlobalSetting()?->twitter_url?>" target="_blank"><i
                                class="icon-twitter fs-10 icon-on-surface"></i></a><a
                            class="item bora-50 w-28 h-28 border-grey-1px flex-center"
                            href="<?=getGlobalSetting()?->instagram_url?>" target="_blank"><i
                                class="icon-insta fs-10 icon-on-surface"></i></a><a
                            class="item bora-50 w-28 h-28 border-grey-1px flex-center"
                            href="<?=getGlobalSetting()?->youtube_url?>" target="_blank"><i
                                class="icon-youtube fs-10 icon-on-surface"></i></a></div>
                    <?php if(getFrontUserData()){ ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?=base_url('back/')?>/images/default.png" class="img-fluid man-icon">
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?=getFrontUserData()->full_name?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?=base_url('profile')?>"><i class="fas fa-user"></i> &nbsp; Profile</a>
                            </li>
                            <!-- <li><a class="dropdown-item" href="#"><i class="fas fa-lock-open"></i> &nbsp; Another
                                    action</a>
                            </li> -->
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item log-out" href="<?=base_url('logout')?>"><i
                                        class="fas fa-power-off"></i> &nbsp;
                                    Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <?php } ?>
                    <div class="menu-humburger display-none pointer"><i class="ph-bold ph-list"></i></div>
                </div>
            </div>
            <div id="menu-mobile-block">
                <div class="menu-mobile-main">
                    <div class="container">
                        <ul class="menu-nav-mobile h-100 pt-4 pb-4">
                            <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home active">
                                <a class="fs-14 nav-link-mobile" href="<?= base_url('/') ?>">Home </a>
                            <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home active">
                                <a class="fs-14 nav-link-mobile" href="<?= base_url('/about') ?>">About Us </a>
                            </li>
                            <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home active">
                                <a class="fs-14 nav-link-mobile" href="<?= base_url('report') ?>">Report Analysis</a>
                            </li>
                            <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home active">
                                <a class="fs-14 nav-link-mobile" href="<?= base_url('career') ?>">Carrier</a>
                            </li>
                            <li class="nav-item-mobile h-100 flex-column gap-8 pt-8 pb-8 pl-12 pr-12 pointer home active">
                                <a class="fs-14 nav-link-mobile" href="<?= base_url('/contact') ?>">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>