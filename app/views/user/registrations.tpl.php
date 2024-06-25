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
            <form action="/user/create" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input value="<?= old('email') ?>" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@email.ru">
	                <?php if (isset($_SESSION['errors']['email']) || isset($_SESSION['errors']['email_counter'])): ?>
                      <div class="alert alert-danger" role="alert">
                        <?=$_SESSION['errors']['email_counter'] ?? ''?>
                        <?=$_SESSION['errors']['email']['email'] ?? ''?>
                      </div>
	                <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User name</label>
                    <input value="<?= old('name') ?>" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
	                <?php if (isset($_SESSION['errors']['name']) || isset($_SESSION['errors']['name_counter'])): ?>
                      <div class="alert alert-danger" role="alert">
	                    <?=$_SESSION['errors']['name_counter'] ?? ''?>
                        <?=$_SESSION['errors']['name']['min'] ?? ''?>
                        <?=$_SESSION['errors']['name']['max'] ?? ''?>
                      </div>
	                <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="**********">
                </div>
	            <?php if (isset($_SESSION['errors']['pass'])): ?>
                  <div class="alert alert-danger" role="alert">
				            <?=$_SESSION['errors']['pass']['min'] ?? ''?>
				            <?=$_SESSION['errors']['pass']['max'] ?? ''?>
                  </div>
	            <?php endif; ?>
                <button type="submit" class="btn btn-primary">Submit</button>
	            <?php if (isset($_SESSION['user-created'])): ?>
                  <div class="alert alert-success mt-3" role="alert">
                      Аккаунт создан!
                  </div>
	            <?php endif; ?>
            </form>
            <div class="mt-3">
                <p>Есть аккаунт? - <a href="/login" class="link-info">Авторизируйся!</a></p>
            </div>
        </div>
	</main>
	<?php require_once VIEWS . "/incs/footer.php"?>
    <?php unset($_SESSION['errors']) ?>
    <?php unset($_SESSION['user-created']) ?>
</div>
</body>
</html>