<!DOCTYPE html>
<!-- alteracao.php -->
<html>
    <head>
      <title>Cadastro do curso - Alteração</title>
      <meta charset="utf-8">
    </head>
    <body>
<?php 
// efetua alteração do aluno informado em form_alteracao_aluno.php
$id_curso = $_POST["id_curso"];
$ds_curso = $_POST["ds_curso"];
$nr_carga_horaria = $_POST["nr_carga_horaria"];
$dt_inicio = $_POST["dt_inicio"];

  include_once "../inc/conectabd.inc.php";

  $query = "UPDATE tb_curso 
            SET id_curso = '$id_curso',
            ds_curso = '$ds_curso',
            nr_carga_horaria = '$nr_carga_horaria',
            dt_inicio = '$dt_inicio'
      WHERE id_curso = $id_curso;";
     // echo $query.'<br>';
  if ($result = mysqli_query($link, $query)) {
      echo "Alteração efetuada com sucesso";
  } else {
      echo mysqli_error($link);
  }

  // fecha a conexão
  mysqli_close($link);
?> 
 
 <br>
 <a href="consulta_curso.php">Ver cursos cadastrados</a>
 
 </body>
</html>