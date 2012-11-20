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
