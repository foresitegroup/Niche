<?php
$PageTitle = "Yoga Instructor: Yoga Gift Pack Sign Up";
$Description = "";
$Keywords = "";
$HeaderImage = "header-adult.jpg";
$SideMenu = "2";
include "header.php";
include_once "inc/dbconfig.php";

if (isset($_POST['submit'])) {
  mysql_query("INSERT INTO yoga (firstname, lastname, businessname, addresstype, address, address2, city, state, zip, phone, email, numberstudents, instructor, hear) VALUES (
              '" . mysql_real_escape_string(stripslashes($_POST['firstname'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['lastname'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['businessname'])) . "',
              '" . $_POST['addresstype'] . "',
              '" . mysql_real_escape_string(stripslashes($_POST['address'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['address2'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['city'])) . "',
              '" . $_POST['state'] . "',
              '" . mysql_real_escape_string(stripslashes($_POST['zip'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['phone'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['email'])) . "',
              '" . mysql_real_escape_string(stripslashes($_POST['numberstudents'])) . "',
              '" . $_POST['instructor'] . "',
              '" . $_POST['hear'] . "'
  )");
  
  //$SendTo = "m.lippert@remedicreative.com";
  //$Subject = "Request for Yoga Gift Pack";
  //$From = "From: Yoga Form <yogaform@nichesampling.com>\r\n";
  //$From .= "Reply-To: " . $_POST['email'] . "\r\n";
  //
  //$Message = $_POST['firstname'] . " " . $_POST['lastname'] . "\n";
  //if (!empty($_POST['businessname'])) $Message .= $_POST['businessname'] . "\n";
  //if (!empty($_POST['addresstype'])) $Message .= $_POST['addresstype'] . "\n";
  //if (!empty($_POST['address'])) $Message .= $_POST['address'] . "\n";
  //if (!empty($_POST['address2'])) $Message .= $_POST['address2'] . "\n";
  //if (!empty($_POST['city'])) $Message .= $_POST['city'];
  //if (!empty($_POST['city']) && !empty($_POST['state'])) $Message .= ", ";
  //if (!empty($_POST['state'])) $Message .= $_POST['state'];
  //if (!empty($_POST['city']) || !empty($_POST['state']) && !empty($_POST['zip'])) $Message .= " ";
  //if (!empty($_POST['zip'])) $Message .= $_POST['zip'];
  //if (!empty($_POST['city']) || !empty($_POST['state']) || !empty($_POST['zip'])) $Message .= "\n";
  //if (!empty($_POST['phone'])) $Message .= $_POST['phone'] . "\n";
  //if (!empty($_POST['email'])) $Message .= $_POST['email'] . "\n";
  //if (!empty($_POST['numberstudents'])) $Message .= "Total number of Yoga and Pilates students: " . $_POST['numberstudents'] . "\n";
  //if (!empty($_POST['instructor'])) $Message .= "Active Yoga and/or Pilates instructor? " . $_POST['instructor'] . "\n";
  //if (!empty($_POST['hear'])) $Message .= "How did you hear about the Yoga Gift Packs? " . $_POST['hear'] . "\n";
  //
  //$Message = stripslashes($Message);
  //
  //mail($SendTo, $Subject, $Message, $From);
  
  echo "Your request has been sent!  Thank you for your interest.<br>";
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
    if (form.businessname.value == "") { alert('Business Name required.'); form.businessname.focus(); return false; }
    if (checkRadio(form.addresstype) == "") { alert("Please indicate if this is a commercial or residential address."); return false; }
    if (form.address.value == "") { alert('Address required.'); form.address.focus(); return false; }
    if (form.city.value == "") { alert('City required.'); form.city.focus(); return false; }
    if (form.state.options[form.state.selectedIndex].value == "") { alert('State required.'); return false; }
    if (form.zip.value == "") { alert('Zip Code required.'); form.zip.focus(); return false; }
    if (form.phone.value == "") { alert('Phone Number required.'); form.phone.focus(); return false; }
    if (form.email.value == "") { alert('E-mail required.'); form.email.focus(); return false; }
    if (form.numberstudents.value == "") { alert('Number of students required.'); form.numberstudents.focus(); return false; }
    if (checkRadio(form.instructor) == "") { alert("Please indicate if you are an active instructor."); return false; }
    if (form.hear.options[form.hear.selectedIndex].value == "") { alert('Please tell us how you heard about the Yoga Gift Packs.'); return false; }
    submitbutton.disabled = true;
  }
  function flip(obj,submitbutton) {
    submitbutton.disabled = true;
    if (obj.checked) { submitbutton.disabled = false; }
  }
</script>

<h1>Yoga Instructor: Yoga Gift Pack Sign Up</h2>

<ul>
  <li>The Yoga Gift Packs are only for active Yoga and/or Pilates instructors.</li>
  <li>Unfortunately, we can no longer ship to residential addresses; we can only accommodate shipping to valid business locations.</li>
  <li>The Yoga Gift Packs are only available in the United States.</li>
  <li>If you have any questions about the Yoga program, please <a href="yoga-faq.php">visit our FAQ page</a>.
</ul>
<br>

<form action="yoga-sign-up.php" method="POST" onSubmit="return checkform(this)">
  <div>
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" id="firstname">
      
    <div style="clear: both; height: 10px;"></div>
    
    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" id="lastname">
    
    <div style="clear: both; height: 10px;"></div>
    
    <label for="businessname">Business Name:</label>
    <input type="text" name="businessname" id="businessname">
    
    <div style="clear: both; height: 10px;"></div>
    
    <div style="padding-left: 185px; width: 325px;">
      Commercial Address <input type="radio" name="addresstype" id="commercial" value="Commercial Address">
      &nbsp; &nbsp; &nbsp;
      Residential Address <input type="radio" name="addresstype" id="residential" value="Residential Address">
    </div>
    
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
    
    <label for="numberstudents" style="line-height: 1.2em;">Total number of Yoga and Pilates students:</label>
    <input type="text" name="numberstudents" id="numberstudents" style="margin-top: 0.4em; width: 25px">
    
    <div style="clear: both; height: 10px;"></div>
    
    <label for="instructor" style="line-height: 1.2em;">Are you an active Yoga and/or Pilates instructor?</label>
    <div style="float: left; width: 325px; height: 2.4em; line-height: 2.4em;" id="instructor">
      Yes <input type="radio" name="instructor" id="yes" value="Yes">
      &nbsp; &nbsp; &nbsp;
      No <input type="radio" name="instructor" id="no" value="No">
    </div>
    
    <div style="clear: both; height: 10px;"></div>
    
    <label for="hear" style="line-height: 1.2em;">How did you hear about<br>the Yoga Gift Packs?</label>
    <div style="float: left; width: 325px; height: 2.4em; line-height: 2.4em;">
      <select name="hear" id="hear">
        <option value="">Select...</option>
        <option value="Angels Magazine">Angels Magazine</option>
        <option value="Email">Email</option>
        <option value="Website">Website</option>
        <option value="Training Session">Training Session</option>
        <option value="Another Instructor">Another Instructor</option>
        <option value="Fitness Trade Show">Fitness Trade Show</option>
        <option value="Other">Other</option>
      </select>
    </div>
    
    <div style="clear: both; height: 10px;"></div>
    
    <label for="hear" style="line-height: 1.2em;">I have <a href="yoga-terms-and-conditions.php">read and agree to the terms</a> to receive and distribute the free Yoga Gift Packs</label>
    <input type="checkbox" name="agree" value="yes" onclick="flip(this,this.form['submit']);" style="margin-top: 1.3em;">
    
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