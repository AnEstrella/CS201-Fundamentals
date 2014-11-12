<html>
<head>
	<title></title>
<style>

table {
	border-collapse: collapse;
	border: 1px solid gray;
}

table tr, td {
	border: 1px solid gray;
	padding: 5px;
}

thead {
	font-weight: bold;
} 
</style>
</head>
<body>

<table>

	<thead>
		<td></td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>7</td>
		<td>8</td>
		<td>9</td>
	</thead>

<?php
for ($i = 1; $i <= 9; $i++ ) {  
  ?><tr>
  	<td><?= $i ?></td>
  	<td><?= $i ?></td>
<?
   for ( $j = 2; $j <= 9; $j++ ) { 
   ?><td><?= $i * $j ?></td>
    <?}?>

   </tr>
<?}?> 

</table>


</body>
</html>