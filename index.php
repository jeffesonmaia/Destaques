<!DOCTYPE html>
<html>
<head>
	<title>Destaques</title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript" src="js/jquery.destaques.js"></script>
</head>
<body>
	<!-- Destaques-->
	<?php require_once('php/mysql_destaques.php'); ?>
	<?php if (isset($lista_destaques) AND !empty($lista_destaques)) { ?>
	<div id="blocoDestaques">
		<a class="faixa" href="#" title=""></a>
		<ul>
			<?php foreach ($lista_destaques AS $destaque) { ?>
			<li>
				<a href="<?php echo $destaque->link; ?>" title="<?php echo $destaque->titulo; ?>">
					<img src="<?php echo $destaque->imagem; ?>" alt="<?php echo $destaque->titulo; ?>" />
				</a>
				<div class="fundo"><!--  --></div>
				<p><a href="<?php echo $destaque->link; ?>" title="<?php echo $destaque->titulo; ?>"><?php echo $destaque->titulo; ?></a></p>
			</li>
			<?php } ?>

		</ul>
	</div>
	<?php } ?>
	<!--/Destaques-->
</body>
</html>