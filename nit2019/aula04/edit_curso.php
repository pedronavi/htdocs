<?php

require './cursoCRUD.php';

if(isset($_SERVER['HTTP_REFERER'])){
    if($_SERVER['HTTP_REFERER'] == 'http://localhost/htdocsluis/nit_2019.01/aula04/listar_curso.php' &&  $_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = filter_input(INPUT_POST, 'txtId');
        $curso = filter_input(INPUT_POST, 'txtNome');
        $turno = filter_input(INPUT_POST, 'txtTurno');

        atualizarCurso($id, $curso, $turno);
        exit;
    }
}

function atualizarCurso($id, $curso, $turno){
    if(updateCurso($id, $curso, $turno)){
        echo "curso atualizado com sucesso!";
        echo "<br> <a href='listar_curso.php'> Voltar a lista </a>";
    }else {
        echo "falha ao atualizar o curso.";
        echo "<br> <a href='listar_curso.php'> Voltar a lista </a>";
    }
}
?>
