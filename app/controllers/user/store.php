<?php
global $db;

$validate = new \core\classes\Validation();

$data = [
	'email'=>trim($_POST['email'], " /\\<>:;"),
	'name'=>trim($_POST['name']), " /\\<>:;",
	'pass'=>trim($_POST['pass']), " "
];

$validate->validate([
	'email'=>[
		'min'=>3,
		'max'=>50,
		'email'=>true
	],
	'name'=>[
		'min'=>3,
		'max'=>100
	],
	'pass'=>[
		'min'=>5,
		'max'=>190
	]
], $data);


try {
	$email_counter = $db->query("SELECT COUNT(*) FROM users WHERE `email` = ?", [$data['email']])->findColumn();
} catch (\PDOException $e) {
	echo $e->getMessage();
}
try {
	$name_counter = $db->query("SELECT COUNT(*) FROM users WHERE `name` = ?", [$data['name']])->findColumn();
} catch (\PDOException $e) {
	echo $e->getMessage();
}

if (!empty($email_counter)) {
	$_SESSION['errors'] = ["email_counter" => "Email уже существует."];
	require_once VIEWS . "/user/registrations.tpl.php";
}

if (!empty($name_counter)) {
	$_SESSION['errors'] = ["name_counter" => "Name уже существует."];
	require_once VIEWS . "/user/registrations.tpl.php";
}


if($validate->hasError() && empty($email_counter) && empty($name_counter)) {
	try {
		$db->query("INSERT INTO `users`(`email`, `name`, `password`) VALUES (?, ?, ?)", [
			$data['email'],
			$data['name'],
			password_hash($data['pass'], PASSWORD_DEFAULT),
		]);
		$_SESSION['user-created'] = true;
		redirect("/registrations");
		die;
	} catch (\PDOException $e) {
		echo $e->getMessage();
	}
} else {
	$_SESSION['email_counter'] = "Email уже существует в базе данных.";
	$_SESSION['errors'] = $validate->getError();

	require_once CONTROLLERS . "/user/registrations.php";
}
