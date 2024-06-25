<?php
function old($x): string
{
	return $_POST[$x] ?? "";
}

function check_auth(): bool
{
	return isset($_SESSION['user']);
}
function redirect(string $url): void
{
	header("Location: $url");
}