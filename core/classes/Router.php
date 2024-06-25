<?php

namespace core\classes;


class Router
{
	private array $routes = [];
	private string $uri;
	private string $method;

	public function __construct()
	{
		$this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
		$this->method =$_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
	}

	public function router(): void
	{
		$check = false;
		foreach ($this->routes as $route) {
			if (strtoupper($route['method']) === $this->method && $route['uri'] == $this->uri) {

				if($route['middleware']) {
					$middleware = MIDDLEWARE[$route['middleware']] ?? false;
					if(!$middleware) {
						throw new \Exception("Middleware {$route['middleware']} not found");
					}
					(new $middleware)->handle($route['middleware']);
				}

				$check = true;
				require_once CONTROLLERS ."/{$route['controller']}";
				break;
			}
		}
		if (!$check) {
			http_response_code(404);
			echo "Page not found";
			die;
		}
	}

	public function only($middleware): static
	{
		$this->routes[array_key_last($this->routes)]['middleware'] = $middleware;
		return $this;
	}

	public function add($uri, $controller, $method): static
	{
		$this->routes[] = [
			'uri' => $uri,
			'controller' => $controller,
			'method' => $method,
			'middleware' => null,
		];
		return $this;
	}

	public function get($uri, $controller): static
	{
		return $this->add($uri, $controller, "GET");
	}
	public function post($uri, $controller): static
	{
		return $this->add($uri, $controller, "POST");
	}
	public function delete($uri, $controller): static
	{
		return $this->add($uri, $controller, "DELETE");
	}
	public function patch($uri, $controller): static
	{
		return $this->add($uri, $controller, "PATCH");
	}
}