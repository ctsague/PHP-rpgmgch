<?php require_once 'Products.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Table Products</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Intitulé</th>
			<th>Prix</th>
			<th>Provenance</th>
			<th>Marque</th>
			<th>Date Expiration</th>
		</tr>
	<?php foreach ($tabLegumeVtement as $entry):?>	
		<tr>
			<td><?=$entry->getIdProd();?></td>
			<td><?=$entry->getNameProd();?></td>
			<td><?=$entry->getPriceProd();?></td>
			<td><?=(method_exists($entry, 'getProductorName'))?$entry->getProductorName():null;?></td>
			<td><?=(method_exists($entry, 'getBrand'))?$entry->getBrand():null;?></td>
			<td><?=(method_exists($entry, 'getExpireAt')) ?$entry->getExpireAt():null;?></td>
		</tr>
		<?php endforeach; ?>		
	</table>
	
</body>
</html>
