<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:53
 */

namespace Metinet\Domain;


class RoomCollection
{
    private $rooms= [];


    /**
     * EventRoom constructor.
     * @param array $rooms
     */
    public function __construct(array $rooms = [])
    {
        foreach ($rooms as $room) {
            if (!$room instanceof Room) {

                throw new \LogicException('Invalid item provided, must be an instance of Room');
            }
        }
        $this->rooms = $rooms;
    }

    public function add(RoomCollection $room)
    {
        $this->rooms[] = $room;
    }

    public function all(): array
    {
        return $this->rooms;
    }

    public function merge(RoomCollection $rooms): void
    {
        foreach ($rooms->all() as $room) {
            $this->rooms[] = $room;
        }
    }



}