<header class="bg-body-tertiary">
	<div class="container">
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">My Blog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/card/create">Create</a>
					</li>
				</ul>
                <?php if(empty($_SESSION['user'])): ?>
                    <ul class="navbar-nav d-flex mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/registrations">Регистрация</a>
                        </li>
                    </ul>
                <?php else: ?>
                    <ul class="navbar-nav d-flex mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/profile"><?= $_SESSION['user']['name'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/logout">Выйти</a>
                        </li>
                    </ul>
                <?php endif; ?>
			</div>
		</div>
	</nav>
	</div>
</header>