<?php

namespace SteadfastCollective\LaravelDailyco\Endpoints;

trait MeetingAnalytics
{
    public function meetingAnalytics(array $data = [])
    {
        return $this->get('meetings', $data);
    }
}
