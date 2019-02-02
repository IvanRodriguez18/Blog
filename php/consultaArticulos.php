<?php
error_reporting(0);
header('Content-type: application/json; charset=utf-8');
include '../includes/funciones.php';
$conecta = conexionBD();
if (!$conecta) 
{
	$respuesta = [
		'error' => false,
		'message' => 'Ocurrrio un error inesperado, intentalo más tarde'
	];
}
else
{
	$obtenArticulos = "SELECT articulos.*, usuarios.nombre 
						FROM articulos
						 INNER JOIN usuarios 
						 	ON articulos.id_usuario = usuarios.id_usuario 
						 	 ORDER BY id_articulo DESC";
	$articulos = consultaRegistros($obtenArticulos, $conecta);

	if ($articulos !== false) 
	{
		$respuesta = [];

		while ($fila = $articulos->fetch(PDO::FETCH_ASSOC)) 
		{
			$articulo = ['id_articulo' => $fila['id_articulo'],
						 'titulo' => $fila['titulo'],
						 'extracto' => $fila['extracto'],
						 'texto' => $fila['texto'],
						 'img' => $fila['imagen'],
						 'fecha' => $fila['fecha_publicacion'],
						 'usuario' => $fila['nombre']
						];
			array_push($respuesta, $articulo);
		}
	}
}
echo json_encode($respuesta);
?>