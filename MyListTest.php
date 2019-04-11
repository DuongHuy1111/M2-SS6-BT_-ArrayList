<?php
include 'MyList.php';
$myList = new MyList();
$newArray = ["Computer", 11, 10];

$myList->add(3, $newArray);
print_r($myList->getArrayElement());
?>
