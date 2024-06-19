<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Tabuada do número <?php echo $_POST['numero']; ?></h2>
        <table>
            <form> 
            <?php
            $numero = $_POST['numero'];
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>{$numero} x {$i}</td><td>=</td><td>{$resultado}</td></tr>";
            }
            ?>
            </form>
        </table>
        <a href="form.html">Calcular outra tabuada</a>
    </div>
</body>
</html>