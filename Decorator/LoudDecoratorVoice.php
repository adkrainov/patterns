<?php
/**
 */

namespace Decorator;

class LoudDecoratorVoice extends DecoratorVoice
{
    public function listen()
    {
        $this->_increaseAmplitude();
        $this->voice->listen();
    }

    private function _increaseAmplitude()
    {
        echo 'The amplitude was increased ';
    }
}