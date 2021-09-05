<?php 
  $address = get_field('address', 'options');
  $gurl = get_field('gurl', 'options');
  $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
  $telephone = get_field('telephone', 'options');
  $email = get_field('emailaddres', 'options');
  $copyright_text = get_field('copyright_text', 'options');
?>
<footer class="footer-wrp">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-top-cntlr clearfix">
            <div class="ftr-col ftr-col-01 hide-md">
              <h4 class="fl-h4 ftr-col-title"><?php _e('Informatie', 'landshuys'); ?></h4>
              <div class="ftr-col-information">
                <ul>
                  <li>Groepen</li>
                  <li>Wat is er mogelijk?</li>
                  <li>Huwelijksfeest</li>
                  <li>Onze Zalen</li>
                  <li>Goepsarrangementen</li>
                </ul>

                <ul>
                  <li>Over Bourtange</li>
                  <li>Activiteitenkalender</li>
                  <li>Foto-impressie</li>
                  <li>Geschiedenis van de vesting</li>
                  <li>Overnachten</li>
                  <li>Plattegrond</li>
                </ul>

                <ol>
                  <li>Acceptant diner cadeau</li>
                  <li>Acceptant VVV dinercheque</li>
                </ol>

              </div>
            </div>
            <div class="ftr-col ftr-col-02">
              <h4 class="fl-h4 ftr-col-title"><?php _e('‘s Landshuys', 'landshuys'); ?></h4>
              <div class="ftr-col-add-details">
                <?php if( !empty($address) ): ?>
                <div class="ftr-col-add ftr-add-details-col">
                  <span><i><?php _e('adres', 'landshuys'); ?>:</i></span><br>
                  <a href="<?php echo $gmaplink; ?>" target="_blank"><?php echo $address; ?></a>
                </div>
                <?php endif; ?>
                <?php if( !empty($telephone) ): ?>
                <div class="ftr-col-tel ftr-add-details-col">
                  <span><i><?php _e('telefoon', 'landshuys'); ?>:</i></span><br>
                  <a href="tel:<?php echo phone_preg($telephone); ?>"><?php echo $telephone; ?></a>
                </div>
                <?php endif; ?>
                 <?php if( !empty($email) ): ?>
                <div class="ftr-col-mail ftr-add-details-col">
                  <span><i><?php _e('email', 'landshuys'); ?>:</i></span><br>
                  <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="ftr-col ftr-col-03 hide-md">
              <h4 class="fl-h4 ftr-col-title"><?php _e('Openingstijden', 'landshuys'); ?></h4>
              <div class="ftr-col-opening-hours">
                <ul class="reset-list">
                  <li><i>April t/m 28 oktober:</i></li>
                  <li>Dagelijks geopend <br>vanaf 10 uur</li>
                </ul>
              </div>
              <div class="ftr-col-normal-opening ftr-col-opening-star">
                <ul class="reset-list">
                  <li>&nbsp; &nbsp;Buiten onze normale <br> openingstijden uitsluitend <br>op aanvraag</li>
                  <li>&nbsp; &nbsp;Grote kaart donderdag t/m <br>zondag vanaf 17.00</li>
                </ul>
              </div>
            </div>

            <div class="ftr-col ftr-col-04">
              <div class="ftr-col-information">
                <ol>
                  <li>Acceptant diner cadeau</li>
                  <li>Acceptant VVV dinercheque</li>
                </ol>
              </div>
              <div class="ftr-lang fl-lang">
                <a href="#" target="_blank">Deutsch<span class="country-flag"><img src="<?php echo THEME_URI; ?>/assets/images/country-flag.png" alt=""></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="footer-btm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-btm-cntlr">
            <div class="ftr-copyright">
              <?php if( !empty( $copyright_text ) ) printf( '<p>%s</p>', $copyright_text); ?> 
            </div>
            <div class="ftr-lang fl-lang hide-md">
              <a href="#" target="_blank">Deutsch<span class="country-flag"><img src="<?php echo THEME_URI; ?>/assets/images/country-flag.png" alt=""></span></a>
           </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>