SELECT 
	SUM(valor_noite * noites) AS Valor_total_recebido
FROM reservas
WHERE deletado_em IS NULL
