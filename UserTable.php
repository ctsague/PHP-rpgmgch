<?php $Users = require('Users.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users Table</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>DateCreate</th>
		</tr>
		<?php foreach($tabClients as $client) :?>	
		<tr>
			<td><?=$client->getId(); ?></td>
			<td><?=$client->getEmail(); ?></td>
			<td><?=$client->getCreateAt(); ?></td>
		</tr>
		<?php endforeach; ?>	
	</table>	
</body>
</html>