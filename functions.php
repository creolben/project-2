
<?php
$message = "xkcd Password Generator";
/* Defining a PHP Function */
$number =$_POST["optradio1"];
$symCount = $_POST["optradio2"];

function writeMessage() {
  /* get the word array from the stop_words.php file*/
    include "stop_words.php";
  /* if the field name is not empty */
    if (!empty($_POST["name2"])){
        $word_count = (int)$_POST["name2"];
        for ($i = 0; $i < $word_count; $i++) {
          if ($i == 0) {
            #echo $keywords[$i];
            Echo $stop_words[mt_rand(0, 50)];
          }
          else
          {
            #echo "-" . $keywords[$i];
            Echo "-" . $stop_words[mt_rand(0, 50)];
          }
      }
      if(isset($_POST['optradio1'])) echo(mt_rand(0, 9));
      $rn = chr(33 + mt_rand(0, 14));
      if(isset($_POST['optradio2'])) echo $rn;
      }
      /*set form fields*/
      $_GET["name2"] = $word_count;
      if(isset($_POST['optradio1'])){
        $status = 'checked';
      }
}
?>
