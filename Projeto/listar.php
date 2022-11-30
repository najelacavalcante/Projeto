<?php 

     require_once("conexao.php");

     $sql = "select * from alunos";

     $resultSql = $conexao->query($sql);

     $vetorRegistro = $resultSql->fetch_all(MYSQLI_ASSOC);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Curso</th>
      <th scope="col">Semestre</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($vetorRegistro as $registro): ?>
    <tr>
      <th scope="row"> <?=$registro["id"]; ?> </th>
      <td> <?=$registro["nome"];?> </td>
      <td> <?=$registro["endereco"];?> </td>
      <td> <?=$registro["telefone"];?> </td>
      <td> <?=$registro["curso"];?> </td>
      <td> <?=$registro["semestre"];?> </td>
    </tr>

  </tbody>
<?php endforeach ?>
</table>

</body>
</html>