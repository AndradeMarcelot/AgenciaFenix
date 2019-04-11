CREATE DATABASE AgenciaFenix;

USE AgenciaFenix;

CREATE TABLE clientes(
    idCliente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    idade INT,
    sexo CHAR(1),
    observacoes text
);

CREATE TABLE entrevistas(
    idEntrevista INT PRIMARY KEY AUTO_INCREMENT,
    hora VARCHAR(10),
    dia VARCHAR(10),
    idCliente INT NOT NULL,
    FOREIGN KEY (idCliente) REFERENCES clientes(idCliente) ON DELETE CASCADE ON UPDATE CASCADE 
);

# Inserindo clientes
INSERT INTO clientes(nome,idade,sexo,observacoes) 
VALUES ('João da Silva', 28, 'M', 'Experiência com fotografias'),('Marina Santos',35,'F','Expert em Photoshop');

# Criando entrevistas
INSERT INTO entrevistas(dia,hora,idCliente)VALUES('11/04/2019','15h30',1),('12/04/2019','11h00',2);


