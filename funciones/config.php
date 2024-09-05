<?php
    
class Config{

// Configuración de la base de datos
   private $dsn;
   private $username ;
   private $password;

   public function __construct(){
        $this->dsn     = 'mysql:host=localhost;dbname=practica_php;charset=utf8';
        $this->username       = 'usuario1';
        $this->password     = '';
    }
    function conexion(){
        try {
                // Crear una nueva instancia de PDO
                $pdo = new PDO($this->dsn, $this->username, $this->password);
                // Configurar PDO para lanzar excepciones en caso de error
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $pdo;
            } catch (PDOException $e) {
                // Manejar errores de conexión o consulta
                print_r('Error connection: ' . $e->getMessage());
            }
    }
    
}
  
?>
