<?php
$PageTitle = "Women's Fitness Clubs: Sample Pack Sign Up";
$Description = "";
$Keywords = "";
$HeaderImage = "header-adult.jpg";
$SideMenu = "2";
include "header.php";
include_once "inc/dbconfig.php";

if (isset($_POST['submit'])) {
  mysql_query("INSERT INTO womensfitness (firstname, lastname, businessname, address, address2, city, state, zip, phone, email, numberstudents, hear) VALUES (
              '" . mysql_real_escape_string(stripslashes($_POST['firstname'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['lastname'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['businessname'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['address'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['address2'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['city'])) . "',
              '" . $_POST['state'] . "',
              '" . mysql_real_escape_string(stripslashes($_POST['zip'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['phone'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['email'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['numberstudents'])) . "',
              '" . $_POST['hear'] . "'
  )");

  echo "Your request has been sent!  Thank you for your interest in Women's Fitness Clubs Sample Pack.<br>";
} else {

$states_arr = array('AL'=>"Alabama",'AZ'=>"Arizona",'AR'=>"Arkansas",'CA'=>"California",'CO'=>"Colorado",'CT'=>"Connecticut",'DE'=>"Delaware",'DC'=>"District of Columbia",'FL'=>"Florida",'GA'=>"Georgia",'ID'=>"Idaho",'IL'=>"Illinois", 'IN'=>"Indiana", 'IA'=>"Iowa",  'KS'=>"Kansas",'KY'=>"Kentucky",'LA'=>"Louisiana",'ME'=>"Maine",'MD'=>"Maryland", 'MA'=>"Massachusetts",'MI'=>"Michigan",'MN'=>"Minnesota",'MS'=>"Mississippi",'MO'=>"Missouri",'MT'=>"Montana",'NE'=>"Nebraska",'NV'=>"Nevada",'NH'=>"New Hampshire",'NJ'=>"New Jersey",'NM'=>"New Mexico",'NY'=>"New York",'NC'=>"North Carolina",'ND'=>"North Dakota",'OH'=>"Ohio",'OK'=>"Oklahoma", 'OR'=>"Oregon",'PA'=>"Pennsylvania",'RI'=>"Rhode Island",'SC'=>"South Carolina",'SD'=>"South Dakota",'TN'=>"Tennessee",'TX'=>"Texas",'UT'=>"Utah",'VT'=>"Vermont",'VA'=>"Virginia",'WA'=>"Washington",'WV'=>"West Virginia",'WI'=>"Wisconsin",'WY'=>"Wyoming");

function showOptionsDrop($array) {
  $string = "";
  foreach($array as $k => $v) {
    $string .= "<option value=\"" . $k . "\"" . $s . ">" . $v . "</option>\n";
  }
  return $string;
}
?>

<script type="text/javascript">
  function checkRadio(field) { for(var i=0; i < field.length; i++) { if(field[i].checked) return field[i].value; } return false; }
  function checkform (form) {
    if (form.firstname.value == "") { alert('First Name required.'); form.firstname.focus(); return false; }
    if (form.lastname.value == "") { alert('Last Name required.'); form.lastname.focus(); return false; }
    if (form.businessname.value == "") { alert('Women\'s Fitness Club Name required.'); form.businessname.focus(); return false; }
    if (form.address.value == "") { alert('Address required.'); form.address.focus(); return false; }
    if (form.city.value == "") { alert('City required.'); form.city.focus(); return false; }
    if (form.state.options[form.state.selectedIndex].value == "") { alert('State required.'); return false; }
    if (form.zip.value == "") { alert('Zip Code required.'); form.zip.focus(); return false; }
    if (form.phone.value == "") { alert('Phone Number required.'); form.phone.focus(); return false; }
    if (form.email.value == "") { alert('E-mail required.'); form.email.focus(); return false; }
    if (form.numberstudents.value == "") { alert('Number of female members required.'); form.numberstudents.focus(); return false; }
    if (form.hear.options[form.hear.selectedIndex].value == "") { alert('Please tell us how you heard about the Women\'s Fitness Sample Packs.'); return false; }
    submitbutton.disabled = true;
  }
  function flip(obj,submitbutton) {
    submitbutton.disabled = true;
    if (obj.checked) { submitbutton.disabled = false; }
  }
</script>

<h1>Women's Fitness Clubs: Sample Pack Sign Up</h2>

<ul>
  <li>The Women's Fitness Sample Packs are only for Women only Fitness Centers or Clubs that can distribute samples only to their female members.</li>
  <li>We can only ship samples to valid business locations.</li>
  <li>The Women's Fitness Sample Packs are only available in the United States.</li>
  <li>If you have any questions about the Women's Fitness Sample Pack program, please <a href="womens-fitness-clubs-faq.php">visit our FAQ page</a>.
</ul>
<br>

<form action="womens-fitness-clubs.php" method="POST" onSubmit="return checkform(this)">
  <div>
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" id="firstname">

    <div style="clear: both; height: 10px;"></div>

    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" id="lastname">

    <div style="clear: both; height: 10px;"></div>

    <label for="businessname">Women's Fitness Club Name:</label>
    <input type="text" name="businessname" id="businessname">

    <div style="clear: both; height: 10px;"></div>

    <label for="address">Address:</label>
    <input type="text" name="address" id="address"><br>
    <input type="text" name="address2" id="address2" style="margin: 3px 0 0 185px;"><br>
    <div style="clear: both; padding: 0 0 10px 185px; font-size: 80%; font-style: italic;">
      Sorry, we cannot ship to PO boxes
    </div>

    <label for="city">City:</label>
    <input type="text" name="city" id="city">

    <div style="clear: both; height: 10px;"></div>

    <label for="state">State:</label>
    <select name="state" id="state" style="float: left;">
      <option value="">Select...</option>
      <?php echo showOptionsDrop($states_arr); ?>
    </select>
    <div style="float: left; padding-left: 10px; font-size: 80%; font-style: italic;">
      Sorry, we cannot ship to Alaska or Hawaii
    </div>

    <div style="clear: both; height: 10px;"></div>

    <label for="zip">Zip Code:</label>
    <input type="text" name="zip" id="zip" style="width: 72px;">

    <div style="clear: both; height: 10px;"></div>

    <label for="phone">Phone Number:</label>
    <input type="text" name="phone" id="phone" style="width: 135px;">

    <div style="clear: both; height: 10px;"></div>

    <label for="email">Email:</label>
    <input type="text" name="email" id="email">

    <div style="clear: both; height: 10px;"></div>

    <label for="numberstudents" style="line-height: 1.2em;">Total number of female members:</label>
    <input type="text" name="numberstudents" id="numberstudents" style="margin-top: 0.4em; width: 25px">

    <div style="clear: both; height: 10px;"></div>

    <label for="hear" style="line-height: 1.2em;">How did you hear about the Women's Fitness Sample Packs?</label>
    <div style="float: left; width: 325px; height: 2.4em; line-height: 3.5em;">
      <select name="hear" id="hear">
        <option value="">Select...</option>
        <option value="Letter to club">Letter to club</option>
        <option value="Email to club">Email to club</option>
        <option value="Phone call to club">Phone call to club</option>
        <option value="Another club owner">Another club owner</option>
        <option value="Web search">Web search</option>
      </select>
    </div>

    <div style="clear: both; height: 10px;"></div>

    <label for="hear" style="line-height: 1.2em;">I have <a href="womens-fitness-clubs-terms-and-conditions.php">read and agree to the terms</a> to receive and distribute the free Women's Fitness Sample Packs</label>
    <input type="checkbox" name="agree" value="yes" onclick="flip(this,this.form['submit']);" style="margin-top: 2em;">

    <div style="clear: both; height: 10px;"></div>

    <span style="color: red;">Please verify your information is correct before you submit.</span><br>
    <br>

    <input type="submit" name="submit" value="Submit" disabled style="margin-left: 226px;">
  </div>
</form>

<?php
}

include "footer.php";
?>