<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP asseingment 2</title>
</head>
<body style="font-family: calibri;">
  <?php
    $fname = $lname = $address = $country = $gender = $username = $password = $department = "";
    $fnameErr = $lnameErr = $addressErr = $countryErr = $genderErr = $usernameErr = $passwordErr = $departmentErr = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["fname"])) {
        $fnameErr = "First name is required";
      } else {
        $fname = prep_input($_POST["fname"]);
      } 
    }
    if (empty($_POST["lname"])) {
      $lnameErr = "Last name is required";
    } else {
      $lname = prep_input($_POST["lname"]);
    }  
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = prep_input($_POST["address"]);
  }
  if (empty($_POST["country"])) {
    $countryErr = "Country is required";
  } else {
    $country = $_POST["country"];
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }
  if (empty($_POST["username"])) {
    $usernameErr = "User name is required";
  } else {
    $username = $_POST["username"];
  }  
if (empty($_POST["password"])) {
  $passwordErr = "Password is required";
} else {
  $password = $_POST["password"];
}
if (empty($_POST["department"])) {
  $departmentErr = "Department is required";
} else {
  $department = prep_input($_POST["department"]);
}
function prep_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <form method="POST" action="<?php echo htmlspecialchars("$_SERVER[PHP_SELF]");?>">
    <table>
      <tr>
        <td><label for="fn">First Name:</label></td>
        <td><input type="text" name="fname" id="fn" value="<?php echo $fname ?>">
        <p style="color: red; display:inline; margin-left: 10px;"><?php echo $fnameErr?></p></td>
      </tr>
      <tr>
        <td><label for="ln">Last Name:</label></td>
        <td><input type="text" name="lname" id="ln" value="<?php echo $lname ?>">
        <p style="color: red; display:inline; margin-left: 10px;"><?php echo $lnameErr?></p></td>
      </tr>
      <tr>
        <td><label for="add">Address:</label></td>
        <td><textarea name="address" id="add" rows="4" ><?php echo $address ?></textarea></td>
      </tr>
      <tr>
        <td><label for="count">Country:</label></td>
        <td><select id="count" name="country">
          <option value="" selected hidden disabled>Select country</option>
          <option value="eg" <?php if($country == "eg"){echo "Selected";} ?>>Egypt</option>
          <option value="usa" <?php if($country == "usa"){echo "Selected";} ?>>USA</option>
          <option value="ca" <?php if($country == "ca"){echo "Selected";} ?>>Canada</option>
        </select><p style="color: red; display:inline; margin-left:70px;"><?php echo $countryErr?></p></td>
      </tr>
      <tr>
        <td><label for="gen">Gender:</label></td>
        <td><input type="radio" id="male" name="gender" value="male" <?php if($gender == "male"){echo "checked";} ?>>
        <label for="male" style="margin-right: 10px;">Male</label>
        <input type="radio" id="female" name="gender" value="female" <?php if($gender == "female"){echo "checked";} ?>>
        <label for="female">Female</label>
        <p style="color: red; display:inline; margin-left: 33px;"><?php echo $genderErr?></p></td>
      </tr>
      <tr>
        <td rowspan="2"><label>Skills:</label></td>
        <td><input type="checkbox" id="chkbx1" name="php" value="php">
            <label for="chkbx1" style="margin-right: 19px;">PHP</label>
            <input type="checkbox" id="chkbx2" name="j2se" value="j2se">
            <label for="chkbx2">J2SE</label></td>
      </tr>
      <tr>
        <td><input type="checkbox" id="chkbx3" name="mysql" value="mysql">
            <label for="chkbx3">MySQL</label>
            <input type="checkbox" id="chkbx4" name="postgreesql" value="postgreesql">
            <label for="chkbx4">PostgreeSQL</label></td>
      </tr>
      <tr>
        <td><label for="un">User Name:</label></td>
        <td><input type="text" name="username" id="un" value="<?php echo $username ?>">
        <p style="color: red; display:inline; margin-left: 10px;"><?php echo $usernameErr?></p></td>
      </tr>
      <tr>
        <td><label for="pass">Password:</label></td>
        <td><input type="password" name="password" id="pass" value="<?php echo $password ?>">
        <p style="color: red; display:inline; margin-left: 10px;"><?php echo $passwordErr?></p></td>
      </tr>
      <tr>
        <td><label for="dep">Department:</label></td>
        <td><input type="text" name="department" id="dep" placeholder="OpenSource" value="<?php echo $department ?>">
        <p style="color: red; display:inline; margin-left: 10px;"><?php echo $departmentErr?></p></td>
      </tr>
      <tr>
        <td></td>
        <td><table><tr>
              <td><table>
                <tr><td style="text-align: center;">Sh68Sa</td></tr>
                <tr><td><input type="text" name="cap"></td></tr>
                <tr><td><input type="submit">
                        <input type="reset"></td></tr></table>
              </td>
              <td>Please insert the <br> code in the below <br> box.</td>
            </tr></table></td>
      </tr>
    </table>
  </form>
  <br>
  <hr style="height: 3px; background-color: skyblue;">
  <br>
  <?php 
  echo "Thanks ".($gender == ''? '' : ($gender == 'male'? "Mr. " : "Mrs. ")).$fname." ".$lname;
  echo "<br>";
  echo  "   Please review your information:";
  echo "<br>";
  echo "<br>";
  echo "Name: ".$username;
  echo "<br>";
  echo "Address: ".$address;
  echo "<br>";
  echo "Department: ".$department;
  ?>
</body>
</html>