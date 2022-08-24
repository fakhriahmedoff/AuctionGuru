@extends('backend.layout.master')

@section('title', 'Orders')

@section('content')

    <div class="mt-3">
        {!! grid_view([
            'dataProvider' => $dataProvider,
            'useFilters' => true,
            'columnFields' => [
                'name',
                'email',
                [
                    'label' => 'Text',
                    'filter' => false,
                    'value' => function($data){
                        return \Illuminate\Support\Str::limit($data->message,50,'...');
                    }
                    ],

                [
                    'label' => 'Actions',
                    'class' => Itstructure\GridView\Columns\ActionColumn::class,
                    'actionTypes' => [
                        'view' => function ($data) {
                            return route('admin.orders.show', $data->id);
                        },
                    ]
                ]
            ]
        ]) !!}
    </div>
@endsection
