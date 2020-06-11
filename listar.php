<!doctype html>
<html lang= "pt-br">
<head>
<title> Formulario </title>
</head>

<style>
body{
    margin: 0;
}
table {
    font-family: monospace;
    font-size: 14px;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 5px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

h3{
    text-align: center;
    font: 25Px Montserrat, sans-serif;
}

a{
    color: blue;
}
.topo{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
</style>
<body>

<div class="topo">
<a href="login.html"><img src="imagens/logozin.gif" style="width: 50px; height: 50px;"></a>
<h3>Usuarios Cadastrados</h3><br><br>
</div>

<table style="width=100vw"  id="table">
<thead>
<tr>
<th>Codigo</th>
<th>Nome</th>
<th>CPF</th>
<th>CIDADE</th>
<th>ESTADO</th>
<th>RUA</th>
<th>NUMERO</th>
<th>BAIRRO</th>
<th>DATA NASCIMENTO</th>
<th>EMAIL</th>
<th>CELULAR</th>
<th>PLANO</th>
</tr>
</thead>

<?php
include("conexao.php");
$sqli="select * from cadastro order by codigo";
$result = $con-> query($sqli);
if ($result->num_rows >0){
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>"
        .$row["codigo"]."</td><td>"
        .$row["nome"]."</td><td>"
        .$row['cpf']."</td><td>"
        .$row['cidade']."</td><td>"
        .$row['estado']."</td><td>"
        .$row['rua']."</td><td>"
        .$row['numero']."</td><td>"
        .$row['bairro']."</td><td>"
        .$row['data']."</td><td>"
        .$row['email']."</td><td>"
        .$row['celular']."</td><td>"
        .$row['plano']."</td><td>";
        echo "<a href='excluir.php?codigo={$row['codigo']}'> Apagar</a></td><td>";
        echo "<a href='index_editar.php?codigo={$row['codigo']}'> Editar </a> </td> ";
        
    }
}
$con->close();
?>
</tbody>
</table>


</body>
</html>