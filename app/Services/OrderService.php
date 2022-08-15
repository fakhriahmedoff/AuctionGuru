<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Order;

class OrderService
{
    public function __construct(private Order $model)
    {
    }

    public function storeOrder()
    {
        $this->model->create([

        ]);
    }
}

