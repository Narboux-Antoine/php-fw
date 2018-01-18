<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:18
 */

namespace Metinet\Core\Authentification;


class CheckEmail
{
    private $checkedEmail;

    /**
     * CheckEmail constructor.
     * @param $checkedEmail
     */
    public function __construct($checkedEmail)
    {
        if($checkedEmail){
            $this->checkedEmail = $checkedEmail;
        }
        else {
            throw new \Exception('Email rentré incorrect');
        }
    }


}