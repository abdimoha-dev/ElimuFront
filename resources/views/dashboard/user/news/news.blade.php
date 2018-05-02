@extends('layouts.dash')
@section('content')
    @include('shared.alerts')
    <h3>
       Articles
    </h3>
    @foreach($articles as $article)
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <ul class="timeline">
                    <!-- timeline time label -->
                    <li class="time-label">
                  <span class="bg-red">
                    {{$article->created_at->toFormattedDateString()}}
                  </span>
                    </li>
                    <li class="time-label">
                  <span class="bg-green">
                    {{$article->tittle}}
                  </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-envelope bg-blue"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> {{$article->created_at->toTimeString()}}</span>

                            <class="timeline-header"><a href="#">
                                <h7>Rwitten by</h7> {{$article->users->first_name}} {{$article->users->second_name}}</a>

                            <div class="timeline-body">
                                {{$article->body}}
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-primary btn-xs read" data-toggle="modal">Read more</a>
                                <a class="btn btn-danger btn-xs">Delete</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->

                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-user bg-aqua"></i>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i>  27 min ago</span>

                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                            <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                            </div>
                            <div class="timeline-footer">
                                <a href="{{url('user/comment/mycomment/'.$article->id)}}" class="btn btn-warning btn-flat btn-xs" role="button">comment</a>
                            </div>
                        </div>

                    </li>
                    <!-- END timeline item -->

                    <!-- timeline time label -->
                    <li class="time-label">
                  <span class="bg-green">
                    3 Jan. 2014
                  </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-camera bg-purple"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                            <div class="timeline-body">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->

                    <!-- END timeline item -->
                    <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                    </li>
                </ul>
            </div>
            <!-- /.col -->
        </div>
    @endforeach

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        $("#div1").load("demo_test.txt");
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$article->tittle}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{$article->body}}
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

