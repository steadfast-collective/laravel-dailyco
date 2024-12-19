<?php

namespace SteadfastCollective\LaravelDailyco\Endpoints;

trait Rooms
{
    public function rooms(array $data = [])
    {
        return $this->get('rooms', $data);
    }

    public function createRoom(array $data = [])
    {
        return $this->post('rooms', $data);
    }

    public function room(string $roomName, array $data = [])
    {
        return $this->get("rooms/{$roomName}", $data);
    }

    public function updateRoom(string $roomName, array $data = [])
    {
        return $this->post("rooms/{$roomName}", $data);
    }

    public function deleteRoom(string $roomName, array $data = [])
    {
        return $this->delete("rooms/{$roomName}", $data);
    }

    public function roomSessionData(mixed $roomName, array $data = [])
    {
        return $this->get("rooms/{$roomName}/get-session-data", $data);
    }
}
