
<div class="card" style="width: 18rem;">
	<div class="card-header">
		Last Posts
	</div>
	<ul class="list-group list-group-flush">
        <?php for($i = 0; $i < count($sideBar); $i++): ?>
          <li class="list-group-item"><a href="/card/?id=<?=$sideBar[$i]['id']?>"> <?= $sideBar[$i]['title'] ?> </a></li>
        <?php endfor; ?>
        <?php if(empty($sideBar)): ?>
          <li class="list-group-item">No posts</li>
        <?php endif; ?>
	</ul>
</div>
