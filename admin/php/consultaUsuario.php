<?php  
error_reporting(0);
header('Content-type: application/json; charset=utf-8');
include '../../includes/funciones.php';
$conecta = conexionBD();
if (!$conecta) 
{
	$respuesta = ['error' => false,
				  'message' => 'Ha ocurrido un error inesperado, intentalo más tarde'
				 ];
}

$usuario = limpiarDatos($_POST['usuario']);
$password = limpiarDatos($_POST['contrasena']);

if (empty($usuario) || empty($password)) 
{
	$respuesta = ['error' => false,
				  'message' => 'Todos los campos son obligatorios'];
}
else
{
	$password = encriptaPassword($password);
	$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password = '$password'";
	$resultado = consultaRegistros($consulta, $conecta);
	if ($resultado !== false) 
	{
		if ($resultado->rowCount() == 1) 
		{
			while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) 
			{
				session_start();
				$_SESSION['usuario'] = $usuario;
				$_SESSION['id'] = $registro['id_usuario'];
				$_SESSION['nombre'] = $registro['nombre'];
				$_SESSION['img'] = $registro['foto'];
				$respuesta = ['success' => true,
						  	  'message' => 'Bienvenido: ' .$registro['nombre'] .' '
						     ];
			}
		}
		else
		{
			$respuesta = ['error' => false,
					  	  'message' => 'Usuario y/o Contraseña incorrectos'];
		}
	}
}

echo json_encode($respuesta);
?>