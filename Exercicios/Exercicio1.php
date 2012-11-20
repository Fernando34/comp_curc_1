<!--Exercicio 01 -->
<html>
<?php
		$title = "Site.com";
		$subtitle = "este e um site em PHP";
?>

	<head>
		<meta charset="utf-8">	
		<title> 
			<?php echo $title . " - " . $subtitle; ?> 
		</title>
				
	</head>
	
	<body>
	
	<div class="rodape">
		<p>
			&reg; copyright Site.com – <?php echo date("Y"); ?> 
		</p>
	
	</div>	
	
	</body>
</html>
