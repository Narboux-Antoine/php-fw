<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:21
 */

namespace Metinet\Domain;


class ParticipantCollection
{

    private $participants= [];

    /**
     * EventRoom constructor.
     * @param array $participants
     */
    public function __construct(array $participants = [])
    {
        foreach ($participants as $participant) {
            if (!$participant instanceof Participant) {

                throw new \LogicException('Invalid item provided, must be an instance of Participant');
            }
        }
        $this->participants = $participants;
    }

    public function add(RoomCollection $participant)
    {
        $this->participants[] = $participant;
    }

    public function all(): array
    {
        return $this->participants;
    }

    public function merge(ParticipantCollection $participants): void
    {
        foreach ($participants->all() as $participant) {
            $this->participants[] = $participant;
        }
    }

    public function CountNumberOfParticipants():int{

        return count( $this->participants);
    }



}