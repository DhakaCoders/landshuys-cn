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
<?php 
  $telephone = get_field('telephone', 'options');
  $logoObj = get_field('hdlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
?> 
<div class="bdoverlay"></div>
<header class="header">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="hdr-lft">
              <?php if( !empty($logo_tag) ): ?>
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <?php endif; ?>
            </div>
            <div class="hdr-rgt">
 
              <div class="hdr-language fl-lang hide-md">
                <a href="#" target="_blank">Deutsch<span class="country-flag"><img src="<?php echo THEME_URI; ?>/assets/images/country-flag.png" alt=""></span></a>
              </div>

              <div class="hdr-menu hide-md">
                <nav class="main-nav">
                  <?php 
                    $menuOptions = array( 
                        'theme_location' => 'cbv_main_menu', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $menuOptions ); 
                  ?>
                </nav>
              </div>
              <?php if( !empty($telephone) ): ?>
              <div class="hdr-tel">
                <a href="tel:<?php echo phone_preg($telephone); ?>"><img src="<?php echo THEME_URI; ?>/assets/images/tel-icon.png" alt="telephone"></a> 
              </div>
            <?php endif; ?>
              <div class="hamburgar-cntlr">
                <span><?php _e('menu', 'landshuys'); ?></span>
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
      <?php 
        $mobilemenuOptions = array( 
            'theme_location' => 'cbv_mobile_main_menu', 
            'menu_class' => 'clearfix reset-list',
            'container' => '',
            'container_class' => ''
          );
        wp_nav_menu( $mobilemenuOptions ); 
      ?>
    </nav>
  </div>
</div>