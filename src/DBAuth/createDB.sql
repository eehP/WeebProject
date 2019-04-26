CREATE TABLE IF NOT EXISTS `table_utilisateur`( 

`id`int(3) NOT NULL AUTO_INCREMENT, 

`user`varchar(20) COLLATE latin1_general_ci NOT NULL, 

`pass`varchar(40) COLLATE latin1_general_ci NOT NULL, 

`nbr_connect` tinyint(1) NOT NULL DEFAULT 0, 

`dates`datetime NOT NULL, 

PRIMARY KEY (`id`), 

UNIQUE KEY `user` (`user`)
);