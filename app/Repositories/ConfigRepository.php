<?php

namespace App\Repositories;

use App\Models\Config;

class ConfigRepository
{
    public static function getConfig(): ?Config
    {
        return Config::first();
    }
}
