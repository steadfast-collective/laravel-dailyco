<?php

namespace Steadfastcollective\LaravelDailyco\Endpoints;

class Logs
{
    public function logs(array $data = [])
    {
        return $this->get('/logs', $data);
    }
}
