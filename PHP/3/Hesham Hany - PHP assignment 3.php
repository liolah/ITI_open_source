<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP assignment 3</title>
</head>
<body>
  <?php
  // Q1
  $fav_food = array("Joe" => "Smarties",
                    "Ahmed" => "Pringles",
                    "Cassie" => "Marmite crisps",
                    "Ben" => "Mr Kiplings cakes");
  foreach($fav_food as $key => $value){
    echo $key." likes ".$value."<br>";
  }
  ?>
  <hr style="background-color: skyblue; height: 2px;">
  <?php
  // Q2
  $value = "Pringles"; // Value to be deleted
  if(($key = array_search($value,$fav_food)) !== false){
    unset($fav_food[$key]);
  }
  echo "<p style=\"color: red\">The element with the value \"$value\" has been removed!</p>"; // To test if the deletion was successful
  foreach($fav_food as $key => $value){ 
      echo $key." likes ".$value."<br>";
    }
    ?>
    <hr style="background-color: skyblue; height: 2px;">
    <?php
    // Q3
    $elements = array(5,-3,'Hesham',0,7,"4",-2,'3');
    foreach($elements as $val){
      if(is_numeric($val)){
        if($val > 0){
          echo $val." is positive"."<br>";
        } else if($val < 0){
          echo $val." is negative"."<br>";
        } else {
          echo $val." is zero"."<br>";
        }
      } else {
        echo $val." is not a numeric value"."<br>";
      }
    }
    ?>
</body>
</html>