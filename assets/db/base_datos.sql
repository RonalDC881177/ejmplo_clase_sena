# DROP DATABASE base_datos;
-- estructura base de datos
-- -----creacion BD----
CREATE DATABASE base_datos DEFAULT CHARACTER SET utf8 ;
USE base_datos;

-- creacion tabla roles--

CREATE TABLE ROLES (
    rol_code INT(11) NOT NULL AUTO_INCREMENT,
    rol_name VARCHAR(45) NOT NULL,
    PRIMARY KEY (rol_code)
) ENGINE = InnoDB;