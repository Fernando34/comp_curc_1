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
