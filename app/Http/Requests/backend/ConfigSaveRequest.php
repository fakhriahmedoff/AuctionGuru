<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property UploadedFile logo
 * @property UploadedFile logo_mobile
 * @property ?array social_links
 * @property string homepage_title
 * @property string homepage_meta_desc
 * @property ?string homepage_image_alt_tags
 * @property string order_title
 * @property string order_meta_desc
 * @property ?string email
 * @property ?string phone
 * @property ?string phone2
 */
class ConfigSaveRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    #[ArrayShape([
        'logo' => "string",
        'logo_mobile' => "string",
        'social_links' => "array",
        'email'    => 'string',
        'phone'        => 'string',
        'phone2'        => 'string',
        'homepage_title' => "string",
        'homepage_meta_desc' => "string",
        'homepage_image_alt_tags' => "string",
        'order_title' => "string",
        'order_meta_desc' => "string"
    ])]
    public function rules(): array
    {
        return [
            'logo'                      => 'nullable|image',
            'logo_mobile'               => 'nullable|image',
            'social_links'              => 'nullable',
            'email'                     => 'nullable|max:128',
            'phone'                     => 'nullable|max:128',
            'phone2'                    => 'nullable|max:128',
            'homepage_title'            => 'required|max:255',
            'homepage_meta_desc'        => 'required',
            'homepage_image_alt_tags'   => 'nullable',
            'order_title'               => 'required',
            'order_meta_desc'           => 'required',
        ];
    }

    public function getLogo(): ?UploadedFile
    {
        return $this->logo;
    }

    public function getLogoMobile(): ?UploadedFile
    {
        return $this->logo_mobile;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getPhoneTwo(): ?string
    {
        return $this->phone2;
    }

    public function getSocialLinks(): ?array
    {
        return $this->social_links;
    }

    public function getHomepageLinks(): string
    {
        return $this->homepage_title;
    }

    public function getHomepageMetaDesc(): string
    {
        return $this->homepage_meta_desc;
    }

    public function getHomepageImageAltTags(): ?string
    {
        return $this->homepage_image_alt_tags;
    }

    public function getOrderTitle(): string
    {
        return $this->order_title;
    }

    public function getOrderMetaDesc(): string
    {
        return $this->order_meta_desc;
    }


}
