<?php

function calculate($data)
{
    switch (true) {
    case is_bool($data):
        throw new \Exception('Булево значение');
        break;
    case is_float($data):
        throw new \Exception('Число с плавающей запятой');
        break;
    case is_int($data):
        throw new \Exception('Целое число');
        break;
    case is_string($data):
        throw new \Exception('Строка');
        break;
    case is_array($data):
        throw new \Exception('Массив');
        break;
    default: throw new \Exception('Объект');
    }
}

//$data = true;
//$data = 3.14;
//$data = 5;
//$data = 'string';
//$data = [1, 2, 3];

try
{
    calculate($data);
} 
catch (\Exception $e)
{
    echo ($e->getMessage());
}