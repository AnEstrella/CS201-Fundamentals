<html>
<head>
	<title></title>
</head>
<body>
<?php
for($i=0; $i<=100; $i++) {
$number = rand(50,100);
if($number<70) 
{
	$grade = 'D';
} 
else if($number>=70 and $number<80)
{
	$grade = 'C';
}
else if($number>=80 and $number<90)
{
	$grade = 'B';
}
else if($number>=90 and $number<=100)
{
	$grade = 'A';
}
echo '<h1>' . 'Your Score: ' . $number . '/100' . '</h1>';
echo '<h2>' . 'Your grade is ' . $grade . '</h2>';
}
?>

</body>
</html>
