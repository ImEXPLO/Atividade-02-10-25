<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO | FATEC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(#e9ecef, #ced4da);
            min-height: 100vh;
        }

        .title {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>


<body>
    <div class="container">

        <h1 class="title">FORMULÁRIO FATEC | MÉTODO POST</h1>
        <form method="POST" action="recebe-form.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Seu Nome</label>
                <input type="text" class="form-control" id="nome_aluno" name="nome">
            </div>
            <div class="mb-3">
                <label for="semestre" class="form-label">Semestre Atual</label>
                <select name="semestre" id="semestre" class="form-control">
                    <option value="1">Semestre 1</option>
                    <option value="2">Semestre 2</option>
                    <option value="3">Semestre 3</option>
                    <option value="4">Semestre 4</option>
                    <option value="5">Semestre 5</option>
                    <option value="6">Semestre 6</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="numero" class="form-label">Um Número Desejado</label>
                <input type="number" class="form-control" id="numero_escolhido" name="numero">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Enviar pro PHP</button>
            <button type="reset" class="btn btn-warning">Resetar</button>
            <a href="index.php" class="btn btn-danger">Voltar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>