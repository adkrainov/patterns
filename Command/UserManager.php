<?php
/**
 */

namespace Command;

class UserManager
{
    const ERROR = 'access denied';

    protected $validUser = 'alexey';

    protected $validPass = 'ok';

    protected $error;

    public function login ($user, $pass)
    {
        if ($this->validUser == $user && $this->validPass == $pass) {
            $this->error = null;
            return $this;
        }

        return null;
    }
}