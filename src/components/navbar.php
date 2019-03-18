<header id="topnav" class="defaultscroll scroll-active">
  <div class="tagline">
  <div class="container">
  <div class="float-left">
    <div class="phone">
        <i class="mdi mdi-clock-outline text-custom mr-1"></i> Time : 24 hours- Monday To Friday
    </div>
  </div>
  <div class="float-right">
    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
        <li class="list-inline-item">
            <a href="javascript:void(0);">
                <i class="mdi mdi-phone mr-1 text-custom"></i>Call us : +(233) 509222963 | +(233) 509222941
            </a>
        </li>
        <li class="list-inline-item">
            <a href="javascript:void(0);">
                <i class="mdi mdi-email mr-1 text-custom"></i>Email : info@btlafrica.com
            </a>
        </li>
    </ul>
  </div>
  <div class="clearfix"></div>
  </div>
  </div>
  <div class="container">
  <!-- Logo container-->
  <div>
  <a href="<?php echo BASE_URL?>" class="logo">
  <img src="<?php echo BASE_URL?>src/assets/images/BTL_logo.png" alt="Logo">
  </a>
  </div>
  <!-- End Logo container-->
  <div class="menu-extras">

  <div class="menu-item">
    <!-- Mobile menu toggle-->
    <a class="navbar-toggle">
        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </a>
    <!-- End mobile menu toggle-->
  </div>
  </div>

  <div id="navigation">

  <!-- Navigation Menu-->
  <ul class="navigation-menu">

    <li class="has-submenu <?php echo getActiveRoute('home'); ?>">
        <a href="<?php echo BASE_URL?>" onclick="route('<?php echo BASE_URL?>')">Home</a>
    </li>
    <li class="has-submenu">
        <a href="#">The Company</a>
        <span class="menu-arrow"></span>
        <ul class="submenu">
            <li>
                <a href="<?php echo BASE_URL?>btl-africa" onclick="route('<?php echo BASE_URL?>btl-africa')">BTL Africa</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL?>btl-ghana" onclick="route('<?php echo BASE_URL?>btl-ghana')">BTL Ghana</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL?>btl-nigeria" onclick="route('<?php echo BASE_URL?>btl-nigeria')">BTL Nigeria</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL?>btl-liberia" onclick="route('<?php echo BASE_URL?>btl-liberia')">BTL Liberia</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL?>btl-kenya" onclick="route('<?php echo BASE_URL?>btl-kenya')">BTL Kenya</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL?>btl-sierra-leone" onclick="route('btl-sierra-leone')">BTL Sierra Leone</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL?>btl-plus" onclick="route('<?php echo BASE_URL?>btl-plus')">BTL Plus</a>
            </li>
        </ul>
    </li>
    <li class="has-submenu">
        <a href="<?php echo BASE_URL?>about-us" onclick="route('<?php echo BASE_URL?>about-us')">About</a>
    </li>
    <li class="has-submenu">
        <a href="<?php echo BASE_URL?>services" onclick="route('<?php echo BASE_URL?>services')">Service</a>
    </li>
    <li class="has-submenu ">
        <a href="<?php echo BASE_URL?>projects" onclick="route('<?php echo BASE_URL?>projects')">Gallery</a>
        <span class="menu-arrow"></span>
    </li>

    <li class="has-submenu ">
        <a href="<?php echo BASE_URL?>team" onclick="route('<?php echo BASE_URL?>team')">Team</a>
        <span class="menu-arrow"></span>
    </li>
    <li class="has-submenu ">
        <a href="<?php echo BASE_URL?>career" onclick="route('<?php echo BASE_URL?>career')">Career</a>
        <span class="menu-arrow"></span>
    </li>


    <li class="has-submenu">
        <a href="<?php echo BASE_URL?>contact-us" onclick="route('<?php echo BASE_URL?>contact-us')">contact</a>
    </li>
  </ul>
  <!-- End navigation menu-->
  </div>
  </div>
</header>