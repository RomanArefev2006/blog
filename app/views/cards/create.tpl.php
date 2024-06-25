<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My blog</title>
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div class="wrapper">
		<?php require_once VIEWS . "/incs/header.php"?>
		<main class="main">
            <div class="container">
                <form action="/create" method="post" class="form_create" style="width: 600px; margin: 100px auto 0 auto">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input value="<?= old('title')?>" name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <?php if (isset($_SESSION['errors']['title'])): ?>
                    <div class="alert alert-danger" role="alert">
	                    <?=$_SESSION['errors']['title']['min'] ?? ''?>
	                    <?=$_SESSION['errors']['title']['max'] ?? ''?>
                    </div>
	                <?php endif; ?>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=old('desc')?></textarea>
                    </div>
	                <?php if (isset($_SESSION['errors']['desc'])): ?>
                      <div class="alert alert-danger" role="alert">
				                <?=$_SESSION['errors']['desc']['min'] ?? ''?>
				                <?=$_SESSION['errors']['desc']['max'] ?? ''?>
                      </div>
	                <?php endif; ?>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?php if (isset($_SESSION['card-created'])): ?>
                        <div class="alert alert-success mt-5" role="alert">
                            Пост создан!
                        </div>
                    <?php endif; ?>
                </form>
            </div>
		</main>
		<?php require_once VIEWS . "/incs/footer.php"?>
        <?php unset($_SESSION['errors'])?>
        <?php unset($_SESSION['card-created'])?>
	</div>
</body>
</html>