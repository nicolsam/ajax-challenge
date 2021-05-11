<?php
require "config.php";

try {
    $connection = new PDO($dsn, $username, $password);
    $sql = file_get_contents("../data/init.sql");
    $connection->exec($sql);

    echo "O Banco de Dados e suas Tabelas foram criadas com sucesso.";

} catch(PDOException $err) {
    echo $sql . "<br>" . $err->getMessage();
}

?>