<?php 
require_once('Users.php');
require_once('Products.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mes Achats</title>
</head>
<body>
	<h3>Votre premier utilisateur achète un de vos légume</h3>
	<?php echo $client1->buy($legume1);?>
	<tr>
		Mon Client1 achète : 
		<td><?=$legume1->getNameProd();?></td>
		<td><?=$legume1->getPriceProd();?></td>
		<td><?=(method_exists($legume1, 'getProductorName'))?$legume1->getProductorName():null;?></td>
		<td><?=(method_exists($legume1, 'getExpireAt')) ?$legume1->getExpireAt():null;?></td>
	</tr>
	<div><?= 'BillAmout client1 : ' .$client1->getBillAmount(). ' € ' ?></div>

	<h3>Votre second utilisateur achète un légume et un vêtement</h3>
		<?php echo $client2->buy($legume2);?> 
		<?php echo $client2->buy($cloth1);?> 
	<tr>
		Mon Client2 achète : 
		<td><?=$legume2->getNameProd();?></td>
			<td><?=$legume2->getPriceProd();?></td>
			<td><?=(method_exists($legume2, 'getProductorName'))? $legume2->getProductorName():null;?></td>
			<td><?=(method_exists($legume2, 'getExpireAt')) ?$legume2->getExpireAt():null;?></td>
		</tr>
		<tr> <br>
			Puis : 
			<td><?=$cloth1->getNameProd();?></td>
			<td><?=$cloth1->getPriceProd();?></td> chez 
			<td><?=(method_exists($cloth1, 'getBrand'))?$cloth1->getBrand():null;?></td>	
		</tr>
		<div><?= 'BillAmout client2 : ' .$client2->getBillAmount(). ' € ' ?></div> 	
</body>
</html>