<a href="?pagina=inserir_curso">Inserir novo</a>

<table style="border: 1px solid #ccc; 
width: 100%">

<tr>
    <th>Nome do curso</th>
    <th>Carga horária</th>
</tr>

<?php
while($linha = mysqli_fetch_array($consulta_curso)){
    echo '<tr><td>'.$linha['nome_curso'].'</td>';
    echo '<td>'.$linha['carga_horaria'].'</td></tr>';
}

?>

</table>