<?php  
error_reporting(0);
header('Content-type: application/json; charset=utf-8');
include '../../includes/funciones.php';
$conecta = conexionBD();
if (!$conecta) 
{
	$respuesta = ['error' => false,
				  'message' => 'Ha ocurrido un error inseperado, intentelo más tarde'];
}
$nombres = limpiarDatos(ucwords($_POST['nombres']));
$foto = $_FILES['foto'];
$tipo = $_FILES['type'];
$correo = limpiarDatos(strtolower($_POST['correo']));
$usuario = limpiarDatos($_POST['usuario']);
$password = limpiarDatos(encriptaPassword($_POST['password']));
if (empty($nombres) || empty($correo) || empty($usuario) || empty($password)) 
{
	$respuesta = ['error' => false, 
				  'message' => 'Todos los campos son obligatorios'
				 ];
}
else
{
	if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif') 
	{
		$respuesta = ['error' => false, 
				      'message' => 'El archivo seleccionado no es una imagen'
				     ];
	}
	else
	{
		$carpeta_destino = '../../img/';
		$archivo_subido = $carpeta_destino . $foto['name'];
		move_uploaded_file($foto['tmp_name'], $archivo_subido);
		$sql_usuario = "INSERT INTO usuarios VALUES(NULL, '$nombres', '$foto', '$correo', '$usuario', 
		'$password')";
		$resultado = ingresaRegistro($sql_usuario, $conecta);
		if ($resultado !== false) 
		{
			$respuesta = ['success' => true,
						  'message' => 'Tu información ha sido registrada exitosamente'];
		}
		else
		{
			$respuesta = ['error' => false,
						  'message' => 'Ha ocurrido un error inesperado, intentalo más tarde'
						 ];
		}
	}
}
echo json_encode($respuesta);
?>