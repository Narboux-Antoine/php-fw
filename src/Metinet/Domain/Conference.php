<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:30
 */

namespace Metinet\Domain;


class Conference
{
    private $name;
    private $goals;
    private $description;
    private $participants;
    private $numberParticipantAuthorized;
    private $date;
    private $duration;
    private $room_request;
    private $room_given;
    private $creator;
    private $IsAllowedToExternPeople;
    private $cost;

    /**
     * Event constructor.
     * @param $name
     * @param $goals
     * @param $description
     * @param $numberParticipantAuthorized
     * @param $date
     * @param $duration
     * @param $room_request
     * @param $room_given
     * @param $creator
     * @param $IsAllowedToExternPeople
     * @param $cost
     */
    public function __construct(string $name,
                                array $goals,
                                string $description,
                                int $numberParticipantAuthorized,
                                DateOfConference $date,
                                $duration,
                                Room $room_request,
                                Room $room_given,
                                Student $creator,
                                bool $IsAllowedToExternPeople,
                                int $cost,
                                ParticipantCollection $participants)
    {
        $this->name = $name;
        $this->goals = $goals;
        $this->description = $description;
        $this->participants = $participants;
        $this->numberParticipantAuthorized = $numberParticipantAuthorized;
        $this->date = $date;
        $this->duration = $duration;
        $this->room_request = $room_request;
        $this->room_given = $room_given;
        $this->creator = $creator;
        $this->IsAllowedToExternPeople = $IsAllowedToExternPeople;
        $this->cost = $cost;
    }

    public function getDateTimeEnd():\DateTime
{
    return $this->date->modify( '+' . $this->duration . " hour");

    }

}