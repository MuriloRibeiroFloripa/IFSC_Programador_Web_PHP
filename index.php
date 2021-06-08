<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP com HTML</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	echo "<h1>Funcionando </h1>";
	echo "<h2>Funcionando bem</h2>";

	$nomealuno = "Murilo Ribeiro";
	$idadealuno = "35";
	echo "Nome do Aluno = ";
	echo $nomealuno;
	echo " Idade = ";
	echo $idadealuno;

	echo "<br>";

	$nomealuno1="Tatiane da luz Silva";
	$idadealuno1 = "33";
	echo "Nome da Aluna = ";
	echo $nomealuno1;
	echo " Idade = ";
	echo $idadealuno1;

	echo "<br>";

	//Fundamentos de Programação - Atribuição de Variáveis por GET
	// localhost/IFSC_Programador_Web_PHP/index.php?nome=Marcos Silva
	$nomealuno2 = $_GET['nome'];
	echo "Nome do Aluno = ";
	echo $nomealuno2;
	// localhost/IFSC_Programador_Web_PHP/index.php?nome=Marcos%20Silva&idade=30
	$idadealuno2 = $_GET['idade'];
	echo " Idade = ";
	echo $idadealuno2;
	echo "<br>";
	echo "<br>";
	?>

	<table border="1">
		<tr>
			<td>Nome do Aluno = <?php echo $nomealuno; ?><td>Idade = <?php echo $idadealuno ?></td>
		</tr>
		<tr>
			<td>Nome da Aluna = <?php echo $nomealuno1; ?><td>Idade = <?php echo $idadealuno1 ?></td>
		</tr>
		<tr>
			<td>Nome do Aluno = <?php echo $nomealuno2; ?><td>Idade = <?php echo $idadealuno2 ?></td>
		</tr>
	</table>	
</body>
</html>
