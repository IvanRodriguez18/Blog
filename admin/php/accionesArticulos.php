<?php  
error_reporting(0);
header('Content-type: application/json; charset=utf-8');
include '../../includes/funciones.php';
$conecta = conexionBD();
if (!$conecta) 
{
	$respuesta = ['error' => false,
				  'message' => 'Ocurrio un problema inesperado, intentalo más tarde'];
}
$titulo = limpiarDatos($_POST['titulo']);
$extracto = limpiarDatos($_POST['extracto']);
$texto = limpiarDatos($_POST['texto']);
$usuario_id = validaId($_POST['usuario']);
$imagen = $_FILES['imagen'];
$tipo = $_FILES['imagen']['type'];
$accion = $_POST['accion'];

if ($accion == 'insertar') 
{
	if (empty($titulo) || empty($extracto) || empty($texto) || empty($imagen) || empty ($usuario_id)) 
	{
		$respuesta = ['error' => false,
					  'message' => 'Todos los campos son obligatorios'];
	}
	else
	{
		if ($tipo !== 'image/jpg' && $tipo !== 'image/jpeg' && $tipo !== 'image/png' && $tipo !== 'image/gif') 
		{
			$respuesta = ['error' => false,
		                  'message' => 'El archivo seleccionado no es una imagen'];
		}
		else
		{
			$imgName = $imagen['name'];
			$carpeta_destino = '../../img/';
			$archivo_subido = $carpeta_destino . $imgName;
			move_uploaded_file($imagen['tmp_name'], $archivo_subido);
			$sql_ingresa = "INSERT INTO articulos VALUES(NULL, '$titulo', '$extracto', '$texto', '$imgName', 
			CURDATE(), '$usuario_id')";
			$resultado = ingresaRegistro($sql_ingresa, $conecta);
			if ($resultado !== false) 
			{
				$respuesta = ['success' => true,
							  'message' => 'El articulo ha sido registrado y publicado con exito'];
			}
			else
			{
				$respuesta = ['error' => false,
							  'message' => 'Ha ocurrido un problema inesperado, intentalo más tarde'];
			}
		}
	}
}
echo json_encode($respuesta);
?>