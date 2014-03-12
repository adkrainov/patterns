<?php
/**
 */

namespace Decorator;

class HighTimbreDecoratorVoice extends DecoratorVoice
{
    public function listen()
    {
        $this->_increaseTimbreVolume();
        $this->voice->listen();
    }

    private function _increaseTimbreVolume()
    {
        echo 'The timbre volume was increased ';
    }
}