@extends('admin.master')



@section('body')



    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>


                        <th>Serial No</th>
                        <th>Album Name</th>
                        <th>Artist Name</th>
                        <th>Writer Name</th>
                        <th>Song Description</th>
                        <th>Song</th>
                        <th>Publication Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    @php($i=1)
                    @foreach($songs  as $song)
                    <tbody>
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$song->name}}</td>
                        <td>{{$song->artist}}</td>
                        <td>{{$song->writer}}</td>
                        <td>{{$song->description}}</td>
                        <td><audio  controls autoplay>  <source src="{{public_path('D:\xampp\htdocs\Normal-CRUD-main\Normal-CRUD-main\blog\public\SongFolder'.$song->song)}}" type="audio/mpeg"></audio> </td>
                        <td>{{$song->publicationtstatus ==1 ?'Published' :'Unpublished'}}</td>

                        <td>
                            @if($song->publicationtstatus == 1)
                            <a href="{{route('unpublished-song',['id'=>$song->id])}}" class="btn btn-info">

                                    <span><i class="fa fa-arrow-up"></i></span>

                                </a>
                            @else
                                <a href="{{route('published-song',['id'=>$song->id])}}" class="btn btn-warning">

                                    <span><i class="fa fa-arrow-down"></i></span>

                                </a>
                            @endif


                            <a href="{{route('edit-song',['id'=>$song->id])}}" class="btn btn-success">

                                <span><i class="fa fa-edit"></i></span>

                            </a>

                            <a href="{{route('delete-song',['id'=>$song->id])}}" class="btn btn-danger">

                                <span><i class="fa fa-trash"></i></span>

                            </a>



                        </td>
                    </tr>



                    </tbody>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection