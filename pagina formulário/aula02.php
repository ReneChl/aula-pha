<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>

    <main>
        <?php
        // $_GET: guarda informaciones y se comunicara posteriormente; se puede gguardar cualquier informaciones
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];

        echo "É prazer te conhecer, $nome $sobrenome! A Padaria Dom Bosco Agradece o seu Catastro!"
        ?>

        <p>
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </p>
    </main>




</body>

</html>