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
$tipo = $_FILES['foto']['type'];
$correo = limpiarDatos(strtolower($_POST['correo']));
$usuario = limpiarDatos($_POST['usuario']);
$password = limpiarDatos(encriptaPassword($_POST['password']));
if (empty($nombres) || empty($foto) || empty($correo) || empty($usuario) || empty($password)) 
{
	$respuesta = ['error' => false,
				  'message' => 'Todos los campos son obligatorios'];
} else 
{
	if ($tipo !== 'image/jpeg' && $tipo !== 'image/jpg' && $tipo !== 'image/png' && $tipo !== 'image/gif') 
	{
		$respuesta = ['error' => false,
					  'message' => 'El archivo seleccionado no es una imagen'];
	} else 
	{
		$fotoName = $foto['name'];
		$carpeta_destino = '../../img/';
		$archivo_subido = $carpeta_destino . $fotoName;
		move_uploaded_file($foto['tmp_name'], $archivo_subido);
		$ingresa_usuario = "INSERT INTO usuarios VALUES(NULL, '$nombres', '$fotoName', '$correo', '$usuario', 
		'$password')";
		$resultado = ingresaRegistro($ingresa_usuario, $conecta);
		if ($resultado !== false) 
		{
			$respuesta = ['success' => true,
						  'message' => 'Tu información ha sido registrada correctamente'];
		} else 
		{
			$respuesta = ['error' => false,
						  'message' => 'Ha ocurrido un problema con el registro, intentalo mas tarde'];
		}
		
	}
	
}

echo json_encode($respuesta);
?>