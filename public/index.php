<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Uso prático de AJax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
    <div class='content'>
        <div id="database">
            <a href="../src/database/config/databaseCreate.php">Criar database e Tabela</a>
        </div>  
        <div id="search">
            <input type="text" name="search" id="input-search">
        </div>
        <div id="result">
            <ul id="show-result"></ul>
        </div>
    </div>
    <script type="module" src="script/ajax.js"></script>
    <script type="module" src="script/app.js"></script>
</body>
</html>
