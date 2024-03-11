<!-- 
    Three types of array
    1) Index Array
    2) Assosiative Array
    3) Multidimentional Array
 -->
<?php

    // $i = array("Neha","Tanvi","Drashti");

    // $neha = count($i);
    // for($x=0; $x<$neha; $x++)
    // {
    //     echo $i[$x]."<br>";
    // }
    
    // $i = array("Neha"=>"18","Tanvi"=>"19","Dhaval"=>"18","Sanskar"=>"29");

    
    // foreach($i as $speed=>$computer)
    // {
    //     echo $speed.$computer."<br>";
    // }

    $Neha = array(
        array("Thar",45,23), 
        array("BMW",67,43),
        array("scorpio",90,45)
    );

    echo $Neha[2][1];

?>