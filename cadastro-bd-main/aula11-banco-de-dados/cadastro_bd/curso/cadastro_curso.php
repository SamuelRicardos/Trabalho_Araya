<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro do curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo curso</h1>
	<form action="insercao_curso.php" method="GET">
            <label for="ds_curso">
            Curso:
            </label>
            <input type="text" name="ds_curso" id="ds_curso">
            <br>

            <label for="nr_carga_horaria">
            Quantidade de hora:
            </label>
            <input type="text" name="nr_carga_horaria" id="nr_carga_horaria">
            <br>

            <label for="dt_inicio">
                Data Inicio:
            </label>
            <input type="date" name="dt_inicio" id="dt_inicio">
            <br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>