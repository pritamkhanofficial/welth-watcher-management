 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title" key="t-menu">Menu</li>
                 <li>
                     <a href="<?=base_url('back-panel/dashboard')?>" class="waves-effect">
                         <i class="bx bx-home-circle"></i>
                         <span>Dashboard</span>
                     </a>
                 </li>
                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="bx bx-wrench"></i>
                         <span key="t-master">Master</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="<?=base_url('back-panel/news-category')?>" key="t-default">News Category</a></li>
                     </ul>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="<?=base_url('back-panel/state')?>" key="t-default">State</a></li>
                     </ul>
                 </li>
                 <!-- <li>
                <a href="< ?=base_url('back-panel/cryptocurrency-trading')?>" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                    <span >Cryptocurrency Trading</span>
                </a>
            </li> -->
                 <li>
                     <a href="<?=base_url('back-panel/core-need')?>" class="waves-effect">
                     <i class="fas fa-search-plus"></i>
                         <span>Core Need</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url('back-panel/news')?>" class="waves-effect">
                         <i class="fa fa-newspaper"></i>
                         <span>News</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url('back-panel/contact-list')?>" class="waves-effect">
                         <i class="fa fa-address-book"></i>
                         <span>Contact List</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url('back-panel/our-services')?>" class="waves-effect">
                         <i class="fas fa-cogs"></i>
                         <span>Our Services</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url('back-panel/partner')?>" class="waves-effect">
                         <i class="fas fa-users"></i>
                         <span>Partners</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url('back-panel/logout')?>" class="waves-effect">
                         <i class="bx bx-power-off"></i>
                         <span>Logout</span>
                     </a>
                 </li>
             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
 <!-- Left Sidebar End -->