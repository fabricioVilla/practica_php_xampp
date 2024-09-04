-- Crear la base de datos 'practica_php'
CREATE DATABASE IF NOT EXISTS practica_php;

-- Seleccionar la base de datos 'practica_php'
USE practica_php;


-- Crear la tabla 'usuarios' para accesos
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    contrasenia VARCHAR(20) UNIQUE NOT NULL,
    genero INTEGER (10) NOT NULL
);

-- Crear la tabla 'contactos'
CREATE TABLE IF NOT EXISTS contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    telefono VARCHAR(20) UNIQUE NOT NULL,
    rol VARCHAR(50),
    fecha DATE,
    salario DECIMAL(10, 2) -- El tipo MONEY no existe en MySQL, se usa DECIMAL en su lugar
);