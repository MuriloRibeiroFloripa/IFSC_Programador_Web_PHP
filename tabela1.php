<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tabela</title>
	</head>
<body>

	<nav>
      <ul>
      	<li><a href="index.php">Pagina Principal</a></li>
         <li><a href="formulario.php">Formulario</a></li>
      </ul>
    </nav>

    <!-- Recebendo os dados do formulario e armazendo em variaveis -->
		<?php
			$nomeAluno = $_POST['nome'];
			$idadeAluno = $_POST['idade']
		?>

		<!-- localhost/IFSC_Programador_Web_PHP/tabela.php?nome=Marcos%20Silva&idade=30 -->
		<p>
			<h1>Tabela que recebe os valores do formulario</h1>
		</p>

		<table border="1">
			<tr>
				<!--Passando valor via variavel nomeAluno e passando direto o Parametro via POST idade -->
				<td>Nome do Aluno = <?php echo $nomeAluno; ?><td>Idade = <?php echo $_POST['idade'] ?></td>
			</tr>
		</table>
</body>
</html>