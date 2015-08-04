<?php
/**
 * Created by PhpStorm.
 * User: robbie
 * Date: 13/09/14
 * Time: 5:36 AM
 */

namespace PHPServices;


class CryptoService
{
    private $salt;

    public function __construct($config)
    {
        $this->salt = $config['authentication']['salt'];
    }

    /**
     * Salt and SHA256 hash a password
     * @param $password
     * @return string
     */
    public function secureHashPassword($password) {
        $saltedPassword = $this->salt.$password;
        $hashedPassword = hash('sha256', $saltedPassword);
        return $hashedPassword;
    }

    public function createSessionHash($seed) {
        $hashedSeed = $this->secureHashPassword($seed + time() + uniqid());

        return $hashedSeed;
    }

    public function createHash() {
        $hash = $this->secureHashPassword(uniqid() + time() + uniqid());

        return $hash;
    }

    public function generateUniqueId()
    {
        $uniqueId = hash('sha256', (time().uniqid().rand(1, 100000)));

        return $uniqueId;
    }
} 