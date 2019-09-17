<?php
/*session_start();
require('./loginCRUD.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = filter_input (INPUT_POST, "loginEmail") ?? "";
    $senha = filter_input (INPUT_POST, "loginPassword") ?? "";

    if(createLogin($email, $senha,)) {
        echo "Login  realizado com sucesso <br> <a href=index.php> Clique aqui para retornar a lista. </a>";
    }else {
        echo "Falha ao acessar o login";
    }
}else {
    
    header('Location: index.php');
}
?>