<?php
$a = ['1', '2'];

$a = array('1', '2');



for($i=0; $i < count($a); $i++) {
    $b = $a[$i];
    print $b;
}
print "\n\n-------------------\n\n";


$ccc = array();
$ccc['color'] = "red";
$ccc['item_name'] = "abc";

foreach($ccc as $k => $b) {
    print $k;
    print ":";
    print $b;
    print "\n";
}

?>