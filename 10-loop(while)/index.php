<!-- while loop -->

<?php
    $array = [
        12,3,5,65,6,3,6
    ];
    $i=0;
    while($i < count($array) ){
        echo $array[$i], ",";
        $i++;
    }
?>