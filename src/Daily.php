<?php

namespace SteadfastCollective\LaravelDailyco;

use Illuminate\Support\Facades\Http;

class Daily
{
    use Endpoints\Logs,
        Endpoints\MeetingAnalytics,
        Endpoints\MeetingTokens,
        Endpoints\Presence,
        Endpoints\Recordings,
        Endpoints\Rooms,
        Endpoints\Hooks;

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

        if ($response->status() === 200) {
            return $response->json();
        }

        if ($response->status() === 404) {
            throw new Exceptions\NotFoundException("Daily API: 404 Not Found - {$endpoint}");
        }

        if ($response->status() === 400) {
            throw new Exceptions\BadRequestException("Daily API: Bad Request - {$endpoint}");
        }

        if ($response->status() === 401) {
            throw new Exceptions\BadRequestException("Daily API: Unauthorized - {$endpoint}");
        }

        if ($response->status() === 429) {
            throw new Exceptions\TooManyRequestsException("Daily API: Too Many Requests - {$endpoint}");
        }

        throw new Exceptions\ServerErrorException("Daily API: Server Error - {$endpoint}");
    }
}
