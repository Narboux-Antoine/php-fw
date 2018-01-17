<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:30
 */

namespace Metinet\Domain;


class Event
{
private $name;
private $goals;
private $description;
private $number_participant;
private $number_participant_authorized;
private $date;
private $duration;
private $room_request;
private $room_given;
private $creator;
private $booked;
private $cost;

    /**
     * Event constructor.
     * @param $name
     * @param $goals
     * @param $description
     * @param $number_participant
     * @param $number_participant_authorized
     * @param $date
     * @param $duration
     * @param $room_request
     * @param $room_given
     * @param $creator
     * @param $booked
     * @param $cost
     */
    public function __construct($name, $goals, $description, $number_participant, $number_participant_authorized, DateOfEvent $date, $duration, $room_request, $room_given, $creator, bool $booked, $cost)
    {
        $this->name = $name;
        $this->goals = $goals;
        $this->description = $description;
        $this->number_participant = $number_participant;
        $this->number_participant_authorized = $number_participant_authorized;
        $this->date = $date;
        $this->duration = $duration;
        $this->room_request = $room_request;
        $this->room_given = $room_given;
        $this->creator = $creator;
        $this->booked = $booked;
        $this->cost = $cost;
    }


}