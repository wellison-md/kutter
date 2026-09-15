<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cables</title>
    </head>
    <body>
        <h2>Cabos</h2>
        <br/>
        <ul>
            <?php
            foreach ($cables as $cable) {
                echo "<li>" . $cable['description']. "</li>" . PHP_EOL;
            }
            ?>
        </ul>
        <a href="/">Voltar</a>
    </body>
</html>