<?php

namespace App\Repositories;

use App\Models\Text;
use Illuminate\Support\Collection;

class TextRepository
{
    public function getTextsAll(): Collection
    {
        return Text::query()
            ->select('key', 'value')
            ->get()->pluck('value','key');
    }

}
