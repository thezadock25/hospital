<?php 
if (isset($_COOKIE['idSesion'])) {
	$idDNI = $_POST['idDNI'];
	$txtNombre = $_POST['txtNombre'];
	$txtApellido = $_POST['txtApellido'];
	$txtCorreo = $_POST['txtCorreo'];
	$txtContrasena = $_POST['txtContrasena'];
	$txtTelefono = $_POST['txtTelefono'];
	if (isset($idDNI) && isset($txtNombre) && isset($txtApellido) && isset($txtCorreo) && isset($txtContrasena) && isset($txtTelefono)) {
		$ruta = "../reporte/" . $idDNI . ".txt";
		$fp = fopen($ruta, 'w+');
		$cadena = $idDNI . " " . $txtNombre . " " . $txtApellido . " " . $txtCorreo . " " . $txtContrasena . " " . $txtTelefono;
		fputs ($fp, $cadena);
		fclose($fp);	
		//header("Content-Disposition: attachment; filename=".$ruta);
		//header("Content-type: application/force-download");
		//header("Content-Lenght: ".filesize($ruta));
		//readfile($ruta);
		?>
			<p>Reporte guardado correctamente</p>
			<a href="../pages/reporte.php">Volver</a>
		<?
	}
}
?>