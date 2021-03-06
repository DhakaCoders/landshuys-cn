<?php 
/*
  Template Name: Contact
*/
get_header(); 
$thisID = get_the_ID();
$imgID = get_field('banner_image', $thisID);
$customtitle = get_field('custom_page_title', $thisID);
$banner = !empty($imgID)?cbv_get_image_src($imgID):banner_placeholder();
$page_title = !empty($customtitle)? $customtitle: get_the_title($thisID);
?>
<section class="page-banner-cntlr">
  <div class="page-banner">
    <div class="page-banner-bg inline-bg" style="background:url(<?php echo $banner; ?>);"></div>
    <div class="page-bnr-des">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-bnr-des-inr">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/breadcrumbs', 'sec'); ?>
<section class="page-content">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-cnt-inner">
            <div class="cnt-form">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>