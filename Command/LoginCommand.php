<?php
/**
  */

namespace Command;

class LoginCommand extends Command
{
    public function execute(\Command\CommandContext $context)
    {
        $manager = new UserManager();
        $user = $context->getParam('username');
        $pass = $context->getParam('pass');
        $userObj = $manager->login($user, $pass);
        if (is_null($userObj)) {
            $context->setError($manager->getError());
            return false;
        }

        return true;
    }
}