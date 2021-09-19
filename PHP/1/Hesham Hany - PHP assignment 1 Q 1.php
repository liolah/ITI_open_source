  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PHP assignment 1 Q 1</title>
  </head>
  <body>
    <?php 
      $day = date('w');

    // IF... Else conditional statement to find a day of date and print a welcome message according to the day  
      if($day == 0){
        echo "Happy Sunday!";
      } elseif($day == 1){
        echo "Happy Monday!";
      } elseif($day == 2){
        echo "Happy Tuesday!";
      } elseif($day == 3){
        echo "Happy Wednesday!";
      } elseif($day == 4){
        echo "Happy Thursday!";
      } elseif($day == 5){
        echo "Happy Friday!";
      } else {
        echo "Happy Saturday!";
      } 
    // Switch statement
      // switch($day){
      //   case 0:
      //     echo "Happy Sunday!";
      //     break;
      //   case 1:
      //     echo "Happy Monday!";
      //     break;
      //   case 2:
      //     echo "Happy Tuesday!";
      //     break;
      //   case 3:
      //     echo "Happy Wednesday!";
      //     break;
      //   case 4:
      //     echo "Happy Thursday!";
      //     break;
      //   case 5:
      //     echo "Happy Friday!";
      //     break;
      //   default:
      //     echo "Happy Saturday!";
      // }
    // Using "l" parameter in date() (not conditional but.. a lot efficient)
        // echo "Happy ". date("l")."!";
?>
  </body>
  </html>