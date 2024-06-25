<?php


global $db;

$validate = new \core\classes\Validation();

$data = [
	'email' => trim($_POST['email'], " /\\<>:;"),
	'pass' => trim($_POST['pass']), " "
];

$validate->validate([
	'email' => [
		'min' => 3,
		'max' => 50,
		'email' => true
	],
	'pass' => [
		'min' => 5,
		'max' => 190
	]
], $data);

if ($validate->hasError()) {
	try {
		$res = $db->query("SELECT * FROM `users` WHERE `email`=?", [
			$data['email']
		])->find();
		if (!empty($res)) {
			if(password_verify($data['pass'], $res['password'])) {
				$_SESSION['user'] = [
					'id' => $res['id'],
					'name' => $res['name'],
					'email' => $res['email']
				];
//				require_once CONTROLLERS . "/user/profile.php";
				redirect("/profile");
			}
		} else {
			$_SESSION['errors'] = [
				'notFound' => 'Введён не правильный email или пароль'
			];
			require_once CONTROLLERS . "/user/login.php";
		}
	} catch (\PDOException $e) {
		echo $e->getMessage();
	}

} else {
	$_SESSION['errors'] = $validate->getError();
	require_once CONTROLLERS . "/user/login.php";
}