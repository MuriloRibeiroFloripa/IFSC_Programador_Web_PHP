<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tabela</title>
	<link rel="stylesheet" href="css/estilo1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
</head>
<body>

	<nav>
      <ul>
        <li class="collection-item"><a href="index.php">Pagina Principal</a></li>
        <li class="collection-item"><a href="formulario.php">Formulario</a></li>
      </ul>
    </nav>

	<?php 
	$nomealuno = "Murilo Ribeiro";
	$idadealuno = "35";	

	$nomealuno1="Tatiane da luz Silva";
	$idadealuno1 = "33";

	//Fundamentos de Programação - Atribuição de Variáveis por GET
	//passa via GET pela barra de navegação.
	// localhost/IFSC_Programador_Web_PHP/tabela.php?nome=Marcos%20Silva&idade=30
	?>

	<!-- localhost/IFSC_Programador_Web_PHP/tabela.php?nome=Marcos%20Silva&idade=30 -->
	<p>
		Passe os parametros via GET 
		<br> Pela barra de navegação:
		<br> Para as variaveis nome=? e idade=? na barra de navegação.
		<br> Se preferir, copie e cole os valores na varra de navegação.
		<br> <b>?nome=Marcos%20Silva&idade=30</b>
	</p>

	<p align="center">
	<table border="1px" cellpadding="5px" cellspacing="0" ID="alter">
		<tr>
			<td>Nome do Aluno = <?php echo $nomealuno; ?><td>Idade = <?php echo $idadealuno ?></td>
		</tr>
		<tr class="dif">
			<td>Nome da Aluna = <?php echo $nomealuno1; ?><td>Idade = <?php echo $idadealuno1 ?></td>
		</tr>
		<tr>
			<td>Nome do Aluno = <?php echo $_GET['nome'];; ?><td>Idade = <?php echo $_GET['idade'] ?></td>
		</tr>
	</table>
 </p>
</body>
</html>