<?php

namespace SteadfastCollective\LaravelDailyco\Endpoints;

trait MeetingTokens
{
    public function createMeetingToken(array $data = [])
    {
        return $this->post('meeting-tokens', $data);
    }

    public function meetingToken(string $meetingToken, array $data = [])
    {
        return $this->get("meeting-tokens/{$meetingToken}", $data);
    }
}
