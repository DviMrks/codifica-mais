SELECT
    h.nome_completo AS nome_hospede,
    ho.titulo AS titulo_hospedagem,
    s.status_nome AS status_reserva
FROM reservas r
INNER JOIN hospedes h ON r.id_hospede = h.id_hospede
INNER JOIN hospedagens ho ON r.id_hospedagem = ho.id_hospedagem
INNER JOIN status_reservas s ON r.status_id = s.id_status;
