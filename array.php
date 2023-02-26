<?php
 $result = array(array('Ahmed',500,'A'),array('Zahid', 400 , 'B'),array('Qasim',300, 'c'));
 echo  "Name "," Marks "," grade ","<br/>";
 for ($i = 0 ; $i < 3 ; $i++) {
    for($j = 0 ; $j < 3 ; $j++) {
        echo $result [$i][$j];
    }
    echo "<br />";
 }
 echo $result [0][0] . "" . $result [0][1] . "" . $result [0][2] . "<br />";
 echo $result [1][0] . "" . $result [1][1] . "" . $result [2][2] . "<br />";
 echo $result [2][0] . "" . $result [2][1] . "" . $result [2][2] . "<br />";
 ?>