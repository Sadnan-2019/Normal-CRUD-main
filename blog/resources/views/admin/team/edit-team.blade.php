@extends('admin.master');

@section('body')
    <div class="offset-1 col-md-10">
        <div class="header">

            <div class="card-header ">
                <strong>Edit Team Member Details</strong>
                <h3 class="text-center text-success"></h3>
            </div>

            <div class="card-body card-block">
                <form action="{{route('update-member')}}" method="post" class="form-horizontal" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group">
                        <label >Team Member ID</label>
                        <input type="text" name="memberid"  class="form-control"   placeholder="Enter Member Id" value="{{$team->memberid}}">
                        <input type="hidden" name="id"  class="form-control"   placeholder="Enter Member Id" value="{{$team->id}}">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Team Member Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Member Name" value="{{$team->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Team Member Description</label>
                        <input type="text" name="description" class="form-control"  placeholder="Enter member Description"value="{{$team->description}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Team Member Picture</label>
                        <input type="file" name="photo" class="form-control"  placeholder="Uploade Member Picture "value="{{$team->photo}}">
                        <br>
                        <img src="{{asset($team->photo)}}">
                    </div>
                    <div class="col col-md-3"><label class=" form-control-label">Publication Status</label></div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                                <input type="radio" id="inline-radio1" name="publicationtstatus" value= "1" {{$team->publicationtstatus == 1 ? 'checked': ''}} class="form-check-input">Published
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2" name="publicationtstatus" value='0' {{$team->publicationtstatus == 0 ? 'checked': ''}} class="form-check-input">Unpublished
                            </label>

                        </div>
                    </div>


                    <input type="submit" name="btn" class="btn btn-primary btn-sm" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection
