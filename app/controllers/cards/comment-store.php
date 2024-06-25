<?php

global $db;

$validate = new \core\classes\Validation();
$data = [
	'comment'=>trim($_POST['comment'], " /\\<>:;")
];

$validate->validate([
	'comment'=>[
		'require'=> true,
		'max'=>50
	]
], $data);


if($validate->hasError()) {
	try {
		$db->query("INSERT INTO `comments`(`comment`, `user`, `post`) VALUES (?, ?, ?)", [
			$data['comment'],
			$_SESSION['user']['name'],
			$_GET['id']
		]);
		redirect("/card?id=".$_GET['id']);
		unset($_SESSION['errors']);
		die;
	} catch (\PDOException $e) {
		echo $e->getMessage();
	}

} else {
	$_SESSION['errors'] = $validate->getError();
	redirect("/card?id=".$_GET['id']);
}


