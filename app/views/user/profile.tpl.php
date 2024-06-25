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
                        <li class="list-group-item">ID: <?= $_SESSION['user']['id'] ?></li>
                        <li class="list-group-item">Name: <?= $_SESSION['user']['name'] ?></li>
                        <li class="list-group-item">Email: <?= $_SESSION['user']['email'] ?></li>
                        <li class="list-group-item">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Удалить аккаунт
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="col-8">
                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                        <ul class="list-group mt-5" style="margin-right: 300px; width: 500px">
			                    <?php for($i = 0; $i < count($created_item); $i++): ?>
                              <li style="display: flex; justify-content: space-between; align-items: center" class="list-group-item"><a href="/card/?id=<?=$created_item[$i]['id']?>"> <?= $created_item[$i]['title'] ?> </a>
                                  <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Settings
                                      </button>
                                      <ul class="dropdown-menu">
                                          <form action="/destroy" method="post">
                                              <input type="hidden" name="_method" value="DELETE">
                                              <input type="hidden" name="id_card" value="<?= $created_item[$i]['id'] ?>">
                                              <li><a class="dropdown-item"><button type="submit" style="border: none; background-color: transparent">Delete</button></a></li>
                                          </form>
                                          <form action="/edit">
                                              <input type="hidden" name="id" value="<?=$created_item[$i]['id']?>">
                                              <li><a class="dropdown-item" href="#"><button type="submit" style="border: none; background-color: transparent">Edit</button></a></li>
                                          </form>
                                      </ul>
                                  </div>
                              </li>
			                    <?php endfor; ?>
			                    <?php if(empty($created_item)): ?>
                              <li class="list-group-item">No posts</li>
			                    <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
		</div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Вы уверены что хотите аккаунт? Все данные без поворотно будут удалены
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Не удалять</button>
                        <form action="/destroy/user" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</main>
	<?php require_once VIEWS . "/incs/footer.php"?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>