<?php

    require('./connection.php');
    ## ARQUIVO RESPONSAVEL POR FAZER AS TRANSAÇÕES COM O BANCO DE DADOS ##

    # Função responsável por inserir os dados no banco
    function createCliente($email){
        //recebe o retorno da função com a conexão aberta
        $link = abreConexao();

        // variavel responsavel por definir  a query SQL a ser disparada no banco
        $query = "insert into tb_cliente(email) values ('{$email}')";
        echo $query;

        try{
            mysqli_query($link, $query);
            return true;
        }catch(\Throwtable $th){
            throw new \Exception("Erro ao gravar no banco", 1);
            return false;
        } finally {
            mysqli_close($link);
        }

    }


?>