CREATE TABLE IF NOT EXISTS `utente` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(256) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `confermato` tinyint(1) NOT NULL DEFAULT '0',
  `codice_conferma` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`username`)
);
