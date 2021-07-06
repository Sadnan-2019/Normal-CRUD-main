@extends('admin.master')

@section('body')



    <div class="col-lg-10 offset-1">
        <div class="card">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            <div class="card-body">
                <table class="table table-bordered">

                    <tr>

                        <th>Sl No.</th>
                        <th>Album ID</th>
                        <th>Album Name</th>
                        <th>Album Publish Date</th>
                        <th>Album Cover Picture</th>
                        <th>Publication Status</th>
                        <th>Action</th>



                    </tr>
                    @php($i=1)
                    @foreach($albums as $album)



                        <tr>

                            <td>{{$i++}}</td>
                            <td>{{$album->albumid}}</td>
                            <td>{{$album->name}}</td>
                            <td>{{$album->date}}</td>
                            <td><img src="{{asset($album->photo)}}"></td>
                            <td>{{$album->publicationtstatus == 1?'published':'unpublished'}}</td>



                            <td>

                                @if($album->publicationtstatus == 1)
                                    <a href="{{route('unpublish-album',['id'=>$album->id])}}" class="btn btn-info">
                                        <span><i class="fa fa-arrow-up"></i></span>
                                    </a>
                                @else
                                    <a href="{{route('publish-member',['id'=>$album->id])}}" class="btn btn-warning">
                                        <span><i class="fa fa-arrow-down"></i></span>
                                    </a>
                                @endif

                                <a href="{{route('edit-album',['id'=>$album->id])}}" class="btn btn-success">
                                    <span><i class="fa fa-edit"></i></span>
                                </a>
                                <a href="{{route('delete-album',['id'=>$album->id])}}" class="btn btn-danger">
                                    <span><i class="fa fa-trash"></i></span>
                                </a>


                            </td>

                        </tr>
                    @endforeach


                </table>
            </div>
        </div>

    </div>




@endsection