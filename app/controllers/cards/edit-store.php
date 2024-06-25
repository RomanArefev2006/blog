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
		$db->query("UPDATE `cards` SET `title` = ?, `description` = ? WHERE `cards`.`id` = ?;", [
			$data['title'],
			$data['desc'],
			$_POST['id']
		]);
		$_SESSION['card-created'] = true;
		redirect("/profile");
		unset($_SESSION['errors']);
		die;
	} catch (\PDOException $e) {
		echo $e->getMessage();
	}

} else {
	$_SESSION['errors'] = $validate->getError();
	redirect("/profile");
}

