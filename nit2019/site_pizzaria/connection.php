<?php
    # Definição das variáveis (de ambientes) de conexão.

    define("SERVER","localhost"); #127.0.0.1, IP do server etc etc... 
    define("USER","root");
    define("PASS","");
    define("DB","db_pizzaria");
    define("PORT",3306); # O PORT DO BANCO DE DADOS, 3306 PADRÃO SQL
    
    function abreConexao() {
       // entregar(retornar) o contexto da conexão
        $link = mysqli_connect(SERVER, USER, PASS, DB, PORT);      #CONSTANTE NAO SE USA CIFRÃO
        // set encode UTF-8
        mysqli_set_charset($link, "utf-8");
        return $link;
    };

    $con = abreConexao();

    if(!$con) {
        echo "Erro ao estabelecer uma conexão com o banco de dados <br>";
        echo "Código do erro: " . mysqli_connect_errno() . "<br>"; //errno = exibe o codigo de erro
        echo "Msg de erro: " . mysqli_connect_error();
        exit;
    };

    #echo "Conexão estabelecida com sucesso.<br>";
    #echo "Informações do servidor: " .mysqli_get_host_info($con);

    #mysqli_close($con);