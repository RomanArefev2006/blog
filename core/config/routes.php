<?php

const MIDDLEWARE = [
	"auth" => \core\classes\Middleware\Auth::class,
	"guest" => \core\classes\Middleware\Guest::class
];

/** @var $router */

//cards
$router->get("", "/cards/index.php");
$router->get("card/create", "/cards/create.php")->only("auth");
$router->get("card", "/cards/show.php");
$router->post("create", "/cards/store.php");
$router->post("comment/create", "/cards/comment-store.php")->only("auth");
$router->delete("destroy", "/cards/destroy.php")->only("auth");
$router->get("edit", "/cards/edit.php")->only("auth");
$router->patch("edit/store", "/cards/edit-store.php")->only("auth");


//user
$router->get("login", "/user/login.php")->only("guest");
$router->post("user/login", "/user/login_user.php");
$router->get("registrations", "/user/registrations.php")->only("guest");
$router->get("profile", "/user/profile.php")->only("auth");
$router->get("logout", "/user/logout.php")->only("auth");
$router->get("one-user", "/user/show.php");
$router->post("user/create", "/user/store.php");
$router->delete("destroy/user", "/user/delete-user.php")->only("auth");

