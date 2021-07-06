@extends('admin.master');

@section('body')
    <div class="offset-1 col-md-10">
        <div class="header">

            <div class="card-header ">
                <strong>Add Album Details</strong>
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            </div>

            <div class="card-body card-block">
                <form action="{{route('new-album')}}" method="post" class="form-horizontal" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Album ID</label>
                        <input type="text" name="albumid"  class="form-control"  id="exampleInputEmail1" placeholder="Enter Album Id">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Album Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Album Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Album Publish Date</label>
                        <input type="date" name="date" class="form-control"  placeholder="Enter Publish Date ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Album Cover Picture</label>
                        <input type="file" name="photo" class="form-control"  placeholder="Chose Picture">
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


                    <input type="submit" name="btn" class="btn btn-primary btn-sm" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection

