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
            <div style="width: 800px; margin-top: 50px;">
            <form action="/user/login" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input placeholder="example@email.ru" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
	            <?php if (isset($_SESSION['errors']['email'])): ?>
                  <div class="alert alert-danger" role="alert">
				            <?=$_SESSION['errors']['email']['email'] ?? ''?>
                  </div>
	            <?php endif; ?>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input placeholder="********" name="pass" type="password" class="form-control" id="exampleInputPassword1">
                </div>
	            <?php if (isset($_SESSION['errors']['pass'])): ?>
                  <div class="alert alert-danger" role="alert">
				            <?=$_SESSION['errors']['pass']['min'] ?? ''?>
				            <?=$_SESSION['errors']['pass']['max'] ?? ''?>
                  </div>
	            <?php endif; ?>
	            <?php if (isset($_SESSION['errors']['notFound'])): ?>
                  <div class="alert alert-danger" role="alert">
				            <?=$_SESSION['errors']['notFound']?>
                  </div>
	            <?php endif; ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                <div class="mt-3">
                    <p>Нет аккаунта? - <a href="/registrations" class="link-info">Зарегистрируйся!</a></p>
                </div>
            </div>
		</div>
	</main>
	<?php require_once VIEWS . "/incs/footer.php"?>
	<?php unset($_SESSION['errors']) ?>
</div>
</body>
</html>