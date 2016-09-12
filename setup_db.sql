DROP DATABASE IF EXISTS valemobi;
CREATE DATABASE valemobi;

GRANT INSERT, SELECT ON valemobi.* TO 'testeweb'@'localhost' IDENTIFIED BY 'vale1234';

CREATE TABLE IF NOT EXISTS `valemobi`.`mercadoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo_mercadoria` VARCHAR(45) NOT NULL,
  `nome_mercadoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `valemobi`.`transacao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quantidade` VARCHAR(45) NOT NULL,
  `preco` VARCHAR(45) NOT NULL,
  `tipo_negocio` ENUM('Compra', 'Venda') NOT NULL,
  `data_hora` VARCHAR(45) NOT NULL,
  `mercadoria_id` INT NOT NULL,
  PRIMARY KEY (`id`, `mercadoria_id`),
  INDEX `fk_transacao_mercadoria_idx` (`mercadoria_id` ASC),
  CONSTRAINT `fk_transacao_mercadoria`
    FOREIGN KEY (`mercadoria_id`)
    REFERENCES `valemobi`.`mercadoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;