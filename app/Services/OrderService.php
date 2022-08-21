<?php

declare(strict_types=1);

namespace App\Services;

use App\Actions\UploadImage;
use App\Http\Requests\site\StoreOrderRequest;
use App\Models\Order;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;

class OrderService
{
    public function __construct()
    {
    }

    public function storeOrder(StoreOrderRequest $request, ?Order $order = null): ?Order
    {
        $model = $order ?? new Order();
        $model->fill([
            'name'              => $request->getName(),
            'email'             => $request->getEmail(),
            'message'           => $request->getMessage(),
            'plan_id'           => $request->getPlan(),
            'payment_method'    => $request->getPaymentMethod(),
        ]);


        if($request->getUploadedFiles())
        {
            $image = $this->storeImages($request->getUploadedFiles());

            $model->fill([
                'uploaded_files' => json_encode($image),
            ]);
        }

        if (!$model->save()) {
            throw new \DomainException('Order save failed');
        }

        return $model;
    }

    private function storeImages(array $images): array
    {
        $return = [];
        foreach ($images as $image){
            $return[] = UploadImage::uploadImage($image, 'sheets');
        }

        return $return;
    }
}

