USE gestao_produtos;

SELECT
	p.id_produtos,
    p.nome,
    p.descrição,
    p.categoria,
    p.preco,
    p.peso,
    p.quantidade,
    p.criado_em,
    p.atualizado_em,
    p.deletado_em,
    f.razao_social AS nome_do_fornecedor
FROM fornecedores f 
JOIN produtos p ON f.id_fornecedor = p.id_fornecedor;