<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = filter_input (INPUT_POST, "loginEmail"); 
    $senha = filter_input (INPUT_POST, "loginPassword");


    echo "$email<br>$senha<br>";
}else{
    header('Location: index.php');
};
