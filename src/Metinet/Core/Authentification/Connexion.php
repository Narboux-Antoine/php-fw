<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:51
 */

namespace Metinet\Core\Authentification;


class Connexion
{
    private $account;

    /**
     * Connexion constructor.
     * @param $account
     */
    public function __construct($account)
    {
        $this->account = $account;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    public function HasPossibleConnexion():bool
    {
        $this->account->getEmail();
        $this->account->get();


    }
}