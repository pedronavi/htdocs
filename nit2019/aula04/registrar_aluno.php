<?php
    require('./alunoCRUD.php');

    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE CURSO

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = filter_input(INPUT_POST, "txtNome") ?? "";
        $cpf = filter_input(INPUT_POST, "txtCpf") ?? "";
        $telefone = filter_input(INPUT_POST, "txtTelefone") ?? "";

        if(createAlunos($nome,$cpf,$telefone)) {
            echo "Curso gravado com sucesso <br> <a href=listar_aluno.php> Clique aqui para retornar a lista. </a>";
        } else {
            echo "Falha ao gravar o curso <br> <a href=cadastrar_aluno.php> Clique aqui para retornar ao cadastramento. </a>";
        }
    } else {
        # redirecionamento de página
        header('Location: cadastrar_aluno.php');
    }