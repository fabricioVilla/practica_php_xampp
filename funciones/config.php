<?php

    // Configuración de la base de datos
    $dsn = 'mysql:host=localhost;dbname=practica_php;charset=utf8';
    $username = 'usuario1';
    $password = '';

    try {
        // Crear una nueva instancia de PDO
        $pdo = new PDO($dsn, $username, $password);

        // Configurar PDO para lanzar excepciones en caso de error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
    } catch (PDOException $e) {
        // Manejar errores de conexión o consulta
        $response = [
            'status' => 'error',
            'message' => "Error en la conexión o consulta: " . $e->getMessage()
        ];
    }
  
  
?>
