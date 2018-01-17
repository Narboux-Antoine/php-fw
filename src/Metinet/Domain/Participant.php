<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:27
 */

namespace Metinet\Domain;


class Participant
{

    private $firstname;
    private $lastname;
    private $phone;
    private $email;
    private $IsStudent;

    /**
     * ParticipantCollection constructor.
     * @param $firstname
     * @param $lastname
     * @param $IsStudent
     */
    public function __construct(string $firstname, string $lastname, int $phone, string $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;

        if (!empty($phone)) {
            $this->phone = $phone;
}
        if (!empty($email)) {
            $this->email = $email;
}

        if(MethodCheckStudent())
        {
            $this->IsStudent = true;
        }

        $this->IsStudent = false;
    }

    public function CheckIsStudent():bool
    {
        return $this->IsStudent ;
    }

}