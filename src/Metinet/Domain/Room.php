<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 12:08
 */

namespace Metinet\Domain;


class Room
{
    private $name;
    private $capacity;
    private $address;

    /**
     * Room constructor.
     * @param $name
     * @param $capacity
     * @param $address
     */
    public function __construct(string $name, int $capacity, Address $address)
    {
        $this->name = $name;
        $this->capacity = $capacity;
        $this->address = $address;
    }


}