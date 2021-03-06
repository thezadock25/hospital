<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hospital - Gestor Hojas de Vida</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" href="../css/estilos.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<?php
if (isset($_COOKIE['idSesion'])) {
?>	
	<nav class="navbar navbar-expand-lg  navbar-dark bg-dark text-white">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">GESTOR HOJAS DE VIDA</a>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="../index.php">Inicio</a></li>
					<li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
					<li class="nav-item"><a class="nav-link" href="ingreso.php">Ingreso hojas de vida</a></li>
					<li class="nav-item"><a class="nav-link" href="consulta.php">Consulta hojas de vida</a></li>
					<li class="nav-item"><a class="nav-link" href="actualizar.php">Actualización hojas de vida</a></li>
					<li class="nav-item"><a class="nav-link" href="reporte.php">Reportes especiales</a></li>
					<li class="nav-item active"><a class="nav-link" href="operacion.php">Operaciones matemáticas</a></li>
					<li class="nav-item"><a class="nav-link" href="bd.php">Manejo base de datos</a></li>
				</div>
			</div>
		</div>		
	</nav>
	<div class="container">
		<h3>Formulario de operaciones</h3>
		<form action="../php/operar.php" method="post">
			<div class="form-group">
				<label for="numero1">Número 1:</label>
				<input type="number" class="form-control" id="numero1" name="numero1">
			</div>
			<div class="form-group">
				<label for="numero2">Número 2:</label>
				<input type="number" class="form-control" id="numero2" name="numero2">
			</div>
			<div class="form-group">
				<p>Operaciones: </p>
				<label class="radio-inline">
					<input type="radio" name="operacion" value="sumar">Sumar
				</label>
				<label class="radio-inline">
					<input type="radio" name="operacion" value="restar">Restar
				</label>
				<label class="radio-inline">
					<input type="radio" name="operacion" value="multiplicar">Multiplicar
				</label>
				<label class="radio-inline">
					<input type="radio" name="operacion" value="dividir">Dividir
				</label>
			</div>
			<button type="submit" class="btn btn-default">Calcular</button>
		</form>
	</div>
	<div class="container">
		<h3>Resultados</h3>
		<?php
		//Inicia sesión para capturar los datos
			session_start();
			//Guarda las variables enviadas de la validación
			$mensaje = $_SESSION['mensaje'];
			$comparar = $_SESSION['comparar'];
			if (isset($mensaje) || isset($comparar)) {
				print "<p>" . $mensaje . "</p>";
				print "<p>" . $comparar . "</p>";
			}
			session_unset();
		?>
	</div>
	<div class="container">
		<h3>Secuencia - Grupo 41</h3>
		<?php
		//Secuencia para generar una cadena de números
			for ($i=1; $i <= 41 ; $i++) { 
				echo ($i . " ");
			}
		?>
	</div>
	<footer class="footer">
		<div class="container">
			<span class="text-muted">UNAD - Programación de sitios web</span>
		</div>	
	</footer>
<?php } else { ?>
	<div class="container">
		<div class="card">
			<div class="card-header text-center bg-danger text-white">
				ERROR
			</div>
			<div class="card-body text-white bg-dark">
				<h4 class="card-title">Acceso denegado</h4>
				<p class="card-text">No has iniciado sesión en el sistema</p>
				<a href="../login.php" class="btn btn-primary">Ir a inicio</a>
			</div>
			</div>
	</div>
<?php }	?>
</body>
</html>