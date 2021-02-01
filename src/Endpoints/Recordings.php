<?php

namespace SteadfastCollective\LaravelDailyco\Endpoints;

trait Recordings
{
    public function recordings(array $data = [])
    {
        return $this->get('recordings', $data);
    }

    public function recording(string $recordingId, array $data = [])
    {
        return $this->get("recordings/{$recordingId}", $data);
    }

    public function deleteRecording(string $recordingId, array $data = [])
    {
        return $this->delete("recordings/{$recordingId}", $data);
    }

    public function recordingAccessLink(string $recordingId, array $data = [])
    {
        return $this->get("recordings/{$recordingId}/access-link", $data);
    }

    public function recordingDownload(string $shareToken, array $data = [])
    {
        return $this->get("recordings/{$shareToken}/download", $data);
    }

    public function createRecordingCompositesReceipe(string $recordingId, array $data = [])
    {
        return $this->post("recordings/{$recordingId}/composites", $data);
    }

    public function recordingComposites(string $recordingId, array $data = [])
    {
        return $this->get("recordings/{$recordingId}/composites", $data);
    }
}
