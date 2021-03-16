<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style2.css">
</head>

</head>

<body class="content-exercising">
    <header class="content-header">
        <h1>Curso php</h1>
        <h2>Visualização do Exercícios</h2>
    </header>

    <nav class="content-navigation">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="green">Sem formatação</a>
        <a href="index.php" class="red">Voltar</a>
    </nav>

    <main class="content-main">
        <div class="main-content">
            <?php
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>

    <footer class="content-footer">
        Julio Paschoal © <?= date('Y'); ?>
    </footer>

</html>