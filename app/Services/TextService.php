<?php
declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\backend\TextSaveRequest;
use App\Models\Text;

class TextService
{
    public function storeText(TextSaveRequest $request, ?Text $text = null): void
    {
        $model = $text ?? new Text();
        $model->fill([
            'group' => $request->getGroup(),
            'value' => $request->getValue(),
            'key'   => $request->getKey(),
        ]);


        if (!$model->save()) {
            throw new DomainException('Order save failed');
        }
    }

    public function deleteText(Text $text): void
    {
        $text->delete();
    }
}
