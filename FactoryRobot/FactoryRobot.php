<?php

namespace FactoryRobot;

/**
 * Class FactoryRobot
 *
 * @package FactoryRobot
 */
class FactoryRobot
{
    /**
     * @var array
     */
    private array $registry;

    /**
     * @param RobotInterface $robot
     */
    public function addType(RobotInterface $robot)
    {
        $fqn                  = explode('\\', get_class($robot));
        $key                  = 'create' . array_pop($fqn);
        $this->registry[$key] = clone $robot;
    }

    /**
     * @param string $name
     * @param array  $parameters
     *
     * @return array
     * @throws FactoryException
     */
    public function __call(string $name, array $parameters): array
    {
        if (!isset($this->registry[$name])) {
            throw new FactoryException("Unregistered robot type.");
        }

        $result = array();
        $amount = (int) array_shift($parameters);
        for ($i = 0; $i < $amount; $i ++) {
            $result[] = clone $this->registry[$name];
        }

        return $result;
    }

}
