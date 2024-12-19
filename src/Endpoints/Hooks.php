<?php

namespace SteadfastCollective\LaravelDailyco\Endpoints;

trait Hooks
{
    public function getHooks(array $data = [])
    {
        return $this->get('webhooks', $data);
    }
}
