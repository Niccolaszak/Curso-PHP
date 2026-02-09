<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do formulário</h1>
    </header>
    <main>
        <?php
            $n = $_GET['nome'] ?? 'Desconecido';
            $s = $_GET['sobrenome'] ?? 'Desconecido';
            echo "<p>Olá, <strong>$n $s</strong>! Seja bem-vindo ao meu site.</p>";
        ?>
        <p style="text-align: center;"><a href="javascript:history.go(-1)">Voltar ao formulário</a></p>
    </main>       
</body>
</html>