<html>
<head>
	<title></title>
<style>
.black {
	background-color: black;
	color: white;
}
table {
	border-collapse: collapse;
	border: 1px solid gray;
}

table td, tr {
	border: 1px solid gray;
}

thead {
	font-weight: bold;
}
</style>
</head>
<body>

<table>
	<thead>
		<td>User #</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Full Name</td>
		<td>Full Name in upper case</td>
		<td>Length of name</td>
	</thead>
		<?php
		   $users = array( 
		   array('first_name' => 'Michael', 'last_name' => 'Choi '),
		   array('first_name' => 'John', 'last_name' => 'Supsupin'),
		   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
		   array('first_name' => 'KB', 'last_name' => 'Tonel'),
		   array('first_name' => 'Andrea', 'last_name' => 'Estrella'),
		   array('first_name' => 'Spongebob', 'last_name' => 'Squarepants'),
		   array('first_name' => 'Bruce', 'last_name' => 'Wayne'),
		   array('first_name' => 'Clark', 'last_name' => 'Kent'),
		   array('first_name' => 'Ash', 'last_name' => 'Catchem'),
		   array('first_name' => 'Leonardo', 'last_name' => 'Dicaprio'),
		   array('first_name' => 'Leonardo', 'last_name' => 'Davinci'), 
		   array('first_name' => 'Sebastian', 'last_name' => 'Bach'),
		   array('first_name' => 'Vincent', 'last_name' => 'Vangogh'),
		   array('first_name' => 'Richard', 'last_name' => 'Parker'),
		);
		  $count = 0;
		  foreach ($users as $user) {
		  $count +=1;
		  if ($count %5 ==0) {
		  		?> <tr class = "black"> <?}
		  else {?>  <tr> <?}?>
		   				<td><?= $count ?></td> 
		   				<td><?= $user['first_name'] ?> </td> 
		   				<td><?= $user['last_name'] ?> </td>	
		   				<td><?= $user['first_name'] . " " . $user['last_name'] ?></td> 
		   				<td><?= strtoupper($user['first_name'] . " "  . $user['last_name']) ?></td>
		   				<td><?= strlen(trim($user['first_name']) . " " . trim($user['last_name'])) ?></td>
		   			 </tr>
			<?}
		?>
</table>




</body>
</html>