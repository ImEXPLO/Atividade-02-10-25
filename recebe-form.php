<?php

// Pegando um copypaste das outras atividades hehehe 
$nada = "Dado não informado";
$exibir = $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;
$imagem3 = "/img/cat3.jpg";
$imagem4 = "/img/cat4.jpg";
$imagem5 = "/img/cat5.png";
$imagem6 = "/img/cat6.png";
$ico16 = "/img/favicon-16x16.png";
$ico32 = "/img/favicon-32x32.png";

$nome = isset($_POST['nome']) && !empty($_POST['nome']) ? $_POST['nome'] : $nada;
$semestre = isset($_POST['semestre']) && !empty($_POST['semestre']) ? $_POST['semestre'] : $nada;
$numero = isset($_POST['numero']) && !empty($_POST['numero']) ? $_POST['numero'] : $nada;

$numero_tabuada = $numero;

?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado da Sua conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $ico32 ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $ico16 ?>">
    <style>
        body {
            background-image: linear-gradient(#e9ecef, #ced4da);
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }

        .title {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .card {
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
            width: 18rem;
        }

        .card-container {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
    </style>
</head>

<body class="container">
    <?php if ($exibir): ?>
        <br>
        <div class="title">
            <h1>Resultados de seu formulário</h1>
        </div>

        <div class="container">
            <!-- Juro que foi a unica forma q encontrei pra ele parar de cortar as palavras no cards :/ -->
            <!-- Não sei o que ocorreu mas as divs estavam colando as palavras na borda, mas acho que tá resolvido -->
            <div class="card-container">
                <div class="card">
                    <img src="<?= $imagem5 ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Olá <?= $nome ?>!
                        </h4>

                        <p class="card-text">
                            Você está no Semestre <?= $semestre ?> e você selecionou o
                            número
                            <?= $numero ?> como sua tabuada! No próximo card aparecerá sua tabuada!
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="<?= $imagem6 ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Você selecionou o número
                            <?= $numero ?> como sua tabuada!
                        </h5>
                        <p class="card-text">
                            <?php
                            for ($i = 0; $i <= 10; $i++) {
                                $resultado = $numero_tabuada * $i;
                                echo "<br>";
                                echo "$numero_tabuada x $i = $resultado";
                            } ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="form-fatec.php" class="btn btn-danger">Voltar</a>
        </div>

        <!-- copypaste da atividade do github -->
    <?php endif; ?>

    <?php if (!$exibir): ?>
        <h1>Página aberta com GET</h1>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>