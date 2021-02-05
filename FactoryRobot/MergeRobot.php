<?php

namespace FactoryRobot;

/**
 * Class MergeRobot
 *
 * @package FactoryRobot
 */
class MergeRobot extends AbstractRobot
{
    /**
     * MergeRobot constructor.
     */
    public function __construct()
    {
        $this->speed  = 50.0;
        $this->weight = 20.0;
        $this->height = 1.0;
    }

}
