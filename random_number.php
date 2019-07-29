<?php
    //Array
    $cars = array("Volvo", "BMW", "Audi", "Ferrari");
    // $cars = array("Volvo");
    $count = count($cars);

    if ($count == 1) {
        $randomnumber = str_pad(mt_rand(50 ,99999999), 8 ,substr(base_convert(sha1(uniqid(time())), 16, 36), 0, 8), STR_PAD_BOTH);
        echo $randomnumber;
        //echo "<br>String length: &nbsp;".strlen($randomnumber);
    } 
    elseif ($count > 1){
        for($x=0;$x < $count;$x++){
            $randomnumber = str_pad(mt_rand($x ,99999999), 8 ,substr(base_convert(sha1(uniqid(time())), 16, 36), 0, 8), STR_PAD_BOTH);
            echo $randomnumber;
            //echo "<br>String length: &nbsp;".strlen($randomnumber);
            //echo "<br>";
        }   
    }
    
    echo "ab";
?>