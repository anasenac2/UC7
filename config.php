<?php 
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DATABASE','brigaderia');

    $conn = new MySQLi(HOST, USER, PASS, DATABASE);

    if(!$conn) {
        echo "Falha na conexão com o Banco de Dados.";
    }

?>