<p>a) de string para integer</p>
<br>
<?php
	$string = (int) "Muitas casas";
	var_dump ($string);
?>

<p>b) de integer para string</p>
<?php
	$inteiro = (string) 150;
	var_dump ($inteiro);
?>

<p>c) de string para array</p>
<?php
	$string = (array) "nando, alberto";
	var_dump ($string);
?>

<p>d) de array para string</p>
<?php
	$array = (string) "nando, alberto";
	var_dump ($array);
?>

<p>e) de integer para float</p>
<?php
	$integer = (float) 45;
	var_dump ($integer);
?>

<p>f) de float para string em formato de dinheiro: R$ 23,45</p>
<?php
	$number = (string)1234.56;
	setlocale(LC_MONETARY, 'en_US');
	echo money_format('%i', $number) . "\n";  
?>
