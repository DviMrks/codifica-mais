USE gestao_produtos;

CREATE TABLE fornecedores (
	id_fornecedor VARCHAR(255) PRIMARY KEY,
	razao_social VARCHAR(255),
	cnpj VARCHAR(14), 
	criado_em TIMESTAMP, 
	atualizado_em TIMESTAMP,
	deletado_em TIMESTAMP
);

CREATE TABLE produtos (
	id_produtos VARCHAR(255) PRIMARY KEY,
	nome VARCHAR(255),
	descrição TEXT,
	categoria TEXT,
	preco DECIMAL(10,2),
	peso DECIMAL(10,2),
	quantidade INT,
    id_fornecedor VARCHAR(255),
		FOREIGN KEY (id_fornecedor) REFERENCES fornecedores(id_fornecedor),
	criado_em TIMESTAMP,
	atualizado_em TIMESTAMP,
	deletado_em TIMESTAMP
);
