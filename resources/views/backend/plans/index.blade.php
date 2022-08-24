@extends('backend.layout.master')

@section('title', 'Pricing Packages')

@section('content')

    <div class="mt-3">
        {!! grid_view([
            'dataProvider' => $dataProvider,
            'useFilters' => true,
            'columnFields' => [
                'name',
                'price',
                [
                    'label' => 'Actions',
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
