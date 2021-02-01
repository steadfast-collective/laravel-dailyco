<?php

namespace Steadfastcollective\LaravelDailyco\Endpoints;

class Presence
{
    public function presence(array $data = [])
    {
        return $this->get('presence', $data);
    }
}
