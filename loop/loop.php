<?php
$i = 2;
while($i<10){
echo $i.'단<br>';
$s = 1;
while($s<10){
echo $i.'*'.$s .'='. $i*$s.'<br>';
$s++;
}
$i= $i + 1;
}
?>