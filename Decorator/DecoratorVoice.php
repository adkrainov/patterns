<?php
/**
 */
namespace Decorator;

abstract class DecoratorVoice extends Voice
{
    protected $voice;

    public function __construct(Voice $voice)
    {
        $this->voice = $voice;
    }
}