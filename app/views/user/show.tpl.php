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
				<div class="container" style="display: flex; justify-content: space-between">
					<div>
						<div class="card mt-5" style="width: 18rem;">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">ID: <?= $user_data['id'] ?></li>
								<li class="list-group-item">Name: <?= $user_data['name'] ?></li>
								<li class="list-group-item">Email: <?= $user_data['email'] ?></li>
							</ul>
						</div>
					</div>
					<div>
						<div class="col-8">
							<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
								<ul class="list-group mt-5" style="margin-right: 300px; width: 500px">
									<?php for($i = 0; $i < count($user_posts_data); $i++): ?>
										<li style="display: flex; justify-content: space-between; align-items: center" class="list-group-item"><a href="/card/?id=<?=$user_posts_data[$i]['id']?>"> <?= $user_posts_data[$i]['title'] ?> </a>
										</li>
									<?php endfor; ?>
									<?php if(empty($user_posts_data)): ?>
										<li class="list-group-item">No posts</li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</main>
		<?php require_once VIEWS . "/incs/footer.php"?>
	</div>
</body>
</html>