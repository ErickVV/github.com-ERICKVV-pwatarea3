CREATE DATABASE TAREa3_;
USE TAREA3_;

CREATE TABLE Usuarios  (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(30) NOT NULL,
    contraseña VARCHAR(30) NOT NULL
);
/*Insercion de datos */
INSERT INTO Usuarios (id, usuario, contraseña) VALUES
('1','usuario1','contraseña1');
INSERT INTO Usuarios (id, usuario, contraseña) VALUES
('2','usuario2','contraseña2');


