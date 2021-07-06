@extends('admin.master');


@section('body')



    <div class="offset-1 col-md-10">
        <div class="header">

            <div class="card-header ">
                <strong>Add Song Details</strong>
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            </div>

            <div class="card-body card-block">
                <form action="{{route('new-song')}}" method="post" class="form-horizontal" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group row">
                        <label class="control-label col-md-3">Album Name</label>
                        <div class="col-md-9">
                            <select class="form-control"  name="albumID">
                                <option>--Select Album Name---</option>
                                @foreach($albums as $album)
                                <option value="{{$album->id}}">{{$album->name}}</option>

                                 @endforeach



                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Artist Name</label>
                        <input type="text" name="artist" class="form-control" id="exampleInputPassword1" placeholder="Enter Artist Name">
                        <span class="text-danger">{{$errors->has('artist')? $errors->first('artist')  :  ''}}</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Writer Name</label>
                        <input type="text" name="writer" class="form-control"  placeholder="Enter Writer Name">
                        <span class="text-danger">{{$errors->has('writer') ? $errors->first('writer') : ''}}</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Song Description</label>
                        <textarea  id="editor" name="description" class="form-control"  placeholder="Enter Song Description " rows="5"></textarea>
                        <span class="text-danger">{{$errors->has('description') ? $errors->first('description')  :  ''}}</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Upload Song</label>
                        <input type="file" name="song" class="form-control"  placeholder="Uplaod Song ">
                        <span class="text-danger">{{$errors->has('song') ? $errors->first('song') :  ''}}</span>
                    </div>
                    <div class="col col-md-3"><label class=" form-control-label">Publication Status</label></div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                                <input type="radio" id="inline-radio1" name="publicationtstatus" value="1" class="form-check-input">Published

                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2" name="publicationtstatus" value="0" class="form-check-input">Unpublished

                            </label>

                        </div>

                    </div>
                    <div class="col-12 col-md-9 offset-3"><span class=" text-danger">{{$errors->has('publicationtstatus') ? $errors->first('publicationtstatus') : ''}}</span></div>



                    <input type="submit" name="btn" class="btn btn-primary btn-sm" value="Add Song">
                </form>
            </div>
        </div>
    </div>

    @endsection