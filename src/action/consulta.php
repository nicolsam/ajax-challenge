<?php 
    require "../database/config/config.php";

    $search = $_REQUEST["search"];
    try {
        $connection = new PDO($dsn, $username, $password);

        $sql = "SELECT * FROM Alunos WHERE Nome LIKE ?";

        $statement = $connection->prepare($sql);
        $statement->bindValue(1, "%$search%");
        $statement->execute();

        $result = $statement->fetchAll();

        if($statement->rowCount()){
            foreach($result as $row) {
                echo "<li>";
                echo $row["Nome"];
                echo "</li>";
            }
        } else {
            echo "Usuário não cadastrado!";
        }

    } catch(PDOException $err) {
        echo $sql . "<br>" . $err->getMessage();
    }

    
    



?>