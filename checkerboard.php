<!doctype html>
<head>

</head>
<style type="text/css">
table {
	outline: 1px solid black;
	border-spacing: 0px;
	
}
table td {
	height: 50px;
	width: 50px;
}

</style>
<body>



<table> <tr>
<?php

for ($j=0;$j<4;$j++) {
	for ($i=0;$i<8;$i++)
	{if ($i%2==0) {
?>		<td bgcolor = "red">
		</td>
<?	}
 else { ?> <td bgcolor = "black">
		</td>
		
	<? }} ?>
	</tr>

<?	for ($i=0;$i<8;$i++)
	{if ($i%2==0) {
	?>	<td bgcolor = "black">
		</td>
<?	}
 else { ?> <td bgcolor = "red">
		</td>
		
	<? }} ?>
	</tr>
<? } ?>



</table>


</body>
</html>