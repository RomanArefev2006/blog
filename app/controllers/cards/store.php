<?php

global $db;

$validate = new \core\classes\Validation();
$data = [
	'title'=>trim($_POST['title'], " /\\<>:;"),
	'desc'=>trim($_POST['desc']), " /\\<>:;",
];

$validate->validate([
	'title'=>[
		'min'=>3,
		'max'=>50
	],
	'desc'=>[
		'min'=>40,
		'max'=>1500
	]
], $data);


if($validate->hasError()) {
	try {
		$db->query("INSERT INTO `cards`(`title`, `description`, `user`) VALUES (?, ?, ?)", [
			$data['title'],
			$data['desc'],
			$_SESSION['user']['name']
		]);
		$_SESSION['card-created'] = true;
		redirect("/card/create");
		unset($_SESSION['errors']);
		die;
	} catch (\PDOException $e) {
		echo $e->getMessage();
	}

} else {
	$_SESSION['errors'] = $validate->getError();
	require_once CONTROLLERS . "/cards/create.php";
}

