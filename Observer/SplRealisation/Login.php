<?php
/**
 */

namespace Observer\SplRealisation;

class Login implements \SplSubject
{
    const  LOGIN_USER_UNKNOWN = 1;
    const  LOGIN_WRONG_PASS   = 2;
    const  LOGIN_ACCESS       = 3;

    /**
     * @var \SplObjectStorage
     */
    private $storage;
    private $status = array();

    public function __construct()
    {
        $this->storage = new \SplObjectStorage();
    }


    public function handleLogin($user, $pass, $ip)
    {
        switch(rand(1,3)) {
            case 1:
                $this->setStatus(self::LOGIN_USER_UNKNOWN, $user, $ip);
                $ret = true;
                break;
            case 2:
                $this->setStatus(self::LOGIN_WRONG_PASS, $user, $ip);
                $ret = false;
                break;
            case 3:
                $this->setStatus(self::LOGIN_USER_UNKNOWN, $user, $ip);
                $ret = false;
                break;
        }
        $this->notify();
        return $ret;
    }

    private function setStatus($status, $user, $ip)
    {
        $this->status = array($status, $user, $ip);
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function attach(\SplObserver $observer)
    {
        $this->storage->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->storage->detach($observer);
    }

    public function notify()
    {
        /** @var \SplObserver $obs*/
        foreach ($this->storage as $obs) {
            $obs->update($this);
        }
    }
}