<table style="border: 1px solid #ccc; 
width: 100%">

<tr>
    <th>Nome dos aluno</th>
    <th>Nome do curso</th>
</tr>

<?php
while($linha = mysqli_fetch_array($consulta_matriculas)){
    echo '<tr><td>'.$linha['nome_aluno'].'</td>';
    echo '<td>'.$linha['nome_curso'].'</td></tr>';
}

?>

</table>