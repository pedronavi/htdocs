<?php
    require './alunoCRUD.php';
    
    if(isset($_SERVER['HTTP_REFERER'])){
    if($_SERVER['HTTP_REFERER'] == 'http://localhost/htdocsluis/nit_2019.01/aula04/listar_aluno.php' &&  $_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = filter_input(INPUT_GET, 'id');
        excluirAlunos($id);
        exit;
    }
}
header('Location: index.php');

    
    function excluirAlunos($id) {
        if(deleteAlunos($id)){
            echo "Excluido com sucesso";
            echo "<a href='listar_aluno.php'> Voltar a lista </a>";
        }else {
            echo "Erro ao excluir";
            echo "<a href='listar_aluno.php'> Voltar a lista </a>";
    }
}
?>