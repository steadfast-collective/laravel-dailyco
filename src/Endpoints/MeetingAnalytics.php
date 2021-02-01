<?php

namespace SteadfastCollective\LaravelDailyco\Endpoints;

class MeetingAnalytics
{
    public function meetingAnalytics(array $data = [])
    {
        return $this->get('meetings', $data);
    }
}
