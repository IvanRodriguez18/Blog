<?php  
error_reporting(0);
header('Content-type: application/json; charset=utf-8');
include '../includes/funciones.php';
$conecta = conexionBD();
if (!$conecta) 
{
	$respuesta = ['error' => false,
				  'message' => 'Ocurrio un error inesperado, intentalo más tarde'
				 ];
}
$nombre = limpiarDatos($_POST['nombre']);
$correo = limpiarDatos($_POST['correo']);
$mensaje = limpiarDatos($_POST['mensaje']);
if (!empty($nombre) && !empty($correo) && !empty($mensaje)) 
{
	$sql_ingresa = "INSERT INTO contacto VALUES(NULL, '$nombre', '$correo', '$mensaje')";
	$resultado = ingresaRegistro($sql_ingresa, $conecta);
	if ($resultado !== false) 
	{
		$respuesta = ['success' => true,
					  'message' => 'Mensaje enviado con exito'];
	}
}
else{
	$respuesta = ['error' => false,
				  'message' => 'Todos los campos son obligatorios'];
}
echo json_encode($respuesta);
?>