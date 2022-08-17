@extends('backend.layout.master')

@section('title', 'Paketler')

@section('content')

    <div class="mt-3">
        {!! grid_view([
            'dataProvider' => $dataProvider,
            'useFilters' => true,
            'columnFields' => [
                'name',
                'price',
                [
                    'label' => 'Əməliyyatlar',
                    'class' => Itstructure\GridView\Columns\ActionColumn::class,
                    'actionTypes' => [
                        'edit' => function ($data) {
                            return route('admin.plans.edit', $data->id);
                        }
                    ]
                ]
            ]
        ]) !!}
    </div>
@endsection
