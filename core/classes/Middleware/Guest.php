<?php

namespace core\classes\Middleware;

class Guest
{
	public function handle()
	{
		if (check_auth()) {
			redirect("/");
		}
	}
}