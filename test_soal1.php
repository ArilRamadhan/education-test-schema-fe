var data 1
<?php
$array1=array(1, 1, 1, 2, 2, 4, 1, 1);
print_r($array1);
$a=array_count_values($array1);
foreach($a as $key =>$val){
    if($val==max($a)){
        echo"total data paling banyak keluar adalah[$key]dengan banyak data $val<br/>";
    }
}
?>

var data 2
<?php
$array2=array(2, 1, 2, 2, 2, 8, 1, 1);
print_r($array2);
$a=array_count_values($array2);
foreach($a as $key =>$val){
    if($val==max($a)){
        echo"total data paling banyak keluar adalah[$key]dengan banyak data $val<br/>";
    }
}
?>

var data 3
<?php
$array3=array(3, 3, 3, 3, 2, 4, 1, 1);
print_r($array3);
$a=array_count_values($array3);
foreach($a as $key =>$val){
    if($val==max($a)){
        echo"total data paling banyak keluar adalah[$key]dengan banyak data $val<br/>";
    }
}
?>