<!-- elseif, array -->

<?php
$day = 'Saturdar';
if($day === 'Saturday'){
    echo 'Today is fridoy';
// }elseif($day === 'Saturday' || $day === 'Fridoy){
}else if($day === 'Saturday' | $day === 'Friday'){
    echo 'Today is holyday';
}else{
    echo 'Today is official day.';
};

// array
echo "<br/><br>";
$array = ['fahim', 'maihm', 30,2,3];
echo $array[1];