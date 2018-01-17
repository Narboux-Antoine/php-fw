<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 12:22
 */

namespace Metinet\Domain;


class DateOfConference
{
    private $date;

    /**
     * DateOfEvent constructor.
     * @param $date
     */
    public function __construct(\DateTime $date)
    {

        if ($date < new \DateTimeImmutable('now')) {

            throw InvalidDateOfConference::mustBeInTheFuture();
        }

        $this->date = $date;
    }

}