<?php

namespace core\classes\Middleware;

class Auth
{
	public function handle()
	{
		if (!check_auth()) {
			redirect("/registrations");
		}
	}
}