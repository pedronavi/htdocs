<?php

    require('./cursoCRUD.php');

    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE CURSO

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = filter_input(INPUT_POST, "txtNome") ?? "";
        $turno = filter_input(INPUT_POST, "txtTurno") ?? "";
        
        if(createCurso($nome,$turno)) {
            echo "Curso gravado com sucesso <br> <a href=listar_curso.php> Clique aqui para retornar a lista. </a>";
        } else {
            echo "Falha ao gravar o curso <br> <a href=cadastrar_curso.php> Clique aqui para retornar ao cadastramento. </a>";
        }
    } else {
        # redirecionamento de página
        header('Location: cadastrar_curso.php');
    }