<?php
global $db;

$oneCard = $db->query("SELECT * FROM `cards` WHERE `id` = ?", [$_GET['id']])->find();
$comments = $db->query("SELECT * FROM `comments` WHERE `post` = ?", [$_GET['id']])->findAll();

require_once VIEWS . "/cards/show.tpl.php";