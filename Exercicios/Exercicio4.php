<!DOCTYPE html>
<html>
<!--Exercicio 04 -->
		
		
		<br>
		<?php 
			#Letra a
			$i=25;
				for($i=0; $i <= 25; $i++) { 
		 	 		echo $i . "-". "Lactobacilos vivos também possuem sentimentos </br>";  
				}  
		
			#Letra b
			$valor=4;
				for($i=0; $i <= $valor; $i++) {
					echo ($i . " ");
					
				}

			#Letra c
			$valor1=10;
			$valor2=5;
					if($valor1 < $valor2){
						while($valor1 != $valor2-1){
							echo ($valor1+1 . "");
								$valor1++;
						}
					}else{
						while($valor2 != $valor1-1){
							echo ($valor2+1 . "");
								$valor2++;
						}					
					}
		
			#Letra d
			$nume1 = 3;
			$nume2 = 5;
			$soma = 0;
				for($i = 0; $i < $nume1; $i++){
					$soma = $soma + $nume2;
					
				}
				echo $soma;
	
	
	?>
	
	<?php
			
				
		?>
</html>
