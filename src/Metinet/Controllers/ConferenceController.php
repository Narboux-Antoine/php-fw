<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 15:41
 */

namespace Metinet\Controllers;

use Metinet\Domain\Address;
use Metinet\Domain\Conference;
use Metinet\Domain\DateOfBirth;
use Metinet\Domain\ParticipantCollection;
use Metinet\Domain\Room;
use Metinet\Domain\RoomCollection;
use Metinet\Domain\Student;


class ConferenceController
{

    public function CreateConferenceAction(){

        $rooms = new RoomCollection([
            new Room("salle1",20,new Address(20,"rue de la flag",01000,"Bourg-en-Bresse")),
                new Room("salle2",10,new Address(20,"rue Peter Fink",01000,"Bourg-en-Bresse"))
                ]);

        //Rajouter les participants
        $participants = new ParticipantCollection();

        $dob = DateOfBirth::fromString("1980-02-09 12:20:10");

        $conference = new Conference(
            "Le Grand Meeting",
            array("1, voir du code", "2, comprendre le code"),
            "Meeting sur du super code",
            20,
            "2018-01-19 11:00",
            2,
            $rooms->all()[0],
            null,
            new Student("Jon","snow",$dob,2),
            false,
            0,
            $participants
        );

    }

}