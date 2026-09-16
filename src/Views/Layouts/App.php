<!DOCTYPE html>
<html>
    <head>
        <title>Kutter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" type="image/x-icon" href="/assets/logo.svg" />
    </head>

    <body>
        <div class="container">
            <div class="menubar">
                <?php require __DIR__ . "/../Partials/AsideMenu.php"; ?>
            </div>

            <div>
                <?php require __DIR__ . "/../Partials/HeaderNav.php"; ?>

                <main style="padding: 24px">
                    <?php require $view; ?>
                </main>
            </div>
        </div>
    </body>
</html>