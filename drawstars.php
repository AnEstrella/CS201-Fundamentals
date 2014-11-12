<html>
<head>
	<title></title>
</head>
<body>
<?php
	$x = array(4, 6, 1, 3, 5, 7, 25);
	function draw_stars ($param){
		$count = 0;
		for ($i=0; $i<count($param); $i++){
			$count =$param[$i];
			echo str_repeat('*', $count);
			echo '<br>'; 
	}}
	draw_stars($x);
?>




</body>
</html>