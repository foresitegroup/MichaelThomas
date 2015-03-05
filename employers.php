<?php
$PageTitle = "Employer Services Contact";
$Banner = "banner-sub-employers.jpg";
$BannerText = "Navigating Client Needs for The Long Crossings.";
$SubTitle = "";
$ColNum = "one-col";
$PreFooter = "no";
include "header.php";
?>

Your company needs great talent to compete in today's economy. Michael-Thomas Executive Search can help you with your next strategic and critical search. We deliver top top talent who will bring exceptional value to your business and will make a direct impact to your company's growth. Let's get started. Please fill out the form below or contact us at 1.404.869.7753.<br>
<br>

<h3>We want to be your &ldquo;Go-to-Recruiter&rdquo; for time sensitive and critical positions.</h3><br>
<br>

<?php
// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "MTESemployers";

if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
  if ($_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "First Name *" &&
      $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "Last Name *" &&
      $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "Company *" &&
      $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "Phone *" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "Email *" &&
      $_POST[md5('position' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('position' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "Describe the position(s) you are looking to fill at your company *")
  {
    $SendTo = "info@michael-thomasexecutivesearch.com";
    $Subject = "Employer Services Contact Form Submission";
    $From = "From: Contact Form <contactform@michael-thomasexecutivesearch.com>\r\n";
    $From .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";

    $Message = $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " ";
    $Message .= $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

    $Message .= "\n";

    if (!empty($_POST[need])) $Message .= "We have a(n): " . $_POST[need] . "\n\n";

    $Message .= "Position Description\n" . $_POST[md5('position' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n\n";

    if (!empty($_POST[military])) $Message .= "Are you looking to hire former members of the military?\n" . $_POST[military] . "\n";

    $Message = stripslashes($Message);

    mail($SendTo, $Subject, $Message, $From);
    //echo "<pre>".$Message."</pre>";

    echo "<strong>Thank you for your request. You will be contacted soon.</strong>";
  } else {
    echo "<strong>Some required information is missing! Please go back and make sure all of the fields are filled.</strong>";
  }
} else {
?>

<script type="text/javascript">
  <!--
  function checkform (form) {
    if (form.firstname.value == "" || form.firstname.value == "First Name *") { alert('First Name required.'); form.firstname.focus(); return false; }
    if (form.lastname.value == "" || form.lastname.value == "Last Name *") { alert('Last Name required.'); form.lastname.focus(); return false; }
    if (form.company.value == "" || form.company.value == "Company *") { alert('Company required.'); form.company.focus(); return false; }
    if (form.phone.value == "" || form.phone.value == "Phone *") { alert('Phone required.'); form.phone.focus(); return false; }
    if (form.email.value == "" || form.email.value == "Email") { alert('Email required.'); form.email.focus(); return false; }
    if (form.position.value == "" || form.position.value == "Describe the position(s) you are looking to fill at your company *") { alert('Position Description required.'); form.position.focus(); return false; }
    return true;
  }
  //-->
</script>

<form action="employers.php" method="POST" onSubmit="return checkform(this)" >
  <div>
    Fields with * are required.
  </div>

  <div class="left">
    <input type="text" name="<?php echo md5("firstname" . $ip . $salt . $timestamp); ?>" id="firstname" placeholder="First Name *">
    <input type="text" name="<?php echo md5("lastname" . $ip . $salt . $timestamp); ?>" id="lastname" placeholder="Last Name *">
    <input type="text" name="<?php echo md5("company" . $ip . $salt . $timestamp); ?>" id="company" placeholder="Company *">
    <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone *">
    <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email *">
  </div>

  <div class="right">
    <fieldset>
      We have a(n):<br>
      <input type="radio" name="need" value="Immediate Need"> Immediate Need
      <input type="radio" name="need" value="Future Need"> Future Need
    </fieldset><br>
    <br>

    <textarea name="<?php echo md5("position" . $ip . $salt . $timestamp); ?>" id="position" placeholder="Describe the position(s) you are looking to fill at your company *"></textarea>

    <fieldset>
      Are you looking to hire former members of the military?<br>
      <input type="radio" name="military" value="Yes"> Yes
      <input type="radio" name="military" value="No"> No
    <fieldset>
  </div>

  <div style="clear: both;"></div>

  <div>
    <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

    <input type="hidden" name="ip" value="<?php echo $ip; ?>">
    <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

    <input type="submit" name="submit" value="Send" class="button">
  </div>
</form>
<?php } ?>

<?php include "footer.php"; ?>