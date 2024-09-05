<?php
include './config.php';
// Lee el contenido del cuerpo de la solicitud
$json = file_get_contents('php://input');

// Decodifica el JSON
$data = json_decode($json, true);


// Verifica si la decodificación fue exitosa
if (json_last_error() === JSON_ERROR_NONE) {
    // Procesa los datos
    $nombre = $data['nombre'] ?? 'N/A';
    $correo = $data['correo'] ?? 'N/A';
    $telefono =$data['telefono'] ?? 'N/A';
    $rol = $data['rol'] ?? 'N/A';
    $fechaUnion =$data['fechaUnion'] ?? 'N/A';
    $salario =$data['salario'] ?? 'N/A';
    $id= $data['id'] ??'N/A';

    $conecta = new Config();
    try {
        // Preparar la consulta SQL
        $sql = 'UPDATE contactos set 
        nombre = :nombre, 
        email=:email,
        telefono= :telefono,
        rol=:rol, 
        fecha= :fecha,
        salario=:salario
        WHERE id = :id  ';
        $stmt = $conecta ->conexion()->prepare($sql);
        
        // Vincular parámetros
        $stmt->bindParam(':nombre',  $nombre);
        $stmt->bindParam(':email',  $correo);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':rol',  $rol );
        $stmt->bindParam(':fecha',  $fechaUnion );
        $stmt->bindParam(':salario',  $salario );
        $stmt->bindParam(':id',  $id );

        // Ejecutar la consulta
        $stmt->execute();
        $response = [
            'status' => 'ok',
            'message' => "SE actualizo contacto" 
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



