<?php

// $_POST - variavel global

// var_dump($_POST); - ver informacoes que vao ser armazenadas

//Se for envaido um post e a variavel nao é vazia entao mostrar os dados
if(isset($_POST["pagina"]) && !empty($_POST["pagina"] == "contato")){ 

echo $_POST["nome"]."<br>"; //mostrar dados
echo $_POST["email"]."<br>";
echo $_POST["mensagem"];
}else{
header("Location: Contact.php");
}
//senao redirecionar para a pagina de contato
?>
