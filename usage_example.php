<?php

use FactoryRobot\FactoryRobot;
use FactoryRobot\MergeRobot;
use FactoryRobot\Robot1;
use FactoryRobot\Robot2;

require 'autoload.php';

$factory = new FactoryRobot();
// Robot1, Robot2 типи роботів які може створювати фабрика
$factory->addType(new Robot1());
$factory->addType(new Robot2());
/**
 * Результатом роботи метода createRobot1 буде масив з 5 об’єктів класу Robot1
 * Результатом роботи метода createRobot2 буде масив з 2 об’єктів класу Robot2
 **/
var_dump($factory->createRobot1(5));
var_dump($factory->createRobot2(2));

$mergeRobot = new MergeRobot();
$mergeRobot ->addRobot(new Robot2());
$mergeRobot ->addRobot($factory->createRobot2(2));
$factory->addType($mergeRobot);
$newMergeRobots = $factory->createMergeRobot(1);
$res            = reset($newMergeRobots);

//Результатом роботи методу буде мінімальна швидкість з усіх об’єднаних роботів
echo $res->getSpeed() . PHP_EOL;
// Результатом роботи методу буде сума всіх ваг об’єднаних роботів
echo $res->getWeight() . PHP_EOL;