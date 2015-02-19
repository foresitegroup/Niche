<?php
session_start();

$PageTitle = "Women's Fitness Sample Pack FAQ";
$Description = "";
$Keywords = "";
$HeaderImage = "header-adult.jpg";
$SideMenu = "2";
include "header.php";

if ($_POST['wfclub'] != "") { $_SESSION['wffaq'] = $_POST['wfclub']; }
if ($_SESSION['wffaq'] == "") {
?>

<form action="womens-fitness-clubs-faq.php" method="POST">
  <div>
    <input type="checkbox" name="wfclub" value="yes"> I am a representative of a Woman's Fitness Club or Center<br>
    <input type="submit" value="Submit">
  </div>
</form>

<?php } else { ?>

<h1>Women's Fitness Sample Pack - FAQ</h2>

<strong>Welcome Women's Fitness Clubs</strong><br>
Thank you for your interest in Women's Fitness Sample Packs for your members. Here is a collection of Frequently Asked Questions about this program:<br>
<br>

<strong>How much will the Women's Fitness Sample Packs cost me?</strong><br>
There is no cost to you.  The sample packs are shipped to you completely free.<br>
<br>

<strong>How can these Women's Fitness Sample Packs be completely free?</strong><br>
The manufacturers who provide the samples for the packs fund them because they want to reach people who live a healthy lifestyle and are intersted in fitness and nutrition.<br>
<br>

<strong>Why do you want all my information now?</strong><br>
It will guide in setting up the program and calculating how many Sample Packs to produce.<br>
<br>

<strong>What if any of my information changes? (address, number of members.)</strong><br>
Simply return to this website and resubmit your information.<br>
<br>

<strong>What if I forget to update my information before the program begins?</strong><br>
We will email you with a reminder prior to the program start date to update your contact information.<br>
<br>

<strong>When should I expect to see my Women's Fitness Sample Packs?</strong><br>
The Sample Packs will be sent to your 'ship to' address as often as manufactures want to sample to your members.<br>
<br>

<strong>What will you use my contact information for?</strong><br>
We will only use your information to update you on the program, send you sample packs and reminder emails to sign up for the next time the program runs.<br>
<br>

<strong>Will you sell my contact information?</strong><br>
No!<br>
<br>

<strong>Who are the Sample Packs available to?</strong><br>
They are available to Women's Fitness Centers and Clubs that are able to give samples to only their female members.<br>
<br>

<strong>Why do you need to know how many members I instruct?</strong><br>
So we know how many Sample Packs to send to you.<br>
<br>

<strong>If I have multiple clubs do I sign up separately for each one?</strong><br>
No, please sign up for only one, but include the total number of members at all of your clubs. We will ship all your samples to one club!<br>
<br>

<strong>Who can I contact to answer questions or to get more information about the Women's Fitness Sample Packs?</strong><br>
Call Niche Sampling Inc. at 414-276-5666 or email us at <?php email("womensfitness@nichesampling.com"); ?>.

<?php
}

include "footer.php";
?>