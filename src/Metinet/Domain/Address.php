<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:07
 */

namespace Metinet\Domain;


class Address
{

    private $number;
    private $street;
    private $postalCode;
    private $city;

    /**
     * Address constructor.
     * @param $number
     * @param $street
     * @param $postalCode
     * @param $city
     */
    public function __construct(int $number, string $street, int $postalCode, string $city)
    {
        $this->number = $number;
        $this->street = $street;
        $this->postalCode = $postalCode;
        $this->city = $city;
    }




}