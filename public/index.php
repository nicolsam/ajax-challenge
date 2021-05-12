<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Uso prático de Ajax</title>
    <link rel="stylesheet" href="styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class='vh-100 vw-100 '>
    <div class='w-100 h-100 flex-column'>
        <div id='content' class='p-3'>
            <div id="search" class='m-2'>
                <h2>Pesquise um nome abaixo.</h2>
                <input type="text" name="search" id="input-search" class='w-100 form-control'>
            </div>
            <div id="buttons" class='d-flex flex-row'>
                <div id="filter" class="m-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" id="filterButton" data-bs-toggle="dropdown" aria-expanded="false" type="button">
                            Filtrar por
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="filterButton">
                            <li><button class="dropdown-item active" id="nameFilter">NOME</button></li>
                            <li><button class="dropdown-item" id="ageFilter">IDADE</button></li>
                            <li><button class="dropdown-item" id="girlFilter">MENINA</button></li>
                            <li><button class="dropdown-item" id="boyFilter">MENINO</button></li>
                        </ul>
                    </div>
                </div>
                <div id="database" class='m-2'>
                    <a href="../src/database/config/criarBD.php" class='btn btn-outline-secondary'>Criar database e tabelas</a>
                </div> 
            </div>
            <div id="result" class='m-2'>
                <table class="w-100 table" id="show-result">
                    
                </table>
            </div>
            
        </div>
    </div>
    <script type="module" src="js/ajax.js"></script>
    <script type="module" src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>
