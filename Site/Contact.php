<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Pagina 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Fernando Alberto Santin">

    <!-- Le styles -->
    <link href="CSS/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
   

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

      </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="#">Meu Site</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="Page1.php">Pagina 1</a></li>
              <li><a href="Page2.php">Pagina 2</a></li>
	      <li><a href="Aboutme.php">Sobre mim</a></li>
              <li><a href="Contact.php">Contato</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>



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
  
		<br>
		<button class="btn btn-primary">Enviar Informações</button>

	</fieldset>
</form>

 </body>
</html>
