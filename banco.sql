create database radar;
use radar;

CREATE TABLE IF NOT EXISTS rc_usuario (
  us_id INT NOT NULL AUTO_INCREMENT,
  us_nome VARCHAR(45) NOT NULL,
  us_sobrenome VARCHAR(45) NOT NULL,
  us_email VARCHAR(45) NOT NULL,
  us_senha VARCHAR(32) NOT NULL,
  PRIMARY KEY (us_id))
ENGINE = InnoDB;

CREATE TABLE cr_crm (
  cr_id INT NOT NULL AUTO_INCREMENT,
  cr_tarefa VARCHAR(45) NOT NULL,
  cr_nome VARCHAR(45),
  cr_contato VARCHAR(45) NOT NULL,
  cr_cliente VARCHAR(45) NOT NULL,
  cr_dataInicio DATE DEFAULT(CURDATE()),
  cr_situacao VARCHAR(45) NOT NULL,
  cr_proxContato DATE NULL,
  cr_dataFinal DATE NULL,
  cr_observacao VARCHAR(150) NULL,
  rc_usuario_us_id INT NOT NULL,
PRIMARY KEY (cr_id));