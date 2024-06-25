<?php
unset($_SESSION['user']);
header("location: /login");
die;