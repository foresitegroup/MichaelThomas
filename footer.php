    </article>

    <?php
    if ($PageTitle == "") $PreFooterTag = "-home";
    if ($PreFooter == "no") $PreFooterTag = "-none";
    ?>
    <div id="pre-footer-outer<?php echo $PreFooterTag; ?>">
      <div class="arrow"></div>
      <div id="pre-footer-inner<?php echo $PreFooterTag; ?>">
        <?php if ($PageTitle == "") { ?>
        <a href="specialized-recruiting.php" class="spiff spiff-left">
          <div class="spiff-img"></div>
          <div class="spiff-sep"></div>
          <div class="spiff-text">
            Financial Services recruiting is just one of our specialties.
          </div>
          <div class="readmore">READ MORE <div class="fa fa-play-circle-o"></div></div>
        </a>

        <a href="our-approach.php" class="spiff spiff-mid">
          <div class="spiff-img"></div>
          <div class="spiff-sep"></div>
          <div class="spiff-text">
            We stand out because of our approach for each and every one of our clients.
          </div>
          <div class="readmore">READ MORE <div class="fa fa-play-circle-o"></div></div>
        </a>

        <a href="employers.php" class="spiff spiff-right">
          <div class="spiff-img"></div>
          <div class="spiff-sep"></div>
          <div class="spiff-text">
            Contact us with your time critical recruiting needs.
          </div>
          <div class="readmore">READ MORE <div class="fa fa-play-circle-o"></div></div>
        </a>

        <div style="clear: both;"></div>
        <?php } else { ?>
        <div id="pre-footer-text">
          <?php if ($FooterQuote != "") { ?><em>&ldquo;<?php echo $FooterQuote; ?>&rdquo;</em><?php } ?>
          <?php if ($FooterAttr != "") { ?><br><br>&ndash; <?php echo $FooterAttr; ?><?php } ?>
        </div>
        <?php } ?>
      </div> <!-- END pre-footer-inner -->
    </div> <!-- END pre-footer-outer -->

    <div id="footer-wrap">
      <?php
      $ArrowColor = " black";
      if ($PageTitle == "") $ArrowColor = " gray";
      if ($PreFooter == "no") $ArrowColor = "";
      ?>
      <div class="arrow<?php echo $ArrowColor; ?>"></div>

      <footer class="clearfix">
        <div id="location">
          <a href="https://www.google.com/maps/place/Michael-Thomas+Executive+Search/@33.850789,-84.377806,17z/data=!3m1!4b1!4m2!3m1!1s0x88f50f60e704bbc7:0x938e985fc4abef59" id="map"></a><br>
          <strong>Michael &bull; Thomas Executive Search, LLC</strong><br>
          3525 Piedmont Road<br>
          Building 7 Piedmont Center<br>
          Suite 300<br>
          Atlanta, GA 30305<br>
          <br>

          <strong>(P)</strong> 404.869.7753<br>
          <strong>(F)</strong> 404.869.0769<br>
          <a href="https://www.linkedin.com/pub/michael-collentine/a/a41/386" class="fa fa-linkedin-square"></a>
          <a href="<?php echo $TopDir; ?>industry-news/" class="fa fa-wordpress"></a>
        </div> <!-- END location -->

        <div id="footer-menu">
          <div class="menu-col">
            <a href="<?php echo $TopDir; ?>." class="fm-top">HOME</a>
            <a href="<?php echo $TopDir; ?>our-approach.php" class="fm-top">OUR APPROACH</a>
            <a href="<?php echo $TopDir; ?>employers.php" class="fm-top">EMPLOYERS</a>
          </div>

          <div class="menu-col">
            <a href="<?php echo $TopDir; ?>our-firm.php" class="fm-top">OUR FIRM</a>
            <a href="<?php echo $TopDir; ?>leadership.php">Leadership</a>
            <a href="<?php echo $TopDir; ?>industries-served.php">Industries Served</a>
            <a href="<?php echo $TopDir; ?>testimonials.php">Testimonials</a>
            <a href="<?php echo $TopDir; ?>industry-news/">Industry News</a>
          </div>

          <div class="menu-col">
            <a href="<?php echo $TopDir; ?>how-we-work.php" class="fm-top">HOW WE WORK</a>
            <a href="<?php echo $TopDir; ?>specialized-recruiting.php">Specialized Recruiting</a>
          </div>

          <div class="menu-col">
            <a href="<?php echo $TopDir; ?>contact-us.php" class="fm-top">CONTACT US</a>
            <a href="<?php echo $TopDir; ?>job-seeker-services.php">Job Seeker Services</a>
            <a href="<?php echo $TopDir; ?>location.php">Location</a>
          </div>
        </div> <!-- END footer-menu -->
      </footer>

      <div id="copyright">
        Copyright &copy; <?php echo date("Y"); ?> All rights reserved Michael<span class="name-bullet">&bull;</span>Thomas
      </div> <!-- END copyright -->
    </div> <!-- END footer-wrap -->

    <a href="#" id="backToTop" class="fa fa-arrow-up fa-2x"></a>

    <?php
    if (basename(dirname($_SERVER['PHP_SELF'])) == "industry-news") {
      wp_footer();
    }
    ?>
  </body>
</html>