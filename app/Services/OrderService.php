<?php

declare(strict_types=1);

namespace App\Services;

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
            'name'      => $request->getName(),
            'email'     => $request->getEmail(),
            'message'   => $request->getMessage(),
        ]);

        dd($request->uploaded_files);


//        $images = $this->storeImages($request->getUploadedFiles());

//        dd($images);
        if (!$model->save()) {
            throw new DomainException('Order save failed');
        }

        return $model;
    }

//    private function storeImages(array $images)
//    {
//        $filenames = [];
//        foreach ($images as $image){
//            $file= $image;
//            $filename= date('YmdHi').$file->getClientOriginalName();
//            $file->move(public_path('public/Image'), $filename);
//            $filenames[] = $filename;
//        }
//
//        return $filenames;
//    }
}

