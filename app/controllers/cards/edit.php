<?php
global $db;

$id_post = $_GET['id'];


$data_edit = $db->query("SELECT * FROM `cards` WHERE id = ?", [$id_post])->find();


require_once VIEWS . "/cards/edit.tpl.php";