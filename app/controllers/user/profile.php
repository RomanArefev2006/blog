<?php

global $db;

$created_item = $db->query("SELECT * FROM `cards` WHERE `user` = ?", [$_SESSION['user']['name']])->findAll();

require_once VIEWS . "/user/profile.tpl.php";