<?php

namespace SteadfastCollective\LaravelDailyco\Endpoints;

trait Presence
{
    public function presence(array $data = [])
    {
        return $this->get('presence', $data);
    }
}
