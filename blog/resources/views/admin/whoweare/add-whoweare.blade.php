@extends('admin.master')



@section('body')
    <div class="offset-1 col-md-10">
        <div class="header">

            <div class="card-header ">
                <strong>Add Who We Are Details</strong>
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            </div>

            <div class="card-body card-block">
                <form action="{{route('save-whoweare')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Add What we do?</label>
                        <textarea type="text" name="textone"  class="form-control"  id="exampleInputEmail1" placeholder="Enter What we do?"></textarea>
                        <span class="text-danger">{{$errors->has('textone')?$errors->first('textone'):''}}</span>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Add Why choose us?</label>
                        <textarea type="text" name="texttwo" class="form-control" id="exampleInputPassword1" placeholder="Enter Why choose us?"></textarea>
                        <span class="text-danger">{{$errors->has('texttwo')   ?   $errors->first('texttwo'):    '' }}</span>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Add Where we are?</label>
                        <textarea type="text" name="textthree" class="form-control"  placeholder="Enter Where we are? "></textarea>
                        <span class="text-danger">{{$errors->has('textthree') ? $errors->first('textthree'):''}}</span>
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
                        <span class="text-danger">{{$errors->has('publicationtstatus') ? $errors->first('publicationtstatus'):  ''}}</span>
                    </div>


                    <input type="submit" name="btn" class="btn btn-primary btn-sm" value="Submit">
                </form>
            </div>
        </div>
    </div>








@endsection