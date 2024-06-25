<?php
global $db;

$db->query("DELETE FROM `users` WHERE id = ?", [$_SESSION['user']['id']]);
unset($_SESSION['user']);
redirect('/registrations');