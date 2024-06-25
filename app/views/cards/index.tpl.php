<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My blog</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <?php require_once VIEWS . "/incs/header.php"?>
        <main class="main">
            <div class="container">
                <div class="d-flex" style="margin-top: 50px; justify-content: space-between">
                    <div>
                        <?php require_once VIEWS . "/incs/card.php"?>
                    </div>
                    <div>
	                    <?php require_once VIEWS . "/incs/sideBar.php"?>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once VIEWS . "/incs/footer.php"?>
    </div>
</body>
</html>