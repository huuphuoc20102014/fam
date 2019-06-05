<?php
class Admin
{
	public static function login($adminname, $password) {
		$hashedPassword = '$2y$10$CpAq5erCMommpyx1Qhghges7wHcS9CR2rtOdUwzSih4FdBYQfx2jW';	
		if ($adminname === "admin" && password_verify($password, $hashedPassword)) {
			return true;
		}
		return false;
	}
}