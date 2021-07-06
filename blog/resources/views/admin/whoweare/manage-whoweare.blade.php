@extends('admin.master')


@section('body')

    <div class="col-lg-10 offset-1">
        <div class="card">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Serial No</th>
                        <th scope="col">TextOne</th>
                        <th scope="col">Texttwo</th>
                        <th scope="col">Texthree</th>
                        <th scope="col">Publication Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>


                    @php($i=1)
                    @foreach($Whoweares as $Whoweare)
                    <tbody>
                    <tr>

                        <td>{{$i++}}</td>
                        <td>{{$Whoweare->textone}}</td>
                        <td>{{$Whoweare->texttwo}}</td>
                        <td>{{$Whoweare->textthree}}</td>
                        <td>{{$Whoweare->publicationtstatus == 1 ?'pulished':'unpublished'}}</td>



                        <td>

                         @if($Whoweare->publicationtstatus == 1)



                            <a href="{{route('unpublish-whoweare',['id'=>$Whoweare->id])}}" class="btn btn-info">

                                <span><i class="fa fa-arrow-up"></i></span>
                            </a>

                            @else
                            <a href="{{route('publish-whoweare',['id'=>$Whoweare->id])}}" class="btn btn-warning">

                                <span><i class="fa fa-arrow-down"></i></span>
                            </a>
                            @endif


                            <a href="" class="btn btn-success">

                                <span><i class="fa fa-edit"></i></span>
                            </a>


                            <a href="{{route('delete-whoweare',['id'=>$Whoweare->id])}}" class="btn btn-danger">

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