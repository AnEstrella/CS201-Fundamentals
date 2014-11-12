<html>
<head>
	<title></title>
</head>
<body>


<h1>Using for loops</h1>
<select>
	<?php
$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
for ($i=0; $i<count($states); $i++) {
	echo '<option>' . $states[$i] . '</option>';
}
?>
</select>

<h1>Using foreach</h1>
<select>
	<?php
foreach ($states as $value) {
	echo '<option>' . $value . '</option>';
}
?>
</select>

<h1>Insert 3 new states in array</h1>
<select>
	<?php
$states2 = array('CA', 'WA', 'VA', 'UT', 'AZ');
$newstates = array('NJ','NY','DE');
for ($k=0; $k<count($newstates); $k++) {
	$states2[] = $newstates[$k];}

for ($j=0; $j<count($states2); $j++) {
	echo '<option>' . $states2[$j] . '</option>';}
	?>
</select>

</body>
</html>