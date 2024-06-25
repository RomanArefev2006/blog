<!doctype html>
<html lang="en">
<head>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My blog</title>
		<link rel="stylesheet" href="../../../public/css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
</head>
<body>
<div class="wrapper">
	<?php require_once VIEWS . "/incs/header.php"?>
	<main class="main">
		<div class="container">
            <div>
                <h1><?= $oneCard['title'] ?></h1>
                <div class="card">
                    <div class="card-body">
					            <?= $oneCard['description'] ?>
                    </div>
                </div>
                <div class="mt-3">
                    <p class="card-text">Added by the user: <a href="/one-user?user=<?=$oneCard['user']?>" class="card-link"><?=$oneCard['user']?></a></p>
                </div>
            </div>
            <div class="d-flex mt-5" style="justify-content: space-between">
                <div>
                    <div class="mb-3" style="width: 300px">
                        <form action="/comment/create?id=<?= $oneCard['id'] ?>" method="post">
                            <label for="exampleFormControlTextarea1" class="form-label">Add a comment</label>
                            <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Good post"></textarea>
                            <div class="col-auto mt-3">
                                <button type="submit" class="btn btn-primary mb-3">Add comment</button>
                            </div>
	                        <?php if (isset($_SESSION['errors']['comment'])): ?>
                              <div class="alert alert-danger" role="alert">
				                        <?=$_SESSION['errors']['comment']['require'] ?? ''?>
				                        <?=$_SESSION['errors']['comment']['max'] ?? ''?>
                              </div>
	                        <?php endif; ?>
                        </form>
                    </div>
                </div>
                <div>
                    <h5 class="card-title mb-3">Comments</h5>
                    <?php if(count($comments) > 0): ?>
                        <?php for($i = count($comments) - 1; $i >= 0; $i--): ?>
                        <div class="card" style="width: 800px;">
                            <div class="card-body">
                                <h5 class="card-title">Added by the user: <a href="/one-user?user=<?=$comments[$i]['user']?>" class="card-link"><?= $comments[$i]['user'] ?></a></h5>
                                <p class="card-text"><?= $comments[$i]['comment'] ?></p>
                            </div>
                        </div>
                        <?php endfor;?>
                    <?php else: ?>
                        <div class="card" style="width: 800px;">
                            <div class="card-body">
                                <p class="card-text">No comments</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
		</div>
	</main>
	<?php require_once VIEWS . "/incs/footer.php"?>
	<?php unset($_SESSION['errors']);?>
</div>
</body>
</html>