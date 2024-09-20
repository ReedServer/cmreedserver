<?php

namespace Src\Libaries;

require __DIR__ . '/../init.php';

use Src\Models\LoginModel;

class LoginVerifier
{
    public function __construct(private string $username, private string $password)
    {
        
    }

    public function verifyCredentials(string $username, string $password) : bool
    {
        if (!LoginModel::verifyUser()) {
            throw new \Exception("Invalid Credentials");
        }

        return true;
    }
}