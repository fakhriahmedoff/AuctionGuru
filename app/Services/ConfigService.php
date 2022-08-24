<?php

declare(strict_types=1);

namespace App\Services;

use App\Actions\UploadImage;
use App\Http\Requests\backend\ConfigSaveRequest;
use App\Http\Requests\site\StoreOrderRequest;
use App\Models\Config;
use App\Models\Order;

class ConfigService
{

    public function storeConfig(ConfigSaveRequest $request, ?Config $config = null): ?Config
    {
        $model = $config ?? new Config();

        $model->fill([
            "social_links"             => json_encode($request->getSocialLinks()),
            "phone"                    => $request->getPhone(),
            "phone2"                   => $request->getPhoneTwo(),
            "email"                    => $request->getEmail(),
            "homepage_title"           => $request->getHomepageLinks(),
            "homepage_meta_desc"       => $request->getHomepageMetaDesc(),
            "homepage_image_alt_tags"  => $request->getHomepageImageAltTags(),
            "order_title"              => $request->getOrderTitle(),
            "order_meta_desc"          => $request->getOrderMetaDesc(),
        ]);



        if($request->getLogo())
        {
            $logo = UploadImage::uploadImage($request->file('logo'),'configs');

            $model->fill([
                "logo" => $logo,
            ]);
        }

        if($request->getLogoMobile())
        {
            $logoMobile = UploadImage::uploadImage($request->file('logo_mobile'),'configs');

            $model->fill([
                "logo_mobile" => $logoMobile,
            ]);
        }

        if (!$model->save()) {
            throw new \DomainException('Config save failed');
        }

        return $model;
    }


}

