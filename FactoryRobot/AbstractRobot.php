<?php

namespace FactoryRobot;

/**
 * Class AbstractRobot
 *
 * @package FactoryRobot
 */
abstract class AbstractRobot implements RobotInterface
{
    /**
     * @var float
     */
    protected float $speed;

    /**
     * @var float
     */
    protected float $weight;

    /**
     * @var float
     */
    protected float $height;

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param array|RobotInterface $addendum
     */
    public function addRobot($addendum)
    {
        if (!is_array($addendum)) {
            $addendum = array($addendum);
        }

        foreach ($addendum as $robot) {
            $this->speed  = min($this->getSpeed(), $robot->getSpeed());
            $this->weight += $robot->getWeight();
            $this->height += $robot->getHeight();
        }
    }

}
