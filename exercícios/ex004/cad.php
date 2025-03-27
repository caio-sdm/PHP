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
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "John";
            $snome = $_GET["snome"] ?? "Doe";

            echo "<p>É um prazer te conhecer, <strong>$nome $snome</strong>!\u{2728}";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>

<!-- 
//var_dump($_GET); quando    method = get
//$_POST quando method = post
//$_REQUEST = $_GET + $_POST + $_COOKIES 
-->