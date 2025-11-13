SELECT
    ho.cidade,
    AVG((r.valor_noite * r.noites + r.taxa_limpeza + r.taxa_servico - r.desconto) / r.noites) AS valor_medio_diario_total
FROM reservas r
INNER JOIN hospedagens ho ON r.id_hospedagem = ho.id_hospedagem
GROUP BY ho.cidade