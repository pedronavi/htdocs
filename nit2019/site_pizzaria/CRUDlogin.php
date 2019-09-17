<?php
    session_start();
    require('./connection.php');
   


    function enterLogin($email, $senha){
        $link = abreConexao();
        $query = "select idlogin, email from tb_login where email = '{$email}' and senha = '{$senha}'";

        try{
            $rs = mysqli_query($link, $query);
            
        }if($linha = mysqli_fetch_assoc($rs)){
            return $linha;
        
        } finally {
            mysqli_close($link);
        
        }catch(/Throwable $th) {

        throw new \Exception("Erro ao consultar o login do banco", 1);
        return NULL;
    }finally{
        mysqli_close($link);
    }
}

?>

