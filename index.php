<?php
include 'db.php'; # banco de dados
include 'header.php'; # cabeçalho

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];

    if ($pagina == 'cursos') {
        include 'views/cursos.php';
    } 
    else if ($pagina == 'inserir_curso') {
        include 'views/inserir_curso.php';
    } 
    else if ($pagina == 'alunos') {
        include 'views/alunos.php';
    } 
    else if ($pagina == 'matriculas') {
        include 'views/matriculas.php';
    } 
    else {
        include 'views/home.php';
    }
} 

include 'footer.php'; # rodapé
?>
