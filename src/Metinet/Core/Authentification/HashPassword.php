<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:31
 */

namespace Metinet\Core\Authentification;


class HashPassword
{
    private $saltPassword;
    private $HashPassword;

    /**
     * HashPassword constructor.
     * @param $saltPassword
     */
    public function __construct(SaltPassword $saltPassword)
    {
        $this->saltPassword = $saltPassword;
    }

    /**
     * @return SaltPassword
     */
    public function getSaltPassword(): SaltPassword
    {
        return $this->saltPassword;
    }

    /**
     * @return mixed
     */
    public function getHashPassword():string
    {
        return $this->HashPassword = password_hash($this->getSaltPassword(), PASSWORD_DEFAULT);
    }


}