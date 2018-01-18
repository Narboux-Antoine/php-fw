<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:12
 */

namespace Metinet\Core\Authentification;


class Account
{
    private $email;
    private $password;

    /**
     * Account constructor.
     * @param $email
     * @param $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail():string
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword():string
    {
        return $this->password;
    }

    public function CheckEmail():bool
    {
        return new CheckEmail($this->getEmail());
    }

    public function CheckPassword():bool
    {
        return $this->CheckPassword($this->getPassword());
    }

}