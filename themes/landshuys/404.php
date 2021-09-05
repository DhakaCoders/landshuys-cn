<?php get_header(); 
$desc = get_field('page_404', 'options');
$banner = $desc['banner'];
$afbeelding = !empty($banner)?cbv_get_image_src($banner):banner_placeholder();
?>
<section class="page-banner-cntlr">
  <div class="page-banner">
    <div class="page-banner-bg inline-bg" style="background:url(<?php echo $afbeelding; ?>);"></div>
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
<section class="page-content page-404-wrp">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-404 text-center">
                    <h1>404</h1>
                    <?php if( !empty($desc['description']) ) printf('<h3>%s</h3>', $desc['description']) ?>
                </div>
            </div>
        </div><!-- end of .newsarea -->
    </div>
</section><!-- end of main content -->
<?php get_footer(); ?>