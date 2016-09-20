<?php

$message = "xkcd Password Generator";
/* Defining a PHP Function */

function writeMessage() {
  /* First method to create array. */
    $word_count = (int)$_POST["name2"];
    $words = "start,startin,starting,station,Stalker,SHOWER,staples,Stiffle,Steerin,StÄblesstart,startin,starting,station,Stalker,SHOWER,staples,Stiffle,Steerin,StÄbles";
    $keywords = preg_split('/[,]/', $words);

    foreach($keywords as $val){
      if (strlen($val) == $word_count){
        echo $val . "-";
      }
      #
    }
}

?>
