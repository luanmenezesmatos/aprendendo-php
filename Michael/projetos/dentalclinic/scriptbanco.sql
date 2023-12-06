CREATE DATABASE dentalclinic;

USE dentalclinic;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(50) NOT NULL,
    idade INT NOT NULL,
    genero CHAR(1),
    endereco VARCHAR(255),
    telefone VARCHAR(20),
    tipo_usuario ENUM ('paciente', 'dentista', 'administrador') NOT NULL
);

CREATE TABLE especialidades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE usuario_especialidade (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    id_especialidade INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id),
    FOREIGN KEY (id_especialidade) REFERENCES especialidades (id),
    UNIQUE KEY unique_usuario_especialidade (id_usuario, id_especialidade)
);

CREATE TABLE consultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_dentista INT,
    id_paciente INT,
    data_consulta DATE,
    FOREIGN KEY (id_dentista) REFERENCES usuarios (id),
    FOREIGN KEY (id_paciente) REFERENCES usuarios (id)
);
