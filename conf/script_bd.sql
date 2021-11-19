CREATE TABLE `venda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `janeiro` DOUBLE NULL,
  `fevereiro` DOUBLE NULL,
  `marco` DOUBLE NULL,
  `abril` DOUBLE NULL,
  `maio` DOUBLE NULL,
  `junho` DOUBLE NULL,
  `julho` DOUBLE NULL,
  `agosto` DOUBLE NULL,
  `setembro` DOUBLE NULL,
  `outubro` DOUBLE NULL,
  `novembro` DOUBLE NULL,
  `dezembro` DOUBLE NULL,
  `fixo` DOUBLE NULL,
  `dataContratacao` DATE NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB