-- Crear base de datos
CREATE DATABASE IF NOT EXISTS actividad4 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE actividad4;

CREATE TABLE IF NOT EXISTS marca (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL UNIQUE
);

-- Crear tabla products (ya con la columna 'marca')
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    marca VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

-- Insertar productos de prueba
INSERT INTO products (nombre, marca, precio) VALUES
('Laptop Lenovo', 'Lenovo', 2500000.00),
('Mouse inalámbrico', 'Genius', 85000.00),
('Teclado mecánico', 'Genius', 180000.00),
('Ipad', 'Apple', 2000000.00),
('Monitor 21"', 'Samsung', 800000.00);

