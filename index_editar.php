<!DOCTYPE html>
<html lang="pt-br">
<head>
<!--Boostrap-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro</title>

<style>
.h11 {
  color:red;
}
h1{
  font: 30px Montserrat, sans-serif;
  width: 514px
}
.panel-heading{
  font-size:150%;
}

a{
  color: white;
  
}
a:hover{
  color: white;
  text-decoration: none;
}
input{
  text-transform: uppercase;
}
</style>


<?php
$codigo = $_GET['codigo'];

$strcon = mysqli_connect('localhost','root','','avaliacao') 
or die('Erro ao conectar ao banco de dados');
$sql = "select nome, cpf, cidade, rua, numero, bairro, data, email , estado, celular, plano from cadastro where codigo = $codigo"; 


$select  = mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
while($dados = $select->fetch_assoc()) {  
  $nome = $dados['nome'];
  $cpf = $dados['cpf'];
  $cidade = $dados['cidade'];
  $rua = $dados['rua'];
  $numero = $dados['numero'];
  $bairro = $dados['bairro'];
  $data = $dados['data'];
  $email = $dados['email'];
  $estado = $dados['estado'];
  $celular = $dados['celular'];
  $plano = $dados['plano'];
}

mysqli_close($strcon);

?>

</head>
<body>


<form class="form-horizontal" action="editar.php" method="POST">
<fieldset>
<div class="panel panel-primary">
<div class="panel-heading">Cadastro</div>

<div class="panel-body">
<div class="form-group">

<div class="form-group">   
<div class="col-md-4 control-label">

</div>
<div class="col-md-4 control-label">
<h1>Atualizaçao de Dados do Cliente</h1>

</div>
</div> 

<div class="col-md-11 control-label">
<p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-2 control-label" for="Nome">Codigo: <h11>*</h11></label>  
<div class="col-md-8">
<input id="codigo" name="codigo" class="form-control input-md" value="<?php print $codigo ?>" required="" type="text">
</div>

</div>
<div class="form-group">
<label class="col-md-2 control-label" for="Nome">Nome: <h11>*</h11></label>  
<div class="col-md-8">
<input id="nome" name="nome" placeholder="" class="form-control input-md" value="<?php print $nome ?>" required="" type="text">
</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-2 control-label" for="Nome">CPF: <h11>*</h11></label>  
<div class="col-md-2">
<input id="cpf" name="cpf" placeholder="Apenas números" max="11" class="form-control input-md" value="<?php print $cpf ?>" required="" type="text" maxlength="11" pattern="[0-9]+$">
</div>

<label class="col-md-1 control-label" for="Nome">Nascimento:<h11>*</h11></label>  
<div class="col-md-2">
<input id="data" name="data" placeholder="DD/MM/AAAA" maxlength="8" class="form-control input-md" value="<?php print $data ?>" required="" type="text" OnKeyPress="formatar('##/##/####')">
</div>

<!-- Prepended text-->
<div class="form-group">
<label class="col-md-1 control-label" for="prependedtext">Celular: <h11>*</h11></label>
<div class="col-md-2">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input id="celular" name="celular" class="form-control" max="11" value="<?php print $celular ?>" placeholder="(XX) XXXX-XXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
OnKeyPress="formatar('## #####-####', this)">
</div>
</div>
</div> 

<!-- Prepended text-->
<div class="form-group">
<label class="col-md-2 control-label" for="prependedtext">Email: <h11>*</h11></label>
<div class="col-md-5">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input id="email" name="email" class="form-control" value="<?php print $email ?>" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
</div>
</div>
</div>

<!-- Prepended text-->
<div class="form-group">
<label class="col-md-2 control-label" for="prependedtext">Endereço</label>
<div class="col-md-4">
<div class="input-group">
<span class="input-group-addon">Rua</span>
<input id="rua" name="rua" class="form-control" value="<?php print $rua ?>" placeholder="" required=""  type="text">
</div>

</div>
<div class="col-md-2">
<div class="input-group">
<span class="input-group-addon">Nº <h11>*</h11></span>
<input id="numero" name="numero" class="form-control" value="<?php print $numero ?>" placeholder="xxx" required=""  type="text">
</div>

</div>

<div class="col-md-3">
<div class="input-group">
<span class="input-group-addon">Bairro</span>
<input id="bairro" name="bairro" class="form-control" value="<?php print $bairro ?>" placeholder="" required=""  type="text">
</div>

</div>
</div>

<div class="form-group">
<label class="col-md-2 control-label" for="prependedtext"></label>
<div class="col-md-4">
<div class="input-group">
<span class="input-group-addon">Cidade</span>
<input id="cidade" name="cidade" class="form-control" value="<?php print $cidade ?>" placeholder="" required=""  type="text">
</div>

</div>

<div class="col-md-2">
<div class="input-group">
<span class="input-group-addon">Estado</span>
<input id="estado" name="estado" class="form-control" maxlength="2" placeholder="" value="<?php print $estado ?>" required=""   type="text">
</div>

</div>
</div>

<!-- Select Basic -->
<div class="form-group">
<label class="col-md-2 control-label" value="<?php print $plano ?>" for="plano">Qual Plano:<h11>*</h11></label>
<div class="col-md-2">
<!-- <select required id="plano" name="plano" class="form-control"> -->
<!-- <option value="PlanoBasico">Plano Básico</option>
<option value="PlanoRegular">Plano Regular</option>
<option value="PlanoPremium">Plano Premium</option> -->
<select required id="plano" name="plano" class="form-control">
  <option value="PlanoBasico" <?php echo $plano=='PlanoBasico'?'selected':'';?> >Plano Basico</option>
  <option value="PlanoRegular" <?php echo $plano=='PlanoRegular'?'selected':'';?> >Plano Regular</option>
    <option value="PlanoPremium" <?php echo $plano=='PlanoPremium'?'selected':'';?> >Plano Premium</option>
  </select>
</select>
</div>
</div>
<br/>

<div class="form-group">

<!-- Button (Double) -->
<div class="form-group">
<label class="col-md-2 control-label" for="Cadastrar"></label>
<div class="col-md-8">
<button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Atualizar</button>
<button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset"><a href="listar.php">Cancelar</a></button>
</div>
</div>

</div>
</div>

</fieldset>
</form>

</body>
</html>