<?php
declare(strict_types=1);

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

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

    public function rules(): array
    {
        return [
            "name"      => "required|max:128",
            "image"     => "nullable|max:512",
            "text"      => "required|max:1024",
            "number"    => "required|max:12",
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImage(): ?string
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
