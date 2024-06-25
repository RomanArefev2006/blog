<?php
global $db;

$db->query("DELETE FROM `cards` WHERE id = ?", [$_POST['id_card']]);

redirect('/profile');