<?php
/**
  */

namespace Command;

class LoginCommand extends Command
{
    public function execute(CommandContext $context)
    {
        $manager = new UserManager();
        $user = $context->get('username');
        $pass = $context->get('pass');
        $userObj = $manager->login($user, $pass);
        if (is_null($userObj)) {
            $context->setError($manager->getError());
            return false;
        }

        return true;
    }
}