<html>
<head>
	<title></title>
</head>
<body>

<h2>Starting the program</h2>
<?php
$headcount=0;
$tailcount=0;
for ($i=1; $i<5001; $i++){
$toss = rand(0,1);

if ($toss == 0) {
	$headcount +=1;
	echo 'Attempt #' . $i . ': Throwing a coin... Its a head! ... 
	Got' . $headcount . 'head(s) so far and' . $tailcount . 'tail(s) so far' . '<br>';
}
else {
	$tailcount +=1;
	echo 'Attempt #' . $i . ': Throwing a coin... Its a tail! ... 
	Got' . $headcount . 'head(s) so far and' . $tailcount . 'tail(s) so far' . '<br>';
}
}
?>
<h2>Ending the program - thank you!</h2>
</body>
</html>