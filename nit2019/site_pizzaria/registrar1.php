<?php

require('./clienteCRUD.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = filter_input (INPUT_POST, "regEmail") ?? "";

    if(createCliente($email)) {
        echo "E-mail gravado com sucesso";
    }else {
        echo "Falha ao gravar o curso";
    }
}else {
    
    header('Location: index.php');
}
?>