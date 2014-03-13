<?php
/**
 */

namespace Observer\CustomRealisation;

class Login implements Observable
{
    const  LOGIN_USER_UNKNOWN = 1;
    const  LOGIN_WRONG_PASS   = 2;
    const  LOGIN_ACCESS       = 3;

    private $observers = array();
    private $status = array();

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



    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        $newObservers = array();

        foreach ($this->observers as $obs) {
            if ($obs !== $observer) {
                $newObservers[] = $obs;
            }
        }
        $this->observers = $newObservers;
    }

    public function notify()
    {
        /** @var Observer $obs*/
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }
}