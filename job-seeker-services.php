<?php
include "job-seeker-services-login.php";
$PageTitle = "Job Seeker Services";
$Banner = "banner-sub-contact-us.jpg";
$BannerText = "Avoid the Rocks when Searching for Key People for Your Organization.";
$SubTitle = "";
$ColNum = "one-col";
$PreFooter = "no";
include "header.php";
?>

Submit your resume online and let Michael-Thomas Executive Search help you find your next great job.<br>
<br>

Michael-Thomas Executive Search can help you identify and present job opportunities to you that will take you to the next level of your career.<br>
<br>

Please fill out the form below or contact us at 1.404.869.7753.<br>
<br>

<?php
// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "MTESjobseeker";

if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
  if ($_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "First Name *" &&
      $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "Last Name *" &&
      $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "Phone *" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "Email *")
  {
    $Message = $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " ";
    $Message .= $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

    $Message .= "\n";

    if (!empty($_POST[area])) $Message .= "Practice Area: " . implode(", ", $_POST['area']);

    $Message = stripslashes($Message);

    // Fire up Swift Mailer
    require_once "inc/swiftmailer/swift_required.php";

    // Set a new instance and populate the fields
    $TheEmail = Swift_Message::newInstance();
    $TheEmail->setTo(array("mcollentine@mtrecruits.com"));
    $TheEmail->setFrom(array("contactform@mtrecruits.com" => "Contact Form"));
    $TheEmail->setReplyTo(array($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])]));
    $TheEmail->setSubject("Job Seeker Services Contact Form Submission");

    if ($_FILES['file']['tmp_name'] != "") {
      $allowed = array("pdf","doc","docx","txt");
      if (in_array(strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION)), $allowed)) {
        $TheEmail->attach(Swift_Attachment::fromPath($_FILES['file']['tmp_name'])->setFilename($_FILES['file']['name']));
      }
    }

    $TheEmail->setBody($Message);

    // Create the Transport and Mailer
    $transport = Swift_MailTransport::newInstance();
    $mailer = Swift_Mailer::newInstance($transport);
    
    // Send it!
    $result = $mailer->send($TheEmail);

    //echo "<pre>".$Message."</pre>";

    echo "<strong>Thank you for your submission. You will be contacted soon.</strong>";
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
    if (form.phone.value == "" || form.phone.value == "Phone *") { alert('Phone required.'); form.phone.focus(); return false; }
    if (form.email.value == "" || form.email.value == "Email") { alert('Email required.'); form.email.focus(); return false; }
    return true;
  }
  //-->
</script>

<form action="job-seeker-services.php" enctype="multipart/form-data" method="POST" onSubmit="return checkform(this)" >
  <div>
    Fields with * are required.
  </div>

  <div class="left">
    <input type="text" name="<?php echo md5("firstname" . $ip . $salt . $timestamp); ?>" id="firstname" placeholder="First Name *">
    <input type="text" name="<?php echo md5("lastname" . $ip . $salt . $timestamp); ?>" id="lastname" placeholder="Last Name *">
    <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone *">
    <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email *">

    <strong>Attach Resume</strong> (.pdf, doc, .docx, .txt)
    <input type="file" name="file" id="file">
  </div>

  <div class="right">
    <strong>Practice Area</strong><br>
    <input type="checkbox" name="area[]" value="Accounting, Finance & Tax"> Accounting, Finance &amp; Tax<br>
    <input type="checkbox" name="area[]" value="Engineering & Operations"> Engineering &amp; Operations<br>
    <input type="checkbox" name="area[]" value="Executive Management"> Executive Management<br>
    <input type="checkbox" name="area[]" value="Legal"> Legal<br>
    <input type="checkbox" name="area[]" value="Manufacturing"> Manufacturing<br>
    <input type="checkbox" name="area[]" value="Marketing"> Marketing<br>
    <input type="checkbox" name="area[]" value="Sales"> Sales
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