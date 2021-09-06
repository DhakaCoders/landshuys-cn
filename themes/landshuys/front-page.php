<?php get_header(); ?>
<!-- start of shariful -->
<?php  
  $hbanner = get_field('banner', HOMEID);
  if($hbanner):
    $banner = !empty($hbanner['image'])? cbv_get_image_src( $hbanner['image'] ): '';
?>
<section class="hm-page-bnr-cntlr">
  <div class="hm-page-banner">
    <div class="page-banner-bg inline-bg" style="background:url(<?php echo $banner; ?>);"></div>
    <div class="hm-page-bnr-des">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="hm-page-bnr-des-inr">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if( !empty($hbanner['title']) ): ?>
  <div class="hm-page-bnr-des">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-page-bnr-des-inr">
            <div>
              <?php printf( '<h1 class="hm-page-bnr-title fl-h1">%s</h1>', $hbanner['title'] ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
</section>
<?php endif; ?>
<?php get_template_part('templates/breadcrumbs', 'sec'); ?>
<?php
$showhideintro = get_field('showhideintro', HOMEID);
if($showhideintro): 
$intro = get_field('introsec', HOMEID);
if($intro):
?>
<section class="hm-lftdes-rgtimg-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-lftdes-rgtimg-sec-inr clearfix">
          <?php if( !empty($intro['image']) ): ?>
          <div class="hm-rgt-img hide-sm">
            <div class="hm-rgt-img-inr">
              <?php echo cbv_get_image_tag( $intro['image'] ); ?>
            </div>
          </div>
          <?php endif; ?>
          <div class="hm-lft-des">
            <?php 
              if( !empty($intro['title']) ) printf( '<h2 class="hm-lft-des-title fl-h2">%s</h2>', $intro['title'] ); 
              if( !empty($intro['description']) ) echo wpautop( $intro['description'] );
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhidehours = get_field('showhidehours', HOMEID);
if($showhidehours): 
$openinghours = get_field('openinghours', HOMEID);
if($openinghours):
?>
<section class="hm-lftimg-rgtdes-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-lftimg-rgtdes-sec-inr clearfix">
          <?php if( !empty($openinghours['image']) ): ?>
          <div class="hm-lft-img hide-sm">
            <div class="hm-lft-img-inr">
              <?php echo cbv_get_image_tag( $openinghours['image'] ); ?>
            </div>
          </div>
          <?php endif; ?>
          <div class="hm-rgt-des-ctlr">
            <div class="hm-rgt-des">
              <span class="hm-des-top"></span>
              <span class="hm-des-btm"></span>
              <span class="hm-des-rgt hide-sm"></span>
              <div class="hm-rgt-des-inr">
                <?php 
                  if( !empty($openinghours['title']) ) printf( '<h2 class="hm-lftimg-rgtdes-title fl-h2">%s</h2>', $openinghours['title'] ); 
                  if( !empty($openinghours['schedule_text']) ) echo wpautop( $openinghours['schedule_text'] );
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhideblock = get_field('showhideblock', HOMEID);
if($showhideblock): 
$btmblock = get_field('btmblock', HOMEID);
if($btmblock):
?>
<section class="hm-content-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-content-sec-inr">
          <?php 
            if( !empty($btmblock['title']) ) printf( '<h2>%s</h2>', $btmblock['title'] ); 
            if( !empty($btmblock['description']) ) echo wpautop( $btmblock['description'] );
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>