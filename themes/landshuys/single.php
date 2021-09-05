<?php get_header(); 
$thisID = get_the_ID();
$imgID = get_field('banner_image', $thisID);
$customtitle = get_field('custom_page_title', $thisID);
$banner = !empty($imgID)?cbv_get_image_src($imgID):banner_placeholder();
$post_title = !empty($customtitle)? $customtitle: get_the_title($thisID);
?>
<section class="page-banner-cntlr">
  <div class="page-banner">
    <div class="page-banner-bg inline-bg" style="background:url(<?php echo $banner ?>);"></div>
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
<section class="page-content section-divider">
  <div class="posts-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
          <div class="post-sec-cntrl">
            <div class="post-items">
              <article class="post-item clearfix">
                <div class="post-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/BadkamerNoorderdiep-150x150.jpg">
                </div>
                <div class="post-des">
                  <?php 
                    if( !empty($post_title) ) printf('<h2 class="fl-h1">%s</h2>', $post_title); 
                    the_content();
                  ?>
                </div>
              </article>
            </div>    

            <div class="right-sidebar mgleftm">
              <aside class="search-wrp widget">
                <div class="sidebar-widget">
                  <form class="search-form">
                    <div class="search">
                      <label>
                        <input type="search" placeholder="Search...">
                        <input type="submit" value="">
                      </label>
                    </div>
                  </form>
                </div>
              </aside>
              <aside>
                <div class="sidebar-widget">
                  <h3>Recent post</h3>
                  <ul class="clearfix reset-list">
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                  </ul>
                </div>
              </aside>
              <aside>
                <div class="sidebar-widget">
                  <h3>Recent post</h3>
                  <ul class="clearfix reset-list">
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>  
      </div>
    </div>     
  </div><!-- end of .posts-section -->   
</section><!-- end of .main-content -->
<?php get_footer(); ?>