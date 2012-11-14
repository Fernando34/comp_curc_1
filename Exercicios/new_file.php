<!DOCTYPE html>

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



<!--Exercicio 02 -->

	<h1> </h1>
		
		<div class="conteudo">
			<?php 
				$nome1 = "Fulano"; 
				$nome2 = "Fulana"; 
				$nome3 = "Ciclano"; 
				$sexo1 = "M"; 
				$sexo2 = "F"; 
				$sexo3 = "M";
			
			echo $nome1 . "-" . $nome2 . "-" . $nome3;
				
				 if($sexo1 == 'M' && $sexo2 == 'M' && $sexo3 == 'M'){
				 	echo "<p>Sexo predominante Masculino</p>";	
				 } else if($sexo1 == 'F' && $sexo2 == 'F' && $sexo3 == 'F'){
				 	echo "<p>Sexo predominante Feminino</p>";	
				 } else{
				 	echo "<p>Equipe mista</p>";
				 }	
			?>
		</div>	
	
<!--Exercicio 03 -->

<?php

$qtd = 3;

switch($qtd)
{
case 0: echo "Nenhum produto cadastrado"; break;
case 1: echo "Voce possui um produto cadastrado"; break;
case  2 || 3: echo "Voce possui varios produtos cadastrados"; break;
default: echo "Cadastro Invalido";
}

?>


<!--Exercicio 04 -->
		
		
		<br>
		<?php 
			$i=25;
				for($i=0; $i <= 25; $i++) { 
		 	 		echo $i . "-". "Lactobacilos vivos também possuem sentimentos </br>";  
				}  
		?>
		
		<?php
			$valor=1;
				while ($valor<=10){
					echo ($valor . " ");
					$valor++;
				}
		?>
		<br>
		<?php
			$valor1=20;
			$valor2=9;
			
			if($valor1 > $valor2){
				while($valor1 < $valor2){
					echo ($valor1 . "");
					$valor1++;	
				}
			}else if ($valor2 > $valor1){
				while($valor2 < $valor1){
					echo ($valor2 . "");
					$valor2++;	
				}
			}
		?>

