@extends('backend.layout.master')

@section('title', 'Tekstlər')

@section('content')

    <div class="mt-3">
        {!! grid_view([
            'dataProvider' => $dataProvider,
            'useFilters' => true,
            'columnFields' => [
                [
                    'attribute' => 'group',
                    'filter' => [
                        'class' => Itstructure\GridView\Filters\DropdownFilter::class,
                        'data' => ['site' => 'site','admin' => 'admin']
                    ]
                ],
                'key',
                'value',
                [
                    'label' => 'Əməliyyatlar',
                    'class' => Itstructure\GridView\Columns\ActionColumn::class,
                    'actionTypes' => [
                        'edit' => function ($data) {
                            return route('admin.texts.edit', $data->id);
                        }
                    ]
                ]
            ]
        ]) !!}
    </div>
@endsection