UPDATE produtos
SET preco='100.00'
WHERE id_produtos IN ('2','6','10');

UPDATE produtos
SET quantidade='20'
WHERE id_produtos IN ('2','6','10');

UPDATE produtos
SET atualizado_em=NOW()
WHERE id_produtos IN ('2','6','10');