<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>

<body>
    <h2>Insira um número para verificar se é par ou ímpar:</h2>
    <form method="POST" action="">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero = intval($_POST['numero']);

       
        if ($numero % 2 == 0) {
            echo "<h3>O número $numero é Par.</h3>";
        } else {
            echo "<h3>O número $numero é Ímpar.</h3>";
        }
    }
    ?>

</body>

</html>
