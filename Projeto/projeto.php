<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>

<h1>Bem vindo ao cadastro do aluno!</h1>

<form action="segundaTela.php" method="POST">
  <div class="form-group">
    <label for="exampleInputNome">Nome</label>
    <input type="nome" class="form-control" id="exampleInputNome" aria-describedby="nomeHelp" placeholder="Seu nome" name="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Seu email para contato" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputTelefone">Telefone</label>
    <input type="telefone" class="form-control" id="exampleInputTelefone" aria-describedby="telefoneHelp" placeholder="Seu telefone" name="telefone">
  </div>
  <div class="form-group">
    <label for="exampleInputCurso">Curso</label>
    <input type="curso" class="form-control" id="exampleInputCurso" aria-describedby="cursoHelp" placeholder="Seu curso" name="curso">
  </div>
  <div class="form-group">
    <label for="exampleInputSemestre">Semestre</label>
    <input type="semestre" class="form-control" id="exampleInputSemestre" aria-describedby="semestreHelp" placeholder="Semestre atual" name="semestre">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
	
</div>
</body>
</html>