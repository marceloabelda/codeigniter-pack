CREATE USER 'codeigniter-pack'@'%' IDENTIFIED BY 'codeigniter-pack';

GRANT USAGE ON * . * TO 'codeigniter-pack'@'%' IDENTIFIED BY 'codeigniter-pack' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

CREATE DATABASE IF NOT EXISTS `codeigniter-pack` ;

GRANT ALL PRIVILEGES ON `codeigniter-pack` . * TO 'codeigniter-pack'@'%';


