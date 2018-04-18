@extends('layouts.dash')
@section('content')



    <div class="row">

        <!-- TABLE: LATEST MESSAGES -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Latest Messages</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>Message</th>
                            <th>From</th>
                            {{--<th>Sender Id</th>--}}
                            <th>Time</th>
                            <th>Status</th>
                            <th>Read More</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <td>{{$message->message}}</td>
                                <td>{{$message->sendMessage->first_name}} {{$message->sendMessage->second_name}}</td>
                                <td>{{$message->id}}</td>
                                <td>{{$message->created_at}}</td>
                                <td>
                                    <button type="button" data-toggle="modal" class="read" data-target="#" value="{{$message->message}}">
                                        Read Message
                                    </button>
                                </td>
                                <td></td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>

        </div>
        <!-- /.col -->


    </div>
    <td><span class="label label-success">Shipped</span></td>
    <td><span class="label label-warning">Pending</span></td>



    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        $("#div1").load("demo_test.txt");
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer-scripts')
    <script>

        $(function () {


            $('.read').click(function () {
                $('.modal-body').html(this.value);
                $('#myModal').modal();
            })

        })

    </script>

@endpush