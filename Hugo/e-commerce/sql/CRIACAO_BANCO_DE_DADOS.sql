CREATE DATABASE ecommerce;
USE ecommerce;
CREATE TABLE usuarios(
	usu_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usu_nome VARCHAR(50) NOT NULL,
    usu_senha VARCHAR(50) NOT NULL,
    usu_ativo CHAR(1)
);

CREATE TABLE produtos(
	pro_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pro_nome VARCHAR(50) NOT NULL,
    pro_descricao VARCHAR(200) NOT NULL,
    pro_imagem LONGBLOB NOT NULL,
    pro_preco DECIMAL(10,2) NOT NULL,
    pro_data TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    pro_ativo CHAR(1) NOT NULL
);

SELECT * FROM usuarios;
SELECT * FROM produtos;

DELETE FROM usuarios WHERE usu_id = 2;
DELETE FROM produtos WHERE pro_id = 1;

DROP TABLE usuarios;
DROP TABLE produtos;