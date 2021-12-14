<?php
function pegaConexao(){
    $conn;
    $host = 'eduardoworrel.com';         
    $user= 'root';
    $pass = 'somePassUnbroken#12345!';
    $db = 'tinderPraCachorro';
    $message_error = 'Erro na conexão';  
   
    try{
        $conn = new PDO(
            'mysql:host='.$host.';dbname='.$db,
            $user,
            $pass
        );
      
       
    } catch (PDOException $e) {
        die($message_error." Erro ".$e->getMessage());
    }
   
    echo 'Conexão com sucesso!';
}
                
?>
