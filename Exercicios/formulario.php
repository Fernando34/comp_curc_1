<?php


	
	echo "Campo Hidden: ". $_POST["escondido"]."<br>";
	if(!isset($_POST["escondido"]) || ($_POST["escondido"]=="")){
		echo "O Campo está vazio"."<br>";
		}
	$campo1 = strip_tags($_POST["escondido"]);
	
	echo "O valor de CAMPO 1 é: ".$_POST["campo1"]."<br>";
				if(!isset($_POST["campo1"]) || ($_POST["campo1"]=="")){
		echo "O Campo está vazio"."<br>";
		}
	$campo2 = strip_tags($_POST["campo1"]);
	
	echo "Senha: ".$_POST["senha"]."<br>";
			if(!isset($_POST["senha"]) || ($_POST["senha"]=="")){
		echo "O Campo está vazio"."<br>";
		}
	$campo3 = strip_tags($_POST["senha"]);
	$palavramd5 = md5("senha");
		echo $palavramd5."<br>"; 
	
	
			echo "Olá " .$_POST["nome"] . "<br>";
		
		if(!isset($_POST["nome"]) || ($_POST["nome"]=="")){
		echo "O Campo está vazio"."<br>";
		}
			$campo4 = strip_tags($_POST["nome"]);
			
			
			$email = trim(@$_REQUEST["email"]);

			if ($email) {
				if (preg_match ("/^[A-Za-z0-9]+([_.-][A-Za-z0-9]+)*@[A-Za-z0-9]+([_.-][A-Za-z0-9]+)*\\.[A-Za-z0-9]{2,4}$/", $email)) {
        echo "O e-mail é válido!"."<br>";
    } else {
        echo "O e-mail é inválido!"."<br>";
    }
}
		if(!isset($_POST["email"]) || ($_POST["email"]=="")){
		echo "O Campo está vazio"."<br>";
		}
		$campo5 = strip_tags($_POST["email"]);
			

			echo "Sua mensagem: ".$_POST["mensagem"]."<br>";
			if(!isset($_POST["mensagem"]) || ($_POST["mensagem"]=="")){
		echo "O Campo está vazio"."<br>";
		}
		$campo6 = strip_tags($_POST["mensagem"]);
	
		if(isset($_POST["numeros"])) 
	{ echo "Os números de sua preferência são: "."<br>";
	foreach($_POST["numeros"] as $numero) 
	{ echo " ".$numero . "<BR>"."<br>"; } 
	} else { echo "Você não escolheu número preferido!"."<br>"; }
	

	echo "Seu sistema operacional é: " .$_POST["sistema"]."<br>";
				if(!isset($_POST["sistema"]) || ($_POST["sistema"]=="")){
		echo "O Campo está vazio"."<br>";
		}
	$campo8 = strip_tags($_POST["sistema"]);

	
	echo "Seu processador é: " . $_POST["processador"] ."<br>";
		if(!isset($_POST["processador"]) || ($_POST["processador"]=="")){
		echo "O Campo está vazio"."<br>";
		}	
	$campo9 = strip_tags($_POST["processador"]);


			
		
		

		
	?>
