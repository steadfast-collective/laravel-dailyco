<?php

namespace SteadfastCollective\LaravelDailyco\Endpoints;

trait Logs
{
    public function logs(array $data = [])
    {
        return $this->get('logs/api', $data);
    }
}
