<?php
declare(strict_types=1);

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property string name
 * @property string image
 * @property string text
 * @property string number
 */
class ReviewSaveRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    #[ArrayShape(["name" => "string", "image" => "string", "text" => "string", "number" => "string"])]
    public function rules(): array
    {
        return [
            "name"      => "required|max:128",
            "image"     => "nullable|image|max:512",
            "text"      => "required|max:1024",
            "number"    => "required|max:12",
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImage(): ?UploadedFile
    {
        return $this->image;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getNumber(): string
    {
        return $this->number;
    }
}
