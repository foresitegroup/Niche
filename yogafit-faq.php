<?php
session_start();

$PageTitle = "YogaFit Gift Pack FAQ";
$Description = "";
$Keywords = "";
$HeaderImage = "header-adult.jpg";
$SideMenu = "2";
include "header.php";

if ($_POST['club'] != "") { $_SESSION['faq'] = $_POST['club']; }
if ($_SESSION['faq'] == "") {
?>

<form action="yogafit-faq.php" method="POST">
  <div>
    <strong>Please enter the name of your club and click submit to view the FAQ</strong><br>
    <input type="text" name="club" style="width: 365px;"> <input type="submit" value="Submit">
  </div>
</form>

<?php } else { ?>

<h1>YogaFit Gift Pack - Frequently Asked Questions</h2>

<img src="images/YogaFit.png" alt="YogaFit" class="right" style="border: 0;">

<strong>Welcome Yoga Instructors</strong><br>
Thank you for your interest in the YogaFit&reg; Gift pack. Here is a collection of Frequently Asked Questions about this program:<br>
<br>

<strong>How much will the YogaFit Gift Pack cost me?</strong><br>
There is no cost to you.  The gift packs are shipped to you completely free.<br>
<br>

<strong>How can these Gift Packs be completely free?</strong><br>
The marketers who provide the samples for the gift packs fund them because they want to reach people who live a healthy lifestyle and are involved in yoga and pilates.<br>
<br>

<strong>Why do you want all my information now?</strong><br>
It will guide in setting up the program and calculating how many Gift Packs to produce.<br>
<br>

<strong>What if any of my information changes? (address, teaching facility.)</strong><br>
Simply email <?php email("yogafit@nichesampling.com"); ?> to update your information.<br>
<br>

<strong>What if I forget to update my information before the program begins?</strong><br>
We will email you with a reminder prior to the program start date to update your contact information.<br>
<br>

<strong>When should I expect to see my YogaFit Gift Packs?</strong><br>
The Gift Packs will be sent to your 'ship to' address in spring.<br>
<br>

<strong>What will you use my contact information for?</strong><br>
We will only use your information to update you on the program, send you gift packs and reminder emails to sign up for the next time the program runs.<br>
<br>

<strong>Will you sell my contact information?</strong><br>
No!<br>
<br>

<strong>Who are the Gift Packs available to?</strong><br>
They are available to YogaFit, Yoga, and Pilates students.<br>
<br>

<strong>I don't instruct YogaFit, can I still receive the gift packs?</strong><br>
Absolutely, as long as you are an active Yoga or Pilates instructor.<br>
<br>

<strong>Why do you need to know how many students I instruct?</strong><br>
So we know how many Gift Packs to send to you.<br>
<br>

<strong>How do I calculate my total student enrollment?</strong><br>
Scenario 1:  I instruct three individual YogaFit classes twice a week, each class has 20 students enrolled.  The total number of YogaFit students enrolled is 60 students a week.<br>
Scenario 2:  I instruct one Yoga class that meets twice a week with 20 students enrolled in the class, AND instruct one Pilates class that meets twice a week with 18 students enrolled in the class.   The total number of Yoga students enrolled is 20 students a week and the total number of Pilates students enrolled is 18 students a week.<br>
<br>

<strong>What if between 7-13 students show up for a class that has an enrollment of 20 students enrolled, how many students do I enter?</strong><br>
Enter 20, for the number enrolled in the class.<br>
<br>

<strong>If I teach multiple classes at multiple gyms, how do I calculate the number of students?</strong><br>
Please follow instructions above; simply add the number of students enrolled in each specified class together for an overall total.<br>
<br>

<strong>I teach more than just YogaFit, Yoga, and Pilates classes, are those students eligible to receive these gift packs?</strong><br>
No, the gift packs are for YogaFit, Yoga, and Pilates students only.<br>
<br>

<strong>Who can I contact to answer questions or to get more information about the YogaFit Gift Pack?</strong><br>
Call Niche Sampling Inc. at 414-276-5666 or email us at <?php email("yogafit@nichesampling.com"); ?>.

<?php
}

include "footer.php";
?>