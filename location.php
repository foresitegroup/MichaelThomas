<?php
$PageTitle = "Location";
$Banner = "banner-sub-contact-us.jpg";
$BannerText = "Avoid the Rocks when Searching for Key People for Your Organization.";
$SubTitle = "";
$ColNum = "one-col";
$PreFooter = "no";
include "header.php";
?>

<div class="left">
  <div class="embed">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6627.01659531507!2d-84.37780599999998!3d33.850789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f50f60e704bbc7%3A0x938e985fc4abef59!2sMichael-Thomas+Executive+Search!5e0!3m2!1sen!2sus!4v1423867251702" width="800" height="600" frameborder="0" style="border:0"></iframe>
  </div>
  <br>

  <strong>Michael-Thomas Executive Search LLC</strong><br>
  3525 Piedmont Road<br>
  Building 7 Piedmont Center<br>
  Suite 300<br>
  Atlanta, Georgia 30305<br>
  <br>

  Phone: 1.404.869.7753<br>
  Fax: 1.404.233.4883<br>
  <br>
</div>

<div class="right">
  <?php
  // Settings for randomizing the field names
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = time();
  $salt = "MTEScontact";

  if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
    if ($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "Email *" &&
        $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "Comment *")
    {
      $SendTo = "mcollentine@mtrecruits.com";
      $Subject = "Contact Form Submission";
      $From = "From: Contact Form <contactform@mtrecruits.com>\r\n";
      $From .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";

      if (!empty($_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
      if (!empty($_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
      if (!empty($_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
      $Message .= $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

      $Message .= "\n";

      $Message .= "Comment\n" . $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n\n";

      $Message = stripslashes($Message);

      //mail($SendTo, $Subject, $Message, $From);
      echo "<pre>".$Message."</pre>";

      echo "<strong>Thank you for your comment.</strong>";
    } else {
      echo "<strong>Some required information is missing! Please go back and make sure all of the fields are filled.</strong>";
    }
  } else {
  ?>

  <script type="text/javascript">
    <!--
    function checkform (form) {
      if (form.email.value == "" || form.email.value == "Email") { alert('Email required.'); form.email.focus(); return false; }
      if (form.comment.value == "" || form.comment.value == "Comment *") { alert('Comment required.'); form.comment.focus(); return false; }
      return true;
    }
    //-->
  </script>

  <form action="location.php" method="POST" onSubmit="return checkform(this)" >
    <div id="contactform">
      <strong>For General inquires</strong><br>

      Fields with * are required.

      <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="Name">
      <input type="text" name="<?php echo md5("company" . $ip . $salt . $timestamp); ?>" id="company" placeholder="Company">
      <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone">
      <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email *">
      <textarea name="<?php echo md5("comment" . $ip . $salt . $timestamp); ?>" id="comment" placeholder="Comment *"></textarea>
      
      <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>
        
      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

      <input type="submit" name="submit" value="Send" class="button">
    </div>
  </form>
  <?php } ?>
</div>

<div style="clear: both;"></div>

<?php include "footer.php"; ?>