<?php
 $a=[];
 for($i=0;$i<100;$i++){
     $a[]=rand(-100,100);
     echo $a[$i]." ";
 }
 $count=0;
 for($i=0;$i<100;$i++){
     if($a[$i]==$a[$i+1]){
        $count++;
        echo "<p>Число который  парный  на массиве:$a[$i]</p>";
        echo "<p>Место пар на массиве:$i</p>";
     }
 }
 echo "<p>Число пар на массиве:$count</p>";
?>