<?php
$codigo = $_GET['codigo'];

$strcon = mysqli_connect('localhost','root','','avaliacao') or die('Erro ao conectar ao banco de dados');
$sql = "delete from cadastro where codigo = $codigo"; 

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);

header("location:listar.php");



//echo "<a href='excluir.php'>Clique aqui para realizar uma nova exclusão</a><br>";
?>