# robot-factory-testwork-2

#### Задание: обеспечить работу скрипта

```
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
$factory->addType($mergeRobot );
$res = reset($factory->createMergeRobot(1));

//Результатом роботи методу буде мінімальна швидкість з усіх об’єднаних роботів
echo $res->getSpeed();
// Результатом роботи методу буде сума всіх ваг об’єднаних роботів
echo $res->getWeight();
```

#### Описание:

Є завод який створює роботів, кожен тип роботів має вагу, швидкість, висоту. Декілька роботів можуть об’єднуватися в один робот. Результуюча швидкість робота буде дорівнювати мінімальній з усіх об’єднаних роботів, вага і висота будуть рівні сумі всіх ваг і висот кожного з роботів відповідно.

Потрібно спроектувати класи так, щоб можна було просто додавати до заводу інший тип роботів та створювати будь-яку кількість цих роботів.
