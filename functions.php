
<?php
$message = "xkcd Password Generator";
/* Defining a PHP Function */
$number =$_POST["optradio1"];
$symCount = $_POST["optradio2"];
/*validate that the number field has a number and number is less than 9*/
if (empty($_POST["name2"]) OR !is_numeric($_POST["name2"]) OR (int)$_POST["name2"]> 9){
  $errName = 'Please enter a number between 1-9';
}
function writeMessage() {
  /* get the word array from the stop_words.php file*/
    include "stop_words.php";
  /* if the field name is not empty , is a number */
    if (!empty($_POST["name2"]) && is_numeric($_POST["name2"]) && (int)$_POST["name2"]< 10){
        $word_count = (int)$_POST["name2"];
        for ($i = 0; $i < $word_count; $i++) {
          if ($i == 0) {
            Echo $stop_words[mt_rand(0, 50)];
          }
          else
          {
            Echo "-" . $stop_words[mt_rand(0, 50)];
          }
      }
      if(isset($_POST['optradio1'])) echo(mt_rand(0, 9));
      $rn = chr(33 + mt_rand(0, 14));
      if(isset($_POST['optradio2'])) echo $rn;
      /*set form fields*/
      $_GET["name2"] = $word_count;
      if(isset($_POST['optradio1'])){
        $status = 'checked';
        }
      }
}
?>
