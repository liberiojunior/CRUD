create database tpa_crud;
use tpa_crud;

CREATE TABLE customers (
id int(11) NOT NULL,
name varchar(255) NOT NULL,
cpf_cnpj varchar(14) NOT NULL,
birthdate date NOT NULL,
address varchar(255) NOT NULL,
hood varchar(100) NOT NULL,
zip_code int(8) NOT NULL,
city varchar(100) NOT NULL,
state varchar(100) NOT NULL,
phone int(13) NOT NULL,
mobile int(13) NOT NULL,
ie int(11) NOT NULL,
created datetime NOT NULL,
modified datetime NOT NULL
);
ALTER TABLE customers
ADD PRIMARY KEY (id);
ALTER TABLE customers
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

CREATE TABLE estoque (
id int(11) NOT NULL,
nome varchar(50) NOT NULL,
produto varchar(150) NOT NULL,
validade date NOT NULL,
quantidade double NOT NULL,
entrada date NOT NULL,
saida date NOT NULL,
vagao varchar(100) NOT NULL,
responsavel varchar(100) NOT NULL,
tipo CHAR(2) NOT NULL
);
ALTER TABLE estoque
ADD PRIMARY KEY (id);
ALTER TABLE estoque
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;