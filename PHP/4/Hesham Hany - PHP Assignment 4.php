<!DOCTYPE html>
<!-------------------------------------------------------------------- Hesham Hany ------------------------------------------------------------->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP assignment 4</title>
  <style>
    th, th {
      padding: 5px 10px;
    }
  </style>
</head>
<body style="font-family: calibri;">
  <!-- Q1 -->
  <form method="POST" action="<?php echo htmlspecialchars("$_SERVER[PHP_SELF]"); ?>">
    <table>
      <tr><p style="color: skyblue; font-size: 18px;">User registration form:</p></tr>
      <tr>
        <td><label for="fn">First Name:</label></td>
        <td><input type="text" id="fn" name="fname" maxlength="20"></td>
      </tr>
      <tr>
        <td><label for="ln">Last Name:</label></td>
        <td><input type="text" id="ln" name="lname" maxlength="20"></td>
      </tr>
      <tr>
        <td><label for="un">User Name:</label></td>
        <td><input type="text" id="un" name="uname" maxlength="40"></td>
      </tr>
      <tr>
        <td><label for="em">Email:</label></td>
        <td><input type="email" id="em" name="email" maxlength="40"></td>
      </tr>
      <tr>
        <td><label for="pass">Password:</label></td>
        <td><input type="password" id="pass" name="password" maxlength="30"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="sub" value="Create User" style="background-color: skyblue; color:white; border-color: skyblue;"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="reset" style="background-color: lightgrey; color:white; border-color: lightgrey;"></td>
      </tr>
    </table>
  <?php 
  ///Q2
  // Creating the database and the users table
  $serverName = 'localhost';
  $userName = 'root';
  $password = '';
  $dbname = "userAccounts";
  
  $connection = mysqli_connect($serverName,$userName,$password);
  if(!$connection){
    die("Connection failed: ".mysqli_connect_error());
  }
  if(!mysqli_select_db($connection,$dbname)){
    // echo "Error selecting database: ".mysqli_error($connection)."<br>";
    // echo "Creating database $dbname...."."<br>";
    if(mysqli_query($connection,'Create database '.$dbname)) {
      // echo "Database created successfully"."<br>";
      mysqli_select_db($connection,$dbname);
      // echo "Database $dbname selected"."<br>";
    } else {
      // echo "Error creating database: ".mysqli_error($connection);
    }
  }
  $sql = "Create table users (
    id int unsigned auto_increment primary key,
    fname varchar(20) not null,
    lname varchar(20) not null,
    uname varchar(40) not null,
    email varchar(40) not null,
    password varchar(50) not null
  );";
  if(mysqli_query($connection,'select * from users') !== false){
    // echo "Table 'users' already exist!";
  } else {
    if(mysqli_query($connection,$sql)){
      // echo "Table 'users' was created successfully";
    } else {
      // echo "Error creating table 'users': ".mysqli_error($connection);
    }
  }
  ///Q3
  // $sql = "insert into users (fname,lname,uname,email,password) values
  //   ('default1','default1','default1','default1','default1'),
  //   ('default2','default2','default2','default2','default2'),
  //   ('default3','default3','default3','default3','default3'),
  //   ('default4','default4','default4','default4','default4'),
  //   ('default5','default5','default5','default5','default5')
  //   ;";
  //   if (mysqli_query($connection, $sql)){
  //     echo "Default User accounts was created successfully!";
  //   } else {
  //     echo "Error: ". mysqli_error($connection);
  //   }
  /// Q4
  // Creating new user
  if (isset($_POST['sub'])) {
    $fname = prep_input($_POST['fname']);
    $lname = prep_input($_POST['lname']);
    $uname = prep_input($_POST['uname']);
    $email = prep_input($_POST['email']);
    $password = prep_input($_POST['password']);
    $sql = "insert into users (fname,lname,uname,email,password) values
    ('$fname','$lname','$uname','$email','$password');";
    if (mysqli_query($connection, $sql)){
      echo '<hr style="height: 2px; background-color: skyblue;">'."User account was created successfully!";
    } else {
      echo "Error: ". mysqli_error($connection);
    }
  }
  function prep_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <hr style="height: 2px; background-color: skyblue;">
  <p>Press Retrieve to retrieve users' data: <input type="submit" name="ret" value="Retrieve Useres" style="background-color: grey; color:white; border-color:grey;"></p>
  <?php 
  // Retrieve users data
  if (isset($_POST['ret'])) {
    $sql = "select * from users;";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result) > 0){
      echo "<table border='1' style='text-align: center;'>";
      echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>User Name</th><th>Email</th><th>Password</th></tr>";
      while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>". $row['id']. "</td><td>". $row['fname']. "</td><td>". $row['lname']. "</td><td>". $row['uname']. "</td><td>". $row['email']. "</td><td>". $row['password']. "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "<span style='color: red; margin-left:20px;'>0 results</span>";
    }
  }
  ?>
  <hr style="height: 2px; background-color: skyblue;">
  <div><p>To Update a certain user' data: enter the user id, select the column you want to update, 
    <br> enter the value you want to update to, and press update</p>
  <input type="number" name="up" placeholder="User ID">
  <select name="column">
    <option value="" hidden selected>Select Column</option>
    <option value="id">ID</option>
    <option value="fname">First Name</option>
    <option value="lname">Last Name</option>
    <option value="uname">User Name</option>
    <option value="email">Email</option>
    <option value="password">Password</option>
  </select>
  <input type="text" name="upval" placeholder="Updated Value">
  <input type="submit" name="update" value="Update User" style="background-color: green; color:white; border-color: green;"></div>
  <br>
  <?php 
    // Update users data
    if (isset($_POST['update'])) {
      $id = $_POST['up'];
      $col = $_POST['column'];
      $val = $_POST['upval'];
      $sql = "update users set ". $col."= '". $val."' where id = ". $id;
      if(mysqli_query($connection,$sql)){
        echo "User was updated successfully";
      } else {
        echo "Data update error: ". mysqli_error($connection);
      }
    }
  ?>
  <hr style="height: 2px; background-color: skyblue;">
  <div><p>To delete a certain user, enter the user id and press delete:</p>
  <input type="number" name="duser" placeholder="User ID">
  <input type="submit" name="del" value="Delete User" style="background-color: red; color:white; border-color: red;"></div>
  <br>
  <?php 
  // Delete users data
  if (isset($_POST['del'])) {
    $id = $_POST['duser'];
    $sql = "delete from users where id=". $id .";";
    if(mysqli_query($connection,$sql)){
      echo "User was deleted successfully";
    } else {
      echo "Deletion error: ". mysqli_error($connection);
    }
  }
  ?>
  </form>
</body>
</html>