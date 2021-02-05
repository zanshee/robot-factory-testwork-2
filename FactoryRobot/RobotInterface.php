<?php

namespace FactoryRobot;

/**
 * Class MergeRobot
 *
 * @package FactoryRobot
 */
interface RobotInterface
{
    /**
     * @return float
     */
    public function getSpeed(): float;

    /**
     * @return float
     */
    public function getWeight(): float;

    /**
     * @return float
     */
    public function getHeight(): float;

    /**
     * @param array|RobotInterface $addendum
     *
     * @return void
     */
    public function addRobot($addendum);
}