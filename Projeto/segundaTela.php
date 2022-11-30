<?php 

     $nome = $_POST["nome"];
     $endereco = $_POST["email"];
     $telefone = $_POST["telefone"];
     $curso = $_POST["curso"];
     $semestre = $_POST["semestre"];

     require_once("conexao.php");

     $sql = "insert into alunos(nome, email, telefone, curso, semestre) values(?,?,?,?,?)";

     $sqlPrep = $conexao->prepare($sql);

     $sqlPrep->bind_param("sssss",$nome, $email, $telefone, $curso, $semestre);

     $sqlPrep->execute();

     header("location:listar.php");

 ?>