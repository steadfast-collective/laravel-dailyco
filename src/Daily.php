<?php

namespace Steadfastcollective\LaravelDailyco;

use Illuminate\Support\Facades\Http;

class Daily
{
    use Endpoints\Logs,
        Endpoints\MeetingAnalytics,
        Endpoints\MeetingTokens,
        Endpoints\Presence,
        Endpoints\Recordings,
        Endpoints\Rooms;

    protected function get(string $endpoint, array $data = [], array $headers = [])
    {
        return $this->request('GET', $endpoint, $data, $headers);
    }

    protected function post(string $endpoint, array $data = [], array $headers = [])
    {
        return $this->request('POST', $endpoint, $data, $headers);
    }

    protected function put(string $endpoint, array $data = [], array $headers = [])
    {
        return $this->request('POST', $endpoint, $data, $headers);
    }

    protected function patch(string $endpoint, array $data = [], array $headers = [])
    {
        return $this->request('PATCH', $endpoint, $data, $headers);
    }

    protected function delete(string $endpoint, array $data = [], array $headers = [])
    {
        return $this->request('DELETE', $endpoint, $data, $headers);
    }

    protected function request(string $method, string $endpoint, array $data = [], array $headers = [])
    {
        $endpoint = 'https://api.daily.co/v1/' . $endpoint;

        $headers = array_merge($headers, [
            'Authorization' => 'Bearer ' . config('daily.token'),
        ]);

        $response = Http::withHeaders($headers)->{$method}($endpoint, $data);

        if ($response->status() !== 200) {
            throw new \Exception("Request failed. Status code {$response->status()} on {$endpoint}.");
        }

        return $response->json();
    }
}
