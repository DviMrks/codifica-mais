SELECT
    r.id_reserva,
    r.data_checkin,
    s.status_nome,
    r.deletado_em
FROM reservas r
INNER JOIN status_reservas s ON r.status_id = s.id_status
WHERE r.data_checkin > '2025-05-31' AND s.status_nome = 'Confirmada' AND r.deletado_em IS NULL;