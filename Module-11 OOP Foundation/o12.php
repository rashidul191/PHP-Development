<?php
interface BaseAnimal
{
    function isAlive();
    function canEat($param1, $param2);
    function breed();
}

class Animal implements BaseAnimal
{
    function isAlive()
    {
    }
    function canEat($param1, $param2)
    {
    }
    function breed()
    {
    }
}

interface BaseHuman extends BaseAnimal
{
    public function canTalk();
}


class HumanTest implements BaseHuman
{
    function isAlive()
    {
    }
    function canEat($param1, $param2)
    {
    }
    function breed()
    {
    }
    function canTalk()
    {
    }
}

$data = new HumanTest();

echo $data instanceof BaseHuman;
// echo $data instanceof BaseAnimal;
