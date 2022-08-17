@extends('backend.layout.master')

@section('title', 'Şərhlər')

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
                            return route('admin.reviews.edit', $data->id);
                        },
                         'remove' => function ($data) {
                            return route('admin.reviews.destroy', $data->id);
                        }
                    ]
                ]
            ]
        ]) !!}
    </div>
@endsection