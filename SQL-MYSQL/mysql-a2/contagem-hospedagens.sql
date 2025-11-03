SELECT
    a.nome_completo,
    COUNT(h.id_hospedagem) AS total_hospedagens
FROM
    anfitrioes a
INNER JOIN
    hospedagens h ON a.id_anfitriao = h.id_anfitriao
GROUP BY
    a.id_anfitriao, a.nome_completo;

