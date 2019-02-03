<?php  
function conexionBD()
{
	try 
	{
		$conexion = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
		$conexion->query("SET NAMES 'utf8'");
		return $conexion;
	} catch (PDOException $e) 
	{
		return false;	
	}
}
function obtenerPagina()
{
	$pagina = basename($_SERVER['PHP_SELF']);
	$actual = str_replace('.php', '', $pagina);
	return $actual;
}
function limpiarDatos($datos)
{
	$datos = htmlspecialchars($datos);
	$datos = trim($datos);
	$datos = stripslashes($datos);
	return $datos;
}
function encriptaPassword($password)
{
	$password = hash('sha512', $password);
	return $password;
}
function consultaRegistros($sql, $conecta)
{
	$statement = $conecta->prepare($sql);
	$statement->execute();
	return $statement;
}
function ingresaRegistro($sql, $conecta)
{
	$statement = $conecta->prepare($sql);
	$statement->execute();
	return $statement;
}
function obtenById($sql, $conecta)
{
	$statement = $conecta->prepare($sql);
	$statement->execute();
	$resultado = $statement->fetchAll();
	return ($resultado) ? $resultado : false;
}
function validaId($id)
{
	return (int)limpiarDatos($id);
}
function fecha($fecha)
{
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 
	'Octubre', 'Noviembre', 'Diciembre'];
	$dia = date('d', $timestamp);
	$mes = date('m', $timestamp) - 1;
	$anio = date('Y', $timestamp);
	$fecha = "$dia de " . $meses[$mes] . " del $anio";
	return $fecha;
}
?>