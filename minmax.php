<html>
<head>
	<title></title>
</head>
<body>

<?php
$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 

function get_max_and_min($param1)
{
$max = $param1[0];
$min = $param1[0];
for ($i=0; $i<count($param1); $i++)
	{
	if($max<$param1[$i]){
		$max = $param1[$i];}
	if($min>$param1[$i]){
		$min = $param1[$i];}
	}



	echo $max . '<br>'; 
	echo $min;
}

get_max_and_min($sample); 

?>

</body>
</html>