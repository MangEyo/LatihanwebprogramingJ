<?php
    $age= array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  //print_r($age);
    
    //echo "Umur Dari Peter Adalah ".$age ["Peter"];

    foreach($age as $p => $u){
        echo $p. " Umurnya ". $u;
        echo "<br>";
    }