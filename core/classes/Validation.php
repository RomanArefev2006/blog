<?php

namespace core\classes;

class Validation
{
	private array $errors = [];
	public function validate(array $role, array $data): void
	{
		foreach ($role as $key => $value) {
			if(array_key_exists($key, $data)) {
				$this->check($key, $value, $data);
			}
		}
	}
	private function check(string $title, array $role, array $data): void
	{
			foreach ($role as $key => $value) {
//				$this->$key($title, $role[$key], $data);
				call_user_func_array([$this, $key], [$title, $value, $data]);
			}
	}

	private function min(string $title, int $role, array $data): void
	{
		foreach ($data as $key => $value) {
			if($key == $title) {
				if (mb_strlen($value) <= $role) {
					$this->setError($title, "min", "Ввдено меньше {$role} символов");
				}
			}
		}
	}
	private function max(string $title, int $role, array $data): void
	{
		foreach ($data as $key => $value) {
			if($key == $title) {
				if (mb_strlen($value) > $role) {
					$this->setError($title, "max", "Ввдено больше {$role} символов");
				}
			}
		}
	}
	private function require(string $title, bool $role, array $data): void
	{
		foreach ($data as $key => $value) {
			if($key == $title) {
				if ($role) {
					if(empty($value)) {
						$this->setError($title, "require", "Поле должно быть заполнено.");
					}
				}
			}
		}
	}
	private function email(string $title, bool $role, array $data): void
	{
		if ($role) {
			if (empty(filter_var($data['email'], FILTER_VALIDATE_EMAIL))) {
				$this->setError($title, "email", "Не коректный email");
			};
		}
	}
	private function setError(string $title, string $role, string $error): void
	{
		$this->errors[$title] = [
			$role => $error
		];
	}
	public function getError(): array
	{
		return $this->errors;
	}
	public function hasError(): bool
	{
		return empty($this->errors);
	}
}