<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
 include "../inc/conectabd.inc.php";
 include "../inc/funcoes.inc.php";
 
 $id = $_GET["id"];
 $al = recupera_curso($id);
 $date_inicio = date("Y-m-d",strtotime($al["dt_inicio"]));
?>

<html>
    <head>
      <title>Cadastro de curso</title>
      <meta charset="utf-8">
    </head>
    <body>
        <h1>Atualizar curso</h1>
        <form action="alteracao_curso.php" 
              method="POST">
                    <input type="hidden" name="id_curso" value="<?php echo $al["id_curso"];?>"/>
            <label for="id_curso">
            Nome Curso:
            </label>
            <input type="text" name="ds_curso" id="ds_curso" value="<?php echo $al["ds_curso"];?>"/>
            <br>
            <label for="nr_carga_horaria">
            Quantidade de hora:
            </label>
            <input type="text" name="nr_carga_horaria" id="nr_carga_horaria" value="<?php echo $al["nr_carga_horaria"];?>"/>
            <br>
            <label for="dt_inicio">
            Data Inicio:
            </label>
            <input type="date" name="dt_inicio" id="dt_inicio" value="<?php echo $date_inicio;?>"/>
            <?php
                       // var_dump($al)  ;
                          recupera_curso($al["id_curso"]);
                        ?>
            <br>
            <input type="submit" value="Ok">
        </form>
    </body>
</html>