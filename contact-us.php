<?php
$PageTitle = "Contact Us";
$Description = "";
$Keywords = "";
$HeaderImage = "header-contact.jpg";
$SideMenu = "";
include "header.php";
?>

<h1>Contact NSI</h2>

<div style="float: left;">
  <?php
  if (isset($_POST['submit'])) {
    $SendTo = "target@nichesampling.com";
    $Subject = "Comment From Niche Sampling Website";
    $From = "From: Contact Form <contactform@nichesampling.com>\r\n";
    $From .= "Reply-To: " . $_POST['email'] . "\r\n";
    
    $Message = "Comment from " . $_POST['name'] . " (" . $_POST['email'] . ")\n";
    $Message .= $_POST['company'] . "\n";
    $Message .= $_POST['phone'] . "\n\n";
    $Message .= $_POST['comment'] . "\n";
    
    $Message = stripslashes($Message);
    
    mail($SendTo, $Subject, $Message, $From);
    
    echo "Your message has been sent!  Thank you for your interest in Niche Sampling.";
  } else {
  ?>
  Call us at 414-276-5666 or fill in and send your request.<br>
  <br>
  
  <script type="text/javascript">
    <!--
    function checkform (form) {
      if (form.name.value == "") { alert('Name required.'); form.name.focus(); return false; }
      if (form.company.value == "") { alert('Company Name required.'); form.company.focus(); return false; }
      if (form.phone.value == "") { alert('Phone Number required.'); form.phone.focus(); return false; }
      if (form.email.value == "") { alert('E-mail required.'); form.email.focus(); return false; }
      if (form.comment.value == "") { alert('Request/Comment required.'); form.comment.focus(); return false; }
      return true;
    }
    //-->
  </script>
  
  <form action="contact-us.php" method="POST" onSubmit="return checkform(this)">
    <div>
      <strong>Name:</strong><br>
      <input type="text" name="name" style="width: 400px;"><br>
      <br>
      
      <strong>Company Name:</strong><br>
      <input type="text" name="company" style="width: 400px;"><br>
      <br>
      
      <strong>Phone Number:</strong><br>
      <input type="text" name="phone" style="width: 400px;"><br>
      <br>
      
      <strong>E-mail:</strong><br>
      <input type="text" name="email" style="width: 400px;"><br>
      <br>
      
      <strong>Request/Comment:</strong><br>
      <textarea name="comment" style="height: 175px; width: 400px;"></textarea><br>
      <br>
      
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
  <?php } ?>
</div>

<div style="float: right;">
  <strong>Phil Gruber</strong><br>
  President<br>
  <?php email("Phil@nichesampling.com"); ?><br>
  <br>
  
  <strong>Lee Hessenthaler</strong><br>
  Vice President of Sales & Marketing<br>
  <?php email("Lee@nichesampling.com"); ?><br>
  <br>
  
  <strong>Jennifer Schmitz</strong><br>
  Marketing Operations Manager<br>
  <?php email("Jennifer@nichesampling.com"); ?><br>
  <br>
  
  <strong>Nancy Picker</strong><br>
  National Sales Director<br>
  <?php email("Nancy@nichesampling.com"); ?><br>
  <br>
  
  <strong>Anne Warchol</strong><br>
  National Account Director<br>
  <?php email("Anne@nichesampling.com"); ?><br>
  <br>
  
  <strong>Mailing Address</strong><br>
  Niche Sampling Inc.<br>
  4532 North Oakland Avenue<br>
  Milwaukee, WI 53211<br>
  <br>
  
  Ph: 414.276.5666<br>
  Fx: 414.276.6665<br>
</div>

<?php include "footer.php"; ?>