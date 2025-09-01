<?php

function calculate($data)
{
    switch (true) {
    case is_bool($data):
        throw new \Exeption("'{$data}' булево значение");
        break;
    case is_float($data):
        throw new \Exeption("'{$data}' число с плавающей запятой");
        break;
    case is_int($data):
        throw new \Exeption("'{$data}' целое число");
        break;
    case is_string($data):
        throw new \Exeption("'{$data}' строка");
        break;
    case is_array($data):
        throw new \Exeption("'{$data}' массив");
        break;
    case is_null($data):
        throw new \Exeption("'{$data}' объект");
        break;
    default: throw new \Exeption('Тип не установлен');
    }
}

//$data = true;
$data = 3.14;
//$data = 5;
//$data = 'string';
//$data = [1, 2, 3];
//$data = null;

try
{
    calculate($data);
} 
catch (\Exeption $e)
{
    echo ($e->getVessage());
}