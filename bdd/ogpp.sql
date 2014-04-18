# script créé le : Wed Apr 16 17:28:38 CEST 2014 -   syntaxe MySQL ;

# use  VOTRE_BASE_DE_DONNEE ;

DROP TABLE IF EXISTS uc ;
CREATE TABLE uc (uc_id int AUTO_INCREMENT NOT NULL,
uc_nom VARCHAR(50),
uc_model VARCHAR(50),
uc_processeur VARCHAR(50),
uc_ram INT,
uc_dd INT,
user_id INT NOT NULL,
locaux_id INT NOT NULL,
PRIMARY KEY (uc_id) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS utilisateurs ;
CREATE TABLE utilisateurs (user_id int AUTO_INCREMENT NOT NULL,
user_login VARCHAR(50),
user_nom VARCHAR(50),
user_prenom VARCHAR(50),
user_mdp VARCHAR(50),
user_tel VARCHAR(50),
user_mail VARCHAR(50),
service_id INT NOT NULL,
PRIMARY KEY (user_id) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS imprimantes ;
CREATE TABLE imprimantes (print_id int AUTO_INCREMENT NOT NULL,
print_nom VARCHAR(50),
print_model VARCHAR(50),
print_service VARCHAR(50),
print_etage VARCHAR(50),
locaux_id INT NOT NULL,
PRIMARY KEY (print_id) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS ecrans ;
CREATE TABLE ecrans (ecran_id int AUTO_INCREMENT NOT NULL,
ecran_nom VARCHAR(50),
ecran_model VARCHAR(50),
ecran_taille INT,
uc_id INT NOT NULL,
PRIMARY KEY (ecran_id) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS locaux ;
CREATE TABLE locaux (locaux_id int AUTO_INCREMENT NOT NULL,
locaux_num INT,
locaux_batiment VARCHAR(1),
PRIMARY KEY (locaux_id) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS services ;
CREATE TABLE services (service_id int AUTO_INCREMENT NOT NULL,
service_nom VARCHAR(50),
service_user VARCHAR(50),
PRIMARY KEY (service_id) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS impression ;
CREATE TABLE impression (print_id int AUTO_INCREMENT NOT NULL,
user_id INT NOT NULL,
PRIMARY KEY (print_id,
 user_id) ) ENGINE=InnoDB;

ALTER TABLE uc ADD CONSTRAINT FK_uc_user_id FOREIGN KEY (user_id) REFERENCES utilisateurs (user_id);

ALTER TABLE uc ADD CONSTRAINT FK_uc_locaux_id FOREIGN KEY (locaux_id) REFERENCES locaux (locaux_id);
ALTER TABLE utilisateurs ADD CONSTRAINT FK_utilisateurs_service_id FOREIGN KEY (service_id) REFERENCES services (service_id);
ALTER TABLE imprimantes ADD CONSTRAINT FK_imprimantes_locaux_id FOREIGN KEY (locaux_id) REFERENCES locaux (locaux_id);
ALTER TABLE ecrans ADD CONSTRAINT FK_ecrans_uc_id FOREIGN KEY (uc_id) REFERENCES uc (uc_id);
ALTER TABLE impression ADD CONSTRAINT FK_impression_print_id FOREIGN KEY (print_id) REFERENCES imprimantes (print_id);
ALTER TABLE impression ADD CONSTRAINT FK_impression_user_id FOREIGN KEY (user_id) REFERENCES utilisateurs (user_id);
