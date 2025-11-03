CREATE DATABASE hospeda_brasil;
USE hospeda_brasil;

CREATE TABLE status_reservas (
  id_status INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  status_nome VARCHAR(40) NOT NULL
);

INSERT INTO status_reservas (status_nome) VALUES
  ('Pendente'), 
  ('Confirmada'), 
  ('Finalizada'), 
  ('Cancelada');

CREATE TABLE anfitrioes (
  id_anfitriao BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome_completo VARCHAR(120) NOT NULL,
  email VARCHAR(255) NOT NULL,
  telefone VARCHAR(20),
  cpf VARCHAR(11),
  data_nascimento DATE,
  criado_em TIMESTAMP NOT NULL,
  atualizado_em TIMESTAMP NULL DEFAULT NULL,
  deletado_em TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE hospedes (
  id_hospede BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome_completo VARCHAR(120) NOT NULL,
  email VARCHAR(255) NOT NULL,
  telefone VARCHAR(20),
  cpf VARCHAR(11),
  data_nascimento DATE,
  criado_em TIMESTAMP NOT NULL,
  atualizado_em TIMESTAMP NULL DEFAULT NULL,
  deletado_em TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE hospedagens (
  id_hospedagem BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_anfitriao BIGINT NOT NULL,
  titulo VARCHAR(150) NOT NULL,
  descricao TEXT,
  tipo VARCHAR(30),
  quartos INT NOT NULL,
  banheiros INT NOT NULL,
  cidade VARCHAR(80)  NOT NULL,
  estado VARCHAR(40)  NOT NULL,
  cep VARCHAR(16)  NOT NULL,
  pais VARCHAR(60)  NOT NULL,
  preco_noite DECIMAL(10,2) NOT NULL,
  taxa_limpeza DECIMAL(10,2),
  ativo TINYINT(1) NOT NULL,
  criado_em TIMESTAMP NOT NULL,
  atualizado_em TIMESTAMP NULL,
  deletado_em TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE reservas (
  id_reserva BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_hospedagem BIGINT NOT NULL,
  id_hospede BIGINT NOT NULL,
  status_id INT NOT NULL,
  data_checkin DATE NOT NULL,
  data_checkout DATE NOT NULL,
  qtd_hospedes INT NOT NULL,
  valor_noite DECIMAL(10,2) NOT NULL,
  noites INT NOT NULL,
  taxa_limpeza DECIMAL(10,2),
  taxa_servico DECIMAL(10,2),
  desconto DECIMAL(10,2),
  criado_em TIMESTAMP NOT NULL,
  atualizado_em TIMESTAMP NULL,
  deletado_em TIMESTAMP NULL DEFAULT NULL
);
