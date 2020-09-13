<?php

namespace Task1;


class Monitor
{
    private $resolution;
    private $refreshRateHZ;

    public function __construct($resolution = null, $refreshRateHZ = null)
    {
        $this->resolution = $resolution;
        $this->refreshRateHZ = $refreshRateHZ;
    }

    public function __get($name)
    {
        return $this->$name ?? null;
    }

    public function __set($name, $value)
    {
       if(property_exists($this, $name))
       {
           $this->$name = $value;
       }
       return $this;
    }
}