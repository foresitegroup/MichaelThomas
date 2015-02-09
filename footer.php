    </article>
    
    <?php
    if ($PageTitle == "") $PreFooterTag = "-home";
    if ($PreFooter == "no") $PreFooterTag = "-none";
    ?>
    <div id="pre-footer-outer<?php echo $PreFooterTag; ?>">
      <div class="arrow"></div>
      <div id="pre-footer-inner<?php echo $PreFooterTag; ?>">
        <?php if ($PageTitle == "") { ?>
        <div class="spiff">
          <img src="images/spiff-left.jpg" alt="">
          <div class="spiff-sep"></div>
          <div class="spiff-text">
            Working with private equity firms is a skill we have refined.
          </div>
          <a href="#">READ MORE <div class="fa fa-play-circle-o"></div></a>
        </div>

        <div class="spiff mid">
          <img src="images/spiff-mid.jpg" alt="">
          <div class="spiff-sep"></div>
          <div class="spiff-text">
            We stand out because of our approach for each and every one of our clients.
          </div>
          <a href="#">READ MORE <div class="fa fa-play-circle-o"></div></a>
        </div>

        <div class="spiff">
          <img src="images/spiff-right.jpg" alt="">
          <div class="spiff-sep"></div>
          <div class="spiff-text">
            Contact us with your executive, management or professional search criteria.
          </div>
          <a href="#">READ MORE <div class="fa fa-play-circle-o"></div></a>
        </div>

        <div style="clear: both;"></div>
        <?php } else { ?>
        <div id="pre-footer-text">
          <em>&ldquo;Michael-Thomas&rsquo; team took the time to understand our business and the type of candidates we wanted to interview....&rdquo;</em><br>
          <br>
          &ndash; Brenda Lee Lally Pfingsten Partners, LLC
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
          3525 Piedmont Road-7, Suite 300<br>
          Atlanta, GA 30305<br>
          <br>

          <strong>(P)</strong> 404.869.7753<br>
          <strong>(F)</strong> 404.869.0769<br>
          <a href="#" class="fa fa-linkedin-square"></a>
          <a href="#" class="fa fa-wordpress"></a>
        </div> <!-- END location -->

        <div id="footer-menu">
          <div class="menu-col">
            <a href="."><strong>HOME</strong></a><br>
            <a href="our-approach.php"><strong>OUR APPROACH</strong></a><br>
            <a href="#"><strong>THEY LIKE US</strong></a>
          </div>

          <div class="menu-col">
            <a href="#"><strong>OUR FIRM</strong></a><br>
            <a href="about-us.php">ABOUT US</a><br>
            <a href="#">LEADERSHIP</a><br>
            <a href="#">INDUSTRIES SERVED</a><br>
            <a href="#">INDUSTRY NEWS</a>
          </div>

          <div class="menu-col">
            <a href="#"><strong>HOW WE WORK</strong></a><br>
            <a href="#">SPECIALIZED RECRUITING</a>
          </div>

          <div class="menu-col">
            <a href="#"><strong>CONTACT</strong></a><br>
            <a href="#">EMPLOYER SERVICES</a><br>
            <a href="#">JOB SEEKERS SERVICES</a><br>
            <a href="#">LOCATION</a>
          </div>
        </div> <!-- END footer-menu -->
      </footer>

      <div id="copyright">
        COPYRIGHT &copy; <?php echo date("Y"); ?> ALL RIGHTS RESERVED MICHAEL<span class="name-bullet">&bull;</span>THOMAS
      </div> <!-- END copyright -->
    </div> <!-- END footer-wrap -->
  </body>
</html>