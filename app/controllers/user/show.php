<?php
global $db;

$user_data = $db->query("SELECT * FROM `users` WHERE `name` = ?", [$_GET['user']])->find();
$user_posts_data = $db->query("SELECT * FROM `cards` WHERE `user` = ?", [$_GET['user']])->findAll();

require_once VIEWS . "/user/show.tpl.php";