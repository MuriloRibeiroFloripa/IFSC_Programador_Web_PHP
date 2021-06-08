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
// localhost/IFSC_Programador_Web_PHP/index.php?nome=Nome%20do%20Aluno%20=%20Murilo%20Silva
//echo $_GET['nome'];
$nomealuno2 = $_GET['nome'];
echo $nomealuno2;

?>