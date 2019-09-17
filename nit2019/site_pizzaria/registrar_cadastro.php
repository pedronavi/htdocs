<?php
require('./cadastroCRUD.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = filter_input (INPUT_POST, "regEmail") ?? "";
    $senha = filter_input (INPUT_POST, "regPassword") ?? "";
    $endereco = filter_input (INPUT_POST, "regEndereco") ?? "";
    $cidade = filter_input (INPUT_POST, "regCidade") ?? "";
    $cep = filter_input (INPUT_POST, "regCep") ?? "";

    if(createCliente($email, $senha, $endereco, $cidade, $cep)) {
        echo "Registro gravado com sucesso <br> <a href=index.php> Clique aqui para retornar a lista. </a>";
    }else {
        echo "Falha ao gravar o curso";
    }
}else {
    
    header('Location: index.php');
}
?>