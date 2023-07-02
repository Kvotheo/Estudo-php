<?php
include 'db.php'; // arquivo de conexão com o banco de dados
include 'header.php'; // cabeçalho

// Mapeamento de páginas
$paginas = array(
    'cursos' => 'views/cursos.php',
    'alunos' => 'views/alunos.php',
    'inserir_curso' => 'views/inserir_curso.php',
    'matriculas' => 'views/matriculas.php',
    'home' => 'views/home.php'
);

if (isset($_GET['pagina']) && array_key_exists($_GET['pagina'], $paginas)) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'home';
}

include $paginas[$pagina];

include 'footer.php'; // rodapé
?>
