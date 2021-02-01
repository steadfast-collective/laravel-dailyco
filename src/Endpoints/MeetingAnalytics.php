<?php

namespace Steadfastcollective\LaravelDailyco\Endpoints;

class MeetingAnalytics
{
    public function meetings(array $data = [])
    {
        return $this->get('meetings', $data);
    }
}
