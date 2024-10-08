<?php

namespace Controllers;

use Exception;
use Model\Producto;
use MVC\Router;
use Model\ActiveRecord;

class ProductoController
{
    public static function index(Router $router)
    {
        $router->render('productos/index', []);
    }

    public static function guardarAPI()
    {
        $_POST['producto_nombre'] = htmlspecialchars($_POST['producto_nombre']);
        $_POST['producto_precio'] = filter_var($_POST['producto_precio'], FILTER_VALIDATE_FLOAT);

        try {
            $producto = new Producto($_POST);
            $resultado = $producto->crear();
            http_response_code(200);
            echo json_encode([
                'codigo' => 1,
                'mensaje' => 'Registro Guardado Correctamente'
            ]);
        } catch (Exception $error) {
            http_response_code(500);
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al Guardar Registro',
                'detalle' => $error->getMessage()
            ]);
        }
    }

    public static function BuscarAPI()
    {
        try {

            $sql = "SELECT * FROM productos where producto_situacion = 1";

            $productos = Producto::fetchArray($sql);
            http_response_code(200);
            echo json_encode($productos);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al buscar productos',
                'detalle' => $e->getMessage(),
            ]);
        }
    }

    public static function modificarAPI()
    {
        $_POST['producto_nombre'] = htmlspecialchars($_POST['producto_nombre']);
        $producto_precio = filter_var($_POST['producto_precio'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        $id = filter_var($_POST['producto_id'], FILTER_SANITIZE_NUMBER_INT);
        try {

            $producto = Producto::find($id);
            $producto->sincronizar($_POST);
            $producto->actualizar();
            http_response_code(200);
            echo json_encode([
                'codigo' => 3,
                'mensaje' => 'Producto modificado exitosamente',
            ]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al modificar producto',
                'detalle' => $e->getMessage(),
            ]);
        }
    }

    public static function eliminarAPI()
    {

        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        try {

            $producto = Producto::find($id);
            $producto->sincronizar([
                'producto_situacion' => 0
            ]);
            // echo json_encode($producto);
            // exit;
            $producto->actualizar();
            http_response_code(200);
            echo json_encode([
                'codigo' => 4,
                'mensaje' => 'Producto eliminado exitosamente',
            ]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al eliminar el producto',
                'detalle' => $e->getMessage(),
            ]);
        }
    }
}
