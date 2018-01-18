<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:21
 */

namespace Metinet\Core\Authentification;


class SaltPassword
{
private $password;
private $saltPassword;

    /**
     * SaltPassword constructor.
     * @param $password
     * @param $saltPassword
     */
    public function __construct($password)
    {
        $this->password = $password;

    }

    /**
     * @return mixed
     */
    public function getPassword():string
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getSaltPassword():string
    {
        return $this->saltPassword = $this->getPassword() . "1234";
    }

}