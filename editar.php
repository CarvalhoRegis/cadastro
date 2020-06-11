<?php
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$data = $_POST['data'];
$email = $_POST['email'];;
$celular = $_POST['celular'];
$plano = $_POST['plano'];
// Cria conexão
$conn = new mysqli('localhost', 'root', '', 'avaliacao');
// Check conexão
if ($conn->connect_error) {
    die("Falha na conexão': " . $conn->connect_error);
}

$sql = "update cadastro set nome = '$nome', cpf ='$cpf', data = '$data', rua = '$rua', cidade = '$cidade', numero = '$numero', bairro = '$bairro', celular = '$celular', email = '$email', plano = '$plano', estado = '$estado' where codigo = $codigo";

if ($conn->query($sql) === TRUE) {
    echo '<script>
    
    alert ("Usuario Alterado com Sucesso");
    window.location="listar.php";
    </script>';
} else {
    echo "Erro em atualizar: " . $conn->error;
}

$conn->close();

mysqli_close($strcon);
echo "Cliente Atualizado com sucesso!";



?>