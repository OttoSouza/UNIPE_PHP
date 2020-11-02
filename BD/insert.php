<?php

    // 1ª e 2ª Etapa - Conexão com um SGBD e com uma base de dados específica
    $servidor = new PDO('mysql:host=localhost;dbname=livros', 'root', '');

    // 3ª Etapa - Executar uma consulta a partir do meu objeto PDO
    // Insert, Update e Delete
    $consultaPrep = $servidor->prepare("INSERT INTO famosos (nome) VALUES (:nome)");
    $consultaPrep->bindParam(":nome", $nome);

    $nome = "Otto Souza";
    $consultaPrep->execute();


    $servidor = null;

?>