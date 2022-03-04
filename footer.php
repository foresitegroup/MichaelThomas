    </article>

    <?php
    $PreFooterTag = (isset($PreFooter) && $PreFooter == "no") ? "-none" : "";
    if ($PageTitle == "") $PreFooterTag = "-home";
    ?>
    <div id="pre-footer-outer<?php echo $PreFooterTag; ?>">
      <div class="arrow"></div>
      <div id="pre-footer-inner<?php echo $PreFooterTag; ?>">
        <?php if ($PageTitle == "") { ?>
        <a href="specialized-recruiting.php" class="spiff spiff-left">
          <div class="spiff-img"></div>
          <div class="spiff-sep"></div>
          <div class="spiff-text">
            See all our specialized search practices.
          </div>
          <div class="readmore">READ MORE <div class="fa fa-play-circle-o"></div></div>
        </a>

        <a href="search-process.php" class="spiff spiff-mid">
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
          <?php if (isset($FooterQuote)) { ?><em>&ldquo;<?php echo $FooterQuote; ?>&rdquo;</em><?php } ?>
          <?php if (isset($FooterAttr)) { ?><br><br>&ndash; <?php echo $FooterAttr; ?><?php } ?>
        </div>
        <?php } ?>
      </div> <!-- END pre-footer-inner -->
    </div> <!-- END pre-footer-outer -->

    <div id="footer-wrap">
      <?php
      $ArrowColor = " black";
      if ($PageTitle == "") $ArrowColor = " gray";
      if (isset($PreFooter)) $ArrowColor = "";
      ?>
      <div class="arrow<?php echo $ArrowColor; ?>"></div>

      <footer class="clearfix">
        <div id="location">
          <a href="https://www.google.com/maps/place/3340+Peachtree+Rd,+Atlanta,+GA+30326/@33.8470711,-84.3706989,17z/data=!3m1!4b1!4m5!3m4!1s0x88f50f589c8dea45:0x26c8f7b86fe812c0!8m2!3d33.8470711!4d-84.3685102" id="map"></a><br>
          <strong>Michael &bull; Thomas Executive Search, LLC</strong><br>
          3340 Peachtree Road<br>
          Suite 1800<br>
          Atlanta, GA 30326<br>
          <br>

          <strong>(P)</strong> 404.869.7753<br>
          <a href="https://www.linkedin.com/company/michael-thomas-executive-search" class="fa fa-linkedin-square"></a>
          <a href="<?php echo $TopDir; ?>industry-news/" class="fa fa-wordpress"></a>
        </div> <!-- END location -->

        <div id="footer-menu">
          <div class="menu-col">
            <a href="<?php echo $TopDir; ?>." class="fm-top">HOME</a>
            <a href="<?php echo $TopDir; ?>search-process.php" class="fm-top">SEARCH PROCESS</a>
            <a href="<?php echo $TopDir; ?>employers.php" class="fm-top">EMPLOYERS</a>
          </div>

          <div class="menu-col">
            <a href="<?php echo $TopDir; ?>our-firm.php" class="fm-top">OUR FIRM</a>
            <a href="<?php echo $TopDir; ?>leadership.php">Leadership</a>
            <a href="<?php echo $TopDir; ?>who-we-are.php">Who We Are</a>
            <a href="<?php echo $TopDir; ?>our-clients.php">Our Clients</a>
            <a href="<?php echo $TopDir; ?>testimonials.php">Testimonials</a>
            <a href="<?php echo $TopDir; ?>industry-news/">Industry News</a>
          </div>

          <div class="menu-col">
            <a href="<?php echo $TopDir; ?>business-consulting.php" class="fm-top">BUSINESS CONSULTING</a>
          </div>

          <div class="menu-col">
            <a href="<?php echo $TopDir; ?>contact-us.php" class="fm-top">CONTACT US</a>
            <a href="<?php echo $TopDir; ?>job-seeker-services.php">Job Seeker Services</a>
            <a href="<?php echo $TopDir; ?>location.php">Location</a>
          </div>
        </div> <!-- END footer-menu -->
      </footer>

      <div id="copyright">
        Copyright &copy; <?php echo date("Y"); ?> All rights reserved Michael<span class="name-bullet">&bull;</span>Thomas<br>
        <a href="https://foresitegrp.com" style="color: #FFFFFF;">WEBSITE BY FORESITE</a>
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