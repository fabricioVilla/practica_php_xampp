<?php
include './config.php';
// Lee el contenido del cuerpo de la solicitud
$json = file_get_contents('php://input');

// Decodifica el JSON
$data = json_decode($json, true);


// Verifica si la decodificación fue exitosa
if (json_last_error() === JSON_ERROR_NONE) {
    // Procesa los datos
    $id= $data['id'] ??'N/A';

    $conecta = new Config();
    try {
        // Preparar la consulta SQL
        $sql = 'DELETE FROM contactos WHERE id = :id  ';
        $stmt = $conecta ->conexion()->prepare($sql);
        
        // Vincular parámetros
        $stmt->bindParam(':id',  $id );

        // Ejecutar la consulta
        $stmt->execute();
        $response = [
            'status' => 'ok',
            'message' => "SE elimino contacto" 
        ];

    } catch (PDOException $e) {
        // Manejar errores de conexión o consulta
        $response = [
            'status' => 'error',
            'message' => "Error en la conexión o consulta: " . $e->getMessage()
        ];
    }


  
} else {
    // Respuesta de error
    $response = [
        'status' => 'error',
        'message' => 'Invalid JSON data'
    ];
}

    // Establece el tipo de contenido a JSON
    header('Content-Type: application/json');
    // Envía la respuesta en formato JSON
    echo json_encode($response);
?>



