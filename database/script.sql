--  Les réservations en cours de la journée
--Possibilité 1
SELECT * FROM `reservation` WHERE date_debut_location = NOW();
-- La fonction NOW() permet de retourner la date et l’heure du système.
--Possibilité 2
SELECT * FROM `reservation` WHERE etat_reservation = 1;


-- Les voitures disponibles
SELECT * FROM `vehicule` vh, `type_vehicule` tv
WHERE nom_type_vehicule LIKE 'Voiture'
AND tv.`id_type_vehicule` = vh.`id_type_vehicule`
AND etat_vehicule LIKE 'Disponible';

-- Les camions disponibles
SELECT * FROM `vehicule` vh, `type_vehicule` tv
WHERE nom_type_vehicule LIKE 'Camion'
AND tv.`id_vehicule` = vh.`id_type_vehicule`
AND etat_vehicule LIKE 'Disponible';

-- Les voitures en location dans la journée
SELECT * FROM `vehicule` vh, `type_vehicule` tv, `reservation` rs
WHERE nom_type_vehicule LIKE 'Voiture'
AND vh.`id_vehicule` = rs.`id_vehicule`
AND etat_vehicule LIKE 'Reservé'
AND date_debut_location <= NOW()
AND date_fin_location >= CURDATE();
-- La fonction CURDATE() récupérer la date courante


.
-- Les véhicule en location dans la journée
SELECT * FROM `vehicule` vh, `reservation` rs
WHERE nom_type_vehicule LIKE 'Voiture'
AND vh.`id_vehicule` = rs.`id_vehicule`
AND etat_vehicule LIKE 'Reservé'
AND date_debut_location <= NOW()
AND date_fin_location >= CURDATE();


-- Les véhicules qui doivent être retournés dans la journée
SELECT * FROM `vehicule` vh, `reservation` rs
WHERE nom_type_vehicule LIKE 'Voiture'
AND vh.`id_vehicule` = rs.`id_vehicule`
AND etat_vehicule LIKE 'Reservé'
AND date_debut_location < NOW()
AND date_fin_location = CURDATE();

-- Les réservations qui sont annulées dans la journée
SELECT * FROM `vehicule` vh, `reservation` rs
WHERE etat_reservation = 0
AND vh.`id_vehicule` = rs.`id_vehicule`
AND etat_vehicule LIKE 'Reservé'
AND date_debut_location < NOW()
AND date_fin_location = CURDATE();

INSERT INTO `users` (`id_user`, `nom_user`, `prenom_user`, `username`, `password`, `id_adresse`, `id_role`) VALUES 
(NULL, 'admin', 'admin', 'admin', 'passer', '2', '1');


--  Modification de l'attribut 'password' en 'passwd'
ALTER TABLE `users` CHANGE `password` `passwd` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;

--  Modification de l'attribut 'login' en 'username'
ALTER TABLE `users` CHANGE `login` `username` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;

--  Mis à jour du username de l'admin
UPDATE `users` SET `username` = 'admin@gmail.com' WHERE `users`.`id_user` = 3;
