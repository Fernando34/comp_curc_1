<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Pagina 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Fernando Alberto Santin">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

      </head>

  <body>


        
<form action="formulario.php" method="POST">
	
	<fieldset>
		<legend> Formulario de Contato</legend>

		<imput type="hidden" name="pagina" value="contato">

		<label for="idNome">Nome</label><br>
		<input type="text" name="nome" id="idNome">
  		<label for="idEmail">Email</label><br>
		<input type="email" name="email" id="idEmail">
		<label for="idMensagem">Mensagem</label><br>
		<textarea name="mensagem" id="idMensagem" rows="3"></textarea>
  

				Escolha os numeros:<br> 
				<input type="checkbox" name="numeros[]" value="10"/> 10<br>
				<input type="checkbox" name="numeros[]" value="20"/> 20<br>
				<input type="checkbox" name="numeros[]" value="30"/> 30<br>
				<input type="checkbox" name="numeros[]" value="40"/> 40<br>
				<br>
				Qual seu sistema operacional?<br> 
				<br><input type="radio" name="sistema" value="Windows"/> Win<br> 
				<br><input type="radio" name="sistema" value="Windows"/> Linux<br>
				<br><input type="radio" name="sistema" value="Windows"/> Mac<br> 
				<br>
				
				<B>Qual seu processador?</B><br> 
				<select name="processador"> <option value="Pentium">Pentium</option><br> 
				<option value="AMD">AMD</option><br>
				<option value="Celeron">Celeron</option><br> 
				</select><br>
		

		<br>
		<button class="btn btn-primary">Enviar Informações</button>
</form>



 </body>
</html>
