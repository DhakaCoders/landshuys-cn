<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#f9ddaa">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="bdoverlay"></div>
<header class="header">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="hdr-lft">
              <div class="logo">
                <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/logo.png"></a>
              </div>
            </div>
            <div class="hdr-rgt">
 
              <div class="hdr-language fl-lang hide-md">
                <a href="#" target="_blank">Deutsch<span class="country-flag"><img src="<?php echo THEME_URI; ?>/assets/images/country-flag.png" alt=""></span></a>
              </div>

              <div class="hdr-menu hide-md">
                <nav class="main-nav">
                  <ul class="clearfix reset-list">
                    <li class="current-menu-item"><a href="#">Menukaarten</a></li>
                    <li class="menu-item-has-children">
                      <a href="#">Groepsarrangementen</a>
                      <ul class="sub-menu reset-list">
                        <li><a href="#">Grote Kaart</a></li>
                        <li><a href="#">Lunch en Dranken</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Restaurant</a></li>
                    <li><a href="#">Reserveren</a></li>
                    <li><a href="#">Contact</a></li> 
                  </ul>
                </nav>
              </div>
              <div class="hdr-tel">
                <a href="tel: +31(0) 599 354514"><img src="<?php echo THEME_URI; ?>/assets/images/tel-icon.png" alt=""></a>
              </div>
              <div class="hamburgar-cntlr">
                <span>menu</span>
                <div class="hamburgar-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</header>

<div class="xs-mobile-menu">
  <div class="hamburgar-cntlr hamburgar-cross">
    <img src="<?php echo THEME_URI; ?>/assets/images/cross-icon.png" alt="">
  </div>
  <div class="xs-menu">
    <nav class="main-nav">
      <ul class="clearfix reset-list">
        <li class="current-menu-item"><a href="#">Home</a></li>
        <li class="menu-item-has-children">
          <a href="#">Menukaarten</a>
          <ul class="sub-menu reset-list">
            <li><a href="#">Kleine kaart</a></li>
            <li><a href="#">Grote kaart</a></li>
          </ul>
        </li>
        <li><a href="#">Arrangementen</a></li>
        <li><a href="#">Restaurant</a></li>
        <li><a href="#">Reserveren</a></li>
        <li><a href="#">Contact</a></li> 
      </ul>
    </nav>
  </div>
</div>