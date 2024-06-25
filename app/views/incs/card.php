<?php for ($i = count($cards) - 1; $i >= 0; $i--): ?>
<div class="card" style="width: 700px; margin-bottom: 30px;">
	<div class="card-body">
		<h5 class="card-title"><?= $cards[$i]['title'] ?></h5>
		<p class="card-text"><?= mb_strcut($cards[$i]['description'], 0, 150) . "..." ?></p>
		<a href="/card/?id=<?=$cards[$i]['id']?>" class="card-link">Card link</a>
		<p class="card-text">Added by the user: <a href="/one-user?user=<?=$cards[$i]['user']?>" class="card-link"><?=$cards[$i]['user']?></a></p>
	</div>
</div>
<?php endfor; ?>