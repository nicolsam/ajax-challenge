CREATE DATABASE IF NOT EXISTS aluno;
USE aluno;

CREATE TABLE Alunos (
    Nome VARCHAR(120) NOT NULL PRIMARY KEY
);

INSERT INTO Alunos(Nome) VALUES ('Grazi', 'Nicolas', 'João Paulo', 'Vitor Almeida');