<?php
declare(strict_types=1);

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property string $group
 * @property string $value
 * @property string $key
 * @property string $type
 */
class TextSaveRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    #[ArrayShape(['group' => "string", 'value' => "string", 'key' => "string", 'type' => 'string'])]
    public function rules(): array
    {
        return [
            'group' => 'required|string',
            'value' => 'required|string',
            'key'   => 'required|string',
            'type' => 'required'
        ];
    }

    public function getGroup(): string
    {
        return $this->group;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
