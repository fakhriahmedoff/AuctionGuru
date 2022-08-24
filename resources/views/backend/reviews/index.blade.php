@extends('backend.layout.master')

@section('title', 'Reviews')

@section('content')

    <div class="mt-3">
        <div class="card-header">
            <a href="{{route('admin.reviews.create')}}" class="btn btn-primary">Add review</a>
        </div>
        {!! grid_view([
            'dataProvider' => $dataProvider,
            'useFilters' => true,
            'columnFields' => [
                "name",
                "text",
                "number",
                [
                    'label' => 'Actions',
                    'class' => Itstructure\GridView\Columns\ActionColumn::class,
                    'actionTypes' => [
                        'edit' => function ($data) {
                            return route('admin.reviews.edit', $data->id);
                        },
                         'delete' => function ($data) {
                            return route('admin.reviews.delete', $data->id);
                        }
                    ]
                ]
            ]
        ]) !!}
    </div>
@endsection
