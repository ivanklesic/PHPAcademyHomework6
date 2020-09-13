<?php

namespace Task2;

use \Exception;

class Customer
{
    private $data = [];

    public function __call($name, $arguments){
        $methodPrefix = substr($name, 0, 3);
        $methodMainName = strtolower(substr($name, 3));
        $argument = $arguments[0] ?? null;

        switch ($methodPrefix)
        {
            case 'get':
                return $this->data[$methodMainName] ?? null;
            case 'set':
                $this->data[$methodMainName] = $argument;
                return $this;
            case 'has':
                return isset($this->data[$methodMainName]);
            case 'uns':
                if(isset($this->data[$methodMainName])){
                    unset($this->data[$methodMainName]);
                }
                return $this;
            default:
                throw new Exception('Wrong method prefix.');

        }
    }

}