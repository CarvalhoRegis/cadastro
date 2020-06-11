<?php 

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $data = $_POST['data'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $plano = $_POST['plano'];
    
    $strcon = mysqli_connect('localhost','root','','avaliacao') or die ('Erro ao conectar ao banco de dados');

    $sql = "insert into cadastro 
    (nome,cpf,data,rua,cidade,numero,bairro,estado,celular,email,plano) 
    VALUES ('$nome', '$cpf', '$data', '$rua','$cidade', '$numero', '$bairro', '$estado', '$celular', '$email', '$plano')";

    mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro !!");
    mysqli_close($strcon); 

    
    echo '<script>
        alert ("Usuario Cadstrado com Sucesso");
        window.location="index.html";
        </script>';

?>