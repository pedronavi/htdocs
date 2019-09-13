<?php

    require './cursoCRUD.php';

    if(isset($_SERVER['HTTP_REFERER'])){
        if($_SERVER['HTTP_REFERER'] == 'http://localhost/htdocsluis/nit_2019.01/aula04/listar_curso.php' &&  $_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = filter_input(INPUT_GET, 'id');
            atualizarCurso($id, $nome, $descricao);
            exit;
        }
    }

    function atualizarDisciplina($id, $nome, $descricao){
        if(updateDisciplina($id, $nome, $descricao)){
            echo "curso atualizado com sucesso!";
        }else {
            echo "falha ao atualizar o curso.";
        }
    }