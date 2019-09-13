<?php

    require './cursoCRUD.php';

    if(isset($_SERVER['HTTP_REFERER'])){
        if($_SERVER['HTTP_REFERER'] == 'http://localhost/htdocsluis/nit_2019.01/aula04/listar_curso.php' &&  $_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = filter_input(INPUT_GET, 'id');
            atualizarCurso($id, $curso, $turno);
            exit;
        }
    }

    function atualizarCurso($id, $curso, $turno){
        if(updateCurso($id, $curso, $turno)){
            echo "curso atualizado com sucesso!";
        }else {
            echo "falha ao atualizar o curso.";
        }
    }