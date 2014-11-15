<?php

function rand_multiply(){
$number = rand(1,100);
$number2 = rand(1,100);
$product = $number * $number2;

echo $number . 'x' . $number2 . '=' . $product;
}

?>

$(document).ready(function(){
	console.log('ready');
	alert('<?= rand_multiply() ?>');
});