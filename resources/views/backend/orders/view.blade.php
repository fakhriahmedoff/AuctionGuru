@extends('backend.layout.master')

@section('title', 'Orders')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Order no - {{$order->id}}</h3>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5 class="mb-2">Buyer: {{$order->name}}</h5>
                                <h6>From: {{$order->email}}
                                    <span class="mailbox-read-time float-right">{{$order->created_at->format('d.m.Y')}}</span></h6>
                            </div>

                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                {{$order->message}}
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <div class="card-footer">
                            <p>Payment type: {{__('site.'.$order->payment_method)}}</p>
                            <p>Package: {{$order->plan->name}} | Price: {{$order->plan->price}}$</p>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Uploaded Pictures </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                @foreach(json_decode($order->uploaded_files) as $uploadedFile)
                                <div class="col-sm-2">
                                    <a href="{{asset($uploadedFile)}}" data-toggle="lightbox" data-title="??lav?? edilmi?? ????kil - {{$loop->iteration}}" data-gallery="gallery">
                                        <img src="{{asset($uploadedFile)}}" class="img-fluid mb-2" >
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('additional_scripts')
    <script>
        $(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({gutterPixels: 3});
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
@endsection
