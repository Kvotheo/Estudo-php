<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$db = "aprendizado php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM curso";
$consulta_curso = mysqli_query($conexao, $query);

$query = "SELECT * FROM aluno";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT aluno.nome_aluno, curso.nome_curso 
FROM aluno, curso, aluno_curso
WHERE aluno_curso.id_aluno = aluno.id_aluno
AND aluno_curso.id_curso = curso.id_curso";
$consulta_matriculas = mysqli_query($conexao, $query);

