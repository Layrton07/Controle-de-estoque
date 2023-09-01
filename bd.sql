CREATE DATABASE estoque;
USE estoque;
CREATE TABLE est_produtos(
    cod_produto INT AUTO_INCREMENT NOT NULL,
    nome VARCHAR(80) NOT NULL,
    quantidade INT NOT NULL,
    CONSTRAINT PRIMARY KEY (cod_produto)
);
CREATE TABLE est_funcionario(
    cod_funcionario INT AUTO_INCREMENT NOT NULL,
    nome VARCHAR(230) NOT NULL,
    email VARCHAR(120) NOT NULL,
    senha VARCHAR(50) NOT NULL,
    cod_prod_func INT,
    CONSTRAINT PRIMARY KEY (cod_funcionario),
    CONSTRAINT a FOREIGN KEY (cod_prod_func) REFERENCES est_produtos(cod_produto)
);
