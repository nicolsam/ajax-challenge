<?php 
    require "../database/config/config.php";

    $search = $_REQUEST["search"];
    $filter = $_REQUEST["filter"];

    try {
        $connection = new PDO($dsn, $username, $password);

        $sqlraw = "SELECT * FROM Alunos";

        $sql = $sqlraw." WHERE Nome LIKE ?";
        
        if($filter == "Number") {
            $sql = $sql." ORDER BY Idade asc";
        } else if($filter == "Name") {
            $sql = $sql." ORDER BY Nome asc";
        } else if($filter == "Girls") {
            if(strlen($search) < 1) {
                $sql = $sqlraw." WHERE Sexo = 'F'";
            } else {
                $sql = $sql." AND Sexo = 'F'";
            }   
        } else if($filter == "Boys") {
            if(strlen($search) < 1) {
                $sql = $sqlraw." WHERE Sexo = 'M'";
            } else {
                $sql = $sql." AND Sexo = 'M'";
            } 
        }
        
        $statement = $connection->prepare($sql);
        $statement->bindValue(1, "%$search%");
        $statement->execute();

        $result = $statement->fetchAll();
            
        if($statement->rowCount()){
            echo "
                <tr>
                    <th class='col'>NÚMERO</th>
                    <th class='col'>NOME</th>
                    <th class='col'>IDADE</th>
                    <th class='col'>HOBBY</th>
                </tr>
            ";
                
            foreach($result as $row) {
                echo "
                    <tr>
                        <td>".$row['Numero']."</td>
                        <td>".$row['Nome']."</td>
                        <td>".$row['Idade']."</td>
                        <td>".$row['Hobby']."</td>
                    </tr>";
                }
            
            } else {
                echo "Usuário não cadastrado!";
            }

    } catch(PDOException $err) {
        echo $sql . "<br>" . $err->getMessage();
    }
?>