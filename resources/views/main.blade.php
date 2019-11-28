
<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="/js/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="images/favicon.bmp" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7COswald:300,400,500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <a class="rd-navbar-brand" href="{{ asset('/') }}">
                    <img src="images/logo.png" alt="" width="202" height="22"/></a>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item {{ ($page=='start') ? ' active ' : '' }}">
                        <a class="rd-nav-link" href="{{ asset('/') }}">Главная</a>
                      </li>
                      <li class="rd-nav-item">
                        <a class="rd-nav-link" href="{{ asset('/#hobby') }}">Мои хобби</a>
                      </li>
                      <li class="rd-nav-item {{ ($page=='parent') ? ' active ' : '' }}">
                        <a class="rd-nav-link" href="{{ asset('/parents') }}">Родителям</a>
                      </li>

                      <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu {{ ($page=='teacher') ? ' active ' : '' }}">
                        <a class="rd-nav-link" href="#">Педагогам</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item">
                            <a class="rd-dropdown-link" href="{{ asset('/consultation') }}">Консультация</a>
                          </li>
                          <li class="rd-dropdown-item">
                            <a class="rd-dropdown-link" href="{{ asset('/projects') }}">Проекты</a>
                          </li>
                        </ul>
                      </li>

                      <li class="rd-nav-item {{ ($page=='gallery') ? ' active ' : '' }}">
                        <a class="rd-nav-link" href="{{ asset('/gallery') }}">Галерея</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

      @section('content')
      @show



      <!-- Page Footer-->
      <footer class="section footer-minimal bg-gray-800">
        <div class="container"> 
          <div class="footer-minimal-inner">
            <a class="brand" href="index.html">
              <img src="images/logo.png" alt="" width="202" height="32" srcset="images/logo.png 2x"/></a>
            <!-- Rights-->
            <p class="rights"><span>&copy;&nbsp;</span>
              <span class="copyright-year"></span>
              <span>&nbsp;</span><span>Все права защищены</span>
          </div>
        </div>
      </footer>
    </div>
    <div class="preloader"> 
      <div class="preloader-logo">
        <img src="images/logo-black.png" alt="" width="202" height="32" srcset="images/logo-black.png 2x"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
	
  </body><!-- Google Tag Manager -->
</html>