<?php
$imagem1 = "/img/cat1.jpg";
$imagem2 = "/img/cat2.png";
$imagem3 = "/img/cat3.jpg";
$github = "https://github.com/ImEXPLO";
$ico16 = "/img/favicon-16x16.png";
$ico32 = "/img/favicon-32x32.png";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 02-10-25</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $ico32 ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $ico16 ?>">
    <style>
        body {
            background-image: linear-gradient(#e9ecef, #ced4da);
            min-height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .rows-letras {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .code {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            display: flex;
            flex-direction: column;
            width: 18rem;
        }

        .card-body {
            flex-grow: 1;
        }

        .card-container {
            display: flex;
            gap: 1rem;
        }
    </style>
</head>

<body>
    <div class="rows-letras">
        <h1><?= "Olá Mundo!"; ?></h1>
    </div>
    <div class="rows-letras">
        <p>Para iniciar o PHP em uma pasta</p>
    </div>
    <div class="code">
        <code>
    php -S localhost:8000
    </code>
    </div>
    <br>
    </div>
    <br>
    <div class="container">
        <div class="card-container">
            <div class="card">
                <img src="<?= $imagem1 ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Sistema de Cálculo FATEC</h5>
                    <p class="card-text">É um Formulário que solicita ao usuário o seu nome, semestre do curso e um
                        número
                        de 1 a 10</p>
                    <a href="form-fatec.php" class="btn btn-danger">LESSGOOO</a>
                </div>
            </div>

            <div class="container">
                <div class="card">
                    <img src="<?= $imagem2 ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Outros projetos</h5>
                        <p class="card-text">É serio, não olhe os outros projetos, é um pior que o outro.</p>
                        <a href="<?= $github ?>" class="btn btn-warning">LESSGOOO</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>