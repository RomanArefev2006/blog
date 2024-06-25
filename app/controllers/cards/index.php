<?php
global $db;

$cards = $db->query("SELECT * FROM `cards`")->findAll();

$sideBar = $db->query("SELECT * FROM `cards` ORDER BY id DESC LIMIT 3")->findAll();
require_once VIEWS . "/cards/index.tpl.php";