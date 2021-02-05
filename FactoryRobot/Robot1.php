<?php

namespace FactoryRobot;

/**
 * Class Robot1
 *
 * @package FactoryRobot
 */
class Robot1 extends AbstractRobot
{
    /**
     * Robot1 constructor.
     */
    public function __construct()
    {
        $this->speed  = 150.0;
        $this->weight = 0.2;
        $this->height = 0.15;
    }

}
