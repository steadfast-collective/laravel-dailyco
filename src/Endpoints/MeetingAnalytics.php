<?php

namespace SteadfastCollective\LaravelDailyco\Endpoints;

trait MeetingAnalytics
{
    public function meetingAnalytics(array $data = [])
    {
        return $this->get('meetings', $data);
    }

    public function meetingAnalyticsByMeetingId(mixed $meetingId, array $data = [])
    {
        return $this->get("meetings/{$meetingId}", $data);
    }

    public function meetingAnalyticsAndParticipants(mixed $meetingId, array $data = [])
    {
        return $this->get("meetings/{$meetingId}/participants", $data);
    }

    public function getRecordings(array $data = [])
    {
        return $this->get("recordings", $data);
    }

    public function meetingRecord(mixed $meetingId, array $data = [])
    {
        return $this->get("recordings/{$meetingId}", $data);
    }

}
