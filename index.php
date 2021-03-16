<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header class="content-header">
        <h1>Curso php</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="content-main">
        <div class="main-content">
            <nav class="main-content-modules">
                <div class="main-content-module green">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercising.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercising.php?dir=basico&file=html">Integração Html</a></li>
                        <li><a href="exercising.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercising.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                    </ul>
                </div>


            </nav>
        </div>
    </main>
    <footer class="content-footer">
        Julio Paschoal © <?= date('Y'); ?>
    </footer>

</html>