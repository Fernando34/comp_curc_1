
<?php
			
			
			function multiplicando($numero1, $numero2){

				$resultado = 0;

				for ($i=0; $i < $numero1  ; $i++) { 
					$resultado += $numero2;
				}	
				echo $resultado;
			}
			

			multiplicando(10,9);



?>


