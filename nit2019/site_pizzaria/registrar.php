<?php

/*if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = filter_input (INPUT_POST, "regEmail");
    $senha = filter_input (INPUT_POST, "regSenha");
    $endereco = filter_input (INPUT_POST, "regEndereco");
    $dadosendereco= filter_input (INPUT_POST, "regDadosEnd");
    $cidade = filter_input (INPUT_POST, "regCidade");
    $estado = filter_input (INPUT_POST, "regEstado");


    echo "$email<br>$senha<br>$endereco<br>$dadosendereco<br>$cidade<br>$estado<br>";
}else {
    
    header('Location: index.php');
}
?>