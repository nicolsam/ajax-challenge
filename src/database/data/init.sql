CREATE DATABASE IF NOT EXISTS aluno;
USE aluno;

CREATE TABLE Alunos (
    Numero INT NOT NULL PRIMARY KEY,
    Nome VARCHAR(120) NOT NULL,
    Idade INT NOT NULL,
    Hobby VARCHAR(120) NOT NULL,
    Sexo CHAR NOT NULL
);

INSERT INTO Alunos(Numero, Nome, Idade, Hobby, Sexo) VALUES (19, 'Sei la sou menina', 20, 'Correr', 'F'), (17, 'Nicolas', 20, 'JOgar no pc', 'M');

