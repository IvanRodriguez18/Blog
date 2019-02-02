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
function consultaRegistros($sql, $conecta)
{
	$statement = $conecta->prepare($sql);
	$statement->execute();
	return $statement;
}
?>