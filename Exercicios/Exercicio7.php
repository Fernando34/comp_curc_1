<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8">				
	</head>
		</body>
			<p>
			Letra A
			<br>
			Array um mapa ordenado. Um mapa é um tipo que relaciona valores para chaves. É otimizado de várias maneiras, então você 			pode usá-lo como um array real, ou uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário,coleção, 				pilha, fila e provavelmente mais. Como você pode ter outro array PHP como um valor, você pode facilmente simular 				árvores.
	 		</p>
			<?php
				$arr = array("boo" => "carro", 22 => true);
				echo $arr["boo"]; 
				echo $arr[22];    
			?>
	
			<br>
			<P>
				Letra B
				<br>
				A função trim() é responsável por remover tais sobras de string tanto no início como no fim.
			</p>
			<?php
				$var1 = "     Funcao Trim     ";
				echo (trim($var1));
			?>

			<br>
			<p>
				Letra C
				<br>
				Retorna a parte de string especificada pelo parâmetro start e length .
			</p>
			<?php
				$rest = substr("nando", -1);    // retorna "o"
				$rest = substr("nando", -2);    // retorna "od"
				$rest = substr("nando", -3, 1); // retorna "n"
			?>

			<br>
			<p>
				Letra D
				<br>
				Retorna o conteúdo informado com todas as letras convertidas para minúsculo.
	 		</p>	
			<?php
				$nome = "MAIUSCULO";
	 			$minusculo = strtolower($nome);
         			echo $minusculo;
			?>

			<br>
			<p>
				Letra E
				<br>
				Recebe um string como parâmetro e retorna o mesmo valor com todas as letras convertidas para maiúsculo.		
			</p>
			<?php
				$nome = "fernando santin";
    				$nome_maisculo = strtoupper($nome);
    				echo $nome_maisculo;
			?>

			<br>
			<p>
				Letra F
				<br>
				Converte para maiúscula o primeiro caractere de uma string.
			</p>
			<?php
			$nome = "fernando alberto santin";
			$nome1 = ucfirst($nome);
			echo $nome1; 
			?>

			<br>
			<p>
				Letrag G
				<br>
				Converte para maiúsculas o primeiro caractere de cada palavra
			</p>
		 	<?php
			$nome = "fernando alberto santin";
			$nome1 = ucwords($nome);
			echo $nome1; 
			?>

			<br>
			<p>
				Letra H
				<br>
				Explode serve para dividir uma string em um vetor ou array de strings. 
			</p>
			<?php
				$nome_arquivo = "filme.avi";
				$arquivo = explode('.', $nome_arquivo);
				echo ("O nome do arquivo é " . $arquivo[0]);
				echo (" e sua extensão é " . $arquivo[1]);
			?>

			<br>
			<p>
				Letra I
				Mostra informacoes sobre a variavel
			</p>
			<?php
			$a = "Fernando";
			var_dump ($a);
			?>

			<br>
			<p>
				Letra J
				<br>
				implode une ou junta os índices de um vetor ou array em uma string única. 
			</p>
			<?php
				$array = array ("www", "google", "com", "br");
				$link = implode ('.', $array);
				echo ($link);
			?>

			<br>
			<p>
				Letra K
				<br>
				Converte caracteres especiais para a realidade HTML.
			</p>
			<?php
				$teste = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
				echo $teste;     
			?>

			<br>
			<p>
				Letra L
				<br>
				Join() retorna uma seqüência de elementos de uma matriz.
 			</p>
			<?php
				$teste = array('Boa','Tarde!','Boa','Noite!');
				echo join(" ",$teste);
			?> 

			<br>
			<p>
				Letra M
				<br>
				 Informa se a variável foi iniciada.
			</p>
			<?php				
				if (isset($nome)) {
 			        echo "Essa nome existe.";
				}
			?>

			<br>
			<p>
				Letra N
				<br>
				Retorna o tamanho de uma string
			</p>
			<?php
				$nome = 'Fernando';
				echo strlen($nome);
			?>

			<br>
			<p>
				Letra O
				<br>
				Informa se a variável é do tipo float, do tipo int, do tipo array, do tipo string, do tipo bool, do tipo 					numeric. 
			</p>
			<?php
				if(is_float(10.52)) {
 				echo "is float\n";
			}else {
 				echo "is not float\n";
			}				
			?>
			<br>	
			<?php		
				if(is_int(10)) {
 				echo "is int\n";
			}else {
 				echo "is not int\n";
			}				
			?>
			<br>
			<?php
				if(is_array(334)) {
 				echo "is array\n";
			}else {
 				echo "is not array\n";
			}	
			?>
			<br>
			<?php
				if(is_string("sdf")) {
 				echo "is string\n";
			}else {
 				echo "is not string\n";
			}
			?>
			<br>
			<?php
				if(is_bool(10.52)) {
 				echo "is bool\n";
			}else {
 				echo "is not bool\n";
			}		
			?>
			<br>
			<?php
				if(is_numeric(1052)) {
 				echo "is numeric\n";
			}else {
 				echo "is not numeric\n";
			}	
			?>

			<br>
			<p>
				Letra P
				<br>
				Consegue informações data/hora
			</p>
			<?php
				$today = getdate(); 
				print_r($today);
			?>

			<br>
			<p>
				Letra Q
				<br>
				 Informa se a variável é vazia
			</p>
			<?php
				if (empty($var)) {
    					echo '$var é um dos valores: 0, empty ou uma variável inexistente';
				}
			?>

			<br>
			<p>
				Letra R
				<br>
				Retira as tags HTML e PHP de uma string
			</p>
			<?php
				$texto = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
				echo strip_tags($texto);
				echo "\n";
			?>

			<br>
			<p>
				Letra S
				<br>
				Min</br>
				Encontra o menor valor
			</p>
			<?php
				echo min(2, 3, 1, 6, 7);
			?>
			<p>Max</br>
			Localiza o maior valor 
			</p>
			<?php
				echo max(1, 3, 5, 6, 7);
			?>

			<br>
			<p>
				Letra T
				<br>
				Valor absoluto
			</p>
			<?php
				$abs = abs(-4.2);
				$abs2 = abs(5);
			?>

			</br>
			<p>
				Letra U
				</br>
				Ceil - Arredonda frações para cima
			</p>
			<?php
				echo ceil(4.3); 
				echo ceil(9.999);
			?>	
			<p>Round - Arredonda um número
			</p>
			<?php
				echo round(3.4);
				echo round(3.5);
			?>
			<p>Floor - Aredonda frações para baixo
			<?php
				echo floor(4.3);   
				echo floor(9.999);
			?>

			<br>
			<p>
				Letra U
				<br>
					Gera um inteiro aleatorio
			</p>
 			
			<?php
				echo rand() . "\n";
				echo rand() . "\n";
				echo rand(5, 15);
			?>

			<br>
			<p> 	
				Letra V
				</br>
				Raiz Quadrada
			</p>
			<?php
				echo sqrt(9); 
				echo sqrt(10); 
			?>

			<br>
			<p>
				Letra x
				<br>
				Substitui todas as ocorrências da string de procura com a string de substituição
			</p>
			<?php
				$texto1  = "você joga futebol, basquete, e volei todos os dias.";
				$texto2 = array("futebol", "basquete", "volei");
				$texto3   = array("handebol", "natacao", "hipismo");
	
				$novafrase = str_replace($texto2, $texto3, $texto1);
			?>
			
			<br>
			<p>
				Letra Y
				</br>
				Contar todos os elementos de uma matriz, ou algo em um objeto
			</p>
			<?php
				$a[0] = 1;
				$a[1] = 3;
				$a[2] = 5;
				$result = count($a);
			?>
			
			<br>
			<p>
				Letra Z
				</br>
				Converte todos os caracteres aplicáveis em entidades html.
			</p>
			<?php
				$str = "A 'quote' is <b>bold</b>";
				echo htmlentities($str);
			?>
