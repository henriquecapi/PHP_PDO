<?php
//fazendo conexao com banco de dados
try {
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","nXwww1786");
   
    $query = "Select * from clientes where id=:id";
    
    $stmt = $conexao->prepare($query);

    $stmt->bindValue(":id",$_GET['id'], PDO::PARAM_INT);
    //$stmt->bindValue(":id",$_GET['id']);

    $stmt->execute();

    print_r($stmt->fetch(PDO::FETCH_ASSOC));

    //$resultado = $stmt->execute();

   // print_r($resultado);
   
}
catch(\PDOException $e){
    echo "N�o foi poss�vel estabelecer sua conex�o!?";
    echo "<br>Code: ".$e->getCode();
    echo "<br>Erro: ".$e->getMessage();
}