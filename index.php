<?php  
// ✅ CORRECIÓN: Desactivar visualización de errores para JSON limpio
ini_set('display_errors', 0);
error_reporting(0);

require("Router/ProductosController.php");

header("Access-Control-Allow-Origin:*");
header("Content-type:application/json; charset=UTF-8");

$method = $_SERVER['REQUEST_METHOD'];
$MyProductoController = new ProductoController();

switch ($method){
	case 'POST':
		$MyProductoController->crearProducto();
		break;

	case 'GET':
		// ✅ CORRECIÓN: Manejar tanto listar todos como obtener por ID
		if (isset($_GET['id'])) {
			$MyProductoController->obtenerProductoPorId($_GET['id']);
		} else {
			$MyProductoController->listarProductos();
		}
		break;

	case 'PUT':
		$MyProductoController->actualizarProducto();
		break;

	default:
		http_response_code(404);
		echo json_encode([
			"success" => false, 
			"message" => "404 Not Found - El servidor no pudo encontrar el recurso solicitado."
		]);
}
?>