<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulario</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<nav>
      <ul>
        <li><a href="index.php">Pagina Principal</a></li>
        <li><a href="tabela.php">Tabela</a></li>
      </ul>
    </nav>

	<h1>Cadastro</h1>
	<!-- <form method="POST" action="recebe.php"> por padrão se não informar ele envia pelo metodo GET-->
	<form method="post" action="tabela1.php">
		<fieldset>
			<legend>Dados pessoais</legend>
			<br>
			<label>Nome:</label> 
			<input type="text" name="nome" >
			<br><br>
			<label>Idade:</label> 
			<input type="text" name="idade" >
			<br>
			<br>
			
		</fieldset><br>
		<input type="submit" value="Enviar">
		<input type="reset" values="Limpar">

	</form>
	
</body>
</html>