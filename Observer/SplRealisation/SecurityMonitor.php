<?php
/**
 */

namespace Observer\SplRealisation;

class SecurityMonitor implements \SplObserver
{
    public function update(\SplSubject $observable)
    {
        $status = $observable->getStatus();
        if ($status[0] == Login::LOGIN_WRONG_PASS) {
            print __CLASS__ . ": отправка почты системному администратору | IP"
                .$this->getRealIp();
        }
    }

    function getRealIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip=$_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }
}