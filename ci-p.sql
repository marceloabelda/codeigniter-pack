#Creo usuario y pass

CREATE USER 'ci-p'@'%' IDENTIFIED BY 'ci-p';

GRANT USAGE ON * . * TO 'ci-p'@'%' IDENTIFIED BY 'ci-p' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

#Creo base de datos y otorgo los privilegios

CREATE DATABASE IF NOT EXISTS `ci-p` ;

GRANT ALL PRIVILEGES ON `ci-p` . * TO 'ci-p'@'%';


#Creando tabla ci_sessions
CREATE TABLE IF NOT EXISTS `ci-p`.`ci_sessions` (
session_id varchar( 40 ) DEFAULT '0' NOT NULL ,
ip_address varchar( 16 ) DEFAULT '0' NOT NULL ,
user_agent varchar( 50 ) NOT NULL ,
last_activity int( 10 ) unsigned DEFAULT 0 NOT NULL ,
user_data text DEFAULT '' NOT NULL ,
PRIMARY KEY ( session_id )
);

