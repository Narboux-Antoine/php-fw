<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 12:15
 */

namespace Metinet\Core\Authentification;


interface AccountRepository
{
public function getEmail():string;
public function GetPasswordWithEmail($email):string;

}