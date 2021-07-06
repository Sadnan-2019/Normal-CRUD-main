@extends('admin.master');
@section('body')


    <div class="offset-1 col-md-10">
        <div class="header">

            <div class="card-header ">
                <strong>Edit Album Details</strong>
                <h3 class="text-center text-success"></h3>
            </div>

            <div class="card-body card-block">
                <form action="{{route('update-album')}}" method="post" class="form-horizontal" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group">
                        <label >Albumid</label>
                        <input type="text" name="albumid"  class="form-control"   placeholder="Enter Album Id" value="{{$album->albumid}}">
                        <input type="hidden" name="id"  class="form-control"   placeholder="Enter Albumid" value="{{$album->id}}">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Album Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Album Name" value="{{$album->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="date" name="date" class="form-control"  placeholder="Enter Date"value="{{$album->date}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Album Picture</label>
                        <input type="file" name="photo" class="form-control"  placeholder="Uploade Album Picture "value="{{$album->photo}}">
                        <br>
                        <img src="{{asset($album->photo)}}">
                    </div>
                    <div class="col col-md-3"><label class=" form-control-label">Publication Status</label></div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                                <input type="radio" id="inline-radio1" name="publicationtstatus" value= "1" {{$album->publicationtstatus == 1 ? 'checked': ''}} class="form-check-input">Published
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2" name="publicationtstatus" value='0' {{$album->publicationtstatus == 0 ? 'checked': ''}} class="form-check-input">Unpublished
                            </label>

                        </div>
                    </div>


                    <input type="submit" name="btn" class="btn btn-primary btn-sm" value="Submit">
                </form>
            </div>
        </div>
    </div>

@endsection