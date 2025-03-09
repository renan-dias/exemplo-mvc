-- Arquivo: database.sql
-- Descrição: Esquema do banco de dados para o projeto Estoque MVC.

-- Criação do banco de dados (se não existir)
CREATE DATABASE IF NOT EXISTS seu_banco;

-- Seleciona o banco de dados
USE seu_banco;

-- Criação da tabela de produtos (exemplo)
CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL
);

-- Inserção de dados de exemplo
INSERT INTO produtos (nome, descricao, preco, quantidade) VALUES
('Produto 1', 'Descrição do produto 1', 19.99, 10),
('Produto 2', 'Descrição do produto 2', 29.99, 5),
('Produto 3', 'Descrição do produto 3', 39.99, 20);

-- Criação de outras tabelas (exemplo)
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL
);

-- Inserção de dados de exemplo
INSERT INTO usuarios (nome, email, senha) VALUES
('Usuario 1', 'usuario1@email.com', 'senha123'),
('Usuario 2', 'usuario2@email.com', 'senha456');

-- Adicione aqui a criação de outras tabelas e dados de exemplo