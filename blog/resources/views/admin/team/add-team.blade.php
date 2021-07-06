@extends('admin.master');

@section('body')
    <div class="offset-1 col-md-10">
<div class="header">

    <div class="card-header ">
<strong>Add Team Member Details</strong>
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
     </div>

    <div class="card-body card-block">
        <form action="{{route('new-member')}}" method="post" class="form-horizontal" enctype='multipart/form-data'>
@csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Team Member ID</label>
                <input type="text" name="memberid"  class="form-control"  id="exampleInputEmail1" placeholder="Enter Member Id">
                <span class="text-danger">{{$errors->has('memberid') ?  $errors->first('memberid') :''}}</span>

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Team Member Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Member Name">
                <span class="text-danger">{{$errors->has('name') ?  $errors->first('name') :''}}</span>

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Team Member Description</label>
                <input type="text" name="description" class="form-control"  placeholder="Enter member Description">
                <span class="text-danger">{{$errors->has('description') ? $errors->first('description')  :  '' }}</span>
            </div>
      <div class="form-group">
                <label for="exampleInputPassword1">Team Member Picture</label>
                <input type="file" name="photo" class="form-control"  placeholder="Uploade Member Picture ">
          <span class="text-danger">{{$errors->has('photo') ? $errors->first('photo')  :  '' }}</span>



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
                <span class="text-danger">{{$errors->has('publicationtstatus')? $errors->first('publicationtstatus'):''}}</span>
            </div>


            <input type="submit" name="btn" class="btn btn-primary btn-sm" value="Submit">
        </form>
    </div>
</div>
    </div>
@endsection
