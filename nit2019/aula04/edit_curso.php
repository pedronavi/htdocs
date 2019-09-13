<?php

<<<<<<< HEAD
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
=======
    require './cursoCRUD.php';

    if(isset($_SERVER['HTTP_REFERER'])) {
        if($_SERVER['HTTP_REFERER'] == 'http://localhost/aula_php/aula04/listar_curso.php' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = filter_input(INPUT_POST, 'txtId');
                $curso = filter_input(INPUT_POST, 'txtNome');
                atualizaCurso($id, $curso);
                exit;
        }
    }

    function atualizaCurso($id, $curso) {
        if(updateCurso($id, $curso)) {
            echo "curso atualizado com sucesso!";
            echo "<br><a href='listar_curso.php'>Voltar a lista</a>";
        } else {
            echo "falha ao atualizar o curso.";
            echo "<br><a href='listar_curso.php'>Voltar a lista</a>";
        }
    }

    header('Location: index.php');
>>>>>>> 22766aecd3e3f7980a634739f8bfb1e922409a6c
