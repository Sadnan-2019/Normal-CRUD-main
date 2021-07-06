@extends('admin.master')
@section('body')


  <div class="col-lg-10 offset-1">
      <div class="card">
          <h3 class="text-center text-success">{{Session::get('message')}}</h3>
          <div class="card-body">
              <table class="table table-bordered">


                      {{--<a class="nav-link" data-widget="navbar-search" href="#" role="button">

                      </a>--}}
                     <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control typeahead" type="search" placeholder="Search" aria-label="Search">

                    </div>
                </form>
            </div>

                  <br>
<tr>

    <th>Sl No.</th>
    <th>Team Member ID</th>
    <th>Team Member Name</th>
    <th>Team Member Description</th>
    <th>Team Member Picture</th>
    <th>Publication Status</th>
    <th>Action</th>



</tr>
                  @php($i=1)
                  @foreach($teams as $team)



                  <tr>

                      <td>{{$i++}}</td>
                      <td>{{$team->memberid}}</td>
                      <td>{{$team->name}}</td>
                      <td>{{$team->description}}</td>
                      <td><img src="{{asset($team->photo)}}"></td>
                      <td>{{$team->publicationtstatus == 1?'published':'unpublished'}}</td>



                      <td>

                         @if($team->publicationtstatus == 1)
                          <a href="{{route('unpublished-team',['id'=>$team->id])}}" class="btn btn-info">
                              <span><i class="fa fa-arrow-up"></i></span>
                          </a>
                          @else
                          <a href="{{route('published-team',['id'=>$team->id])}}" class="btn btn-warning">
                              <span><i class="fa fa-arrow-down"></i></span>
                          </a>
                        @endif

                          <a href="{{route('edit-team',['id'=>$team->id])}}" class="btn btn-success">
                              <span><i class="fa fa-edit"></i></span>
                          </a>
                             <a href="{{route('delete-team',['id'=>$team->id])}}" class="btn btn-danger">
                              <span><i class="fa fa-trash"></i></span>
                          </a>


                      </td>

                  </tr>
                  @endforeach


              </table>
          </div>
      </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var path="{{route('autocomplete')}}";
    $('input.typeahead').typeahead({
        source: function (terms,process) {
            return $.get(path,{terms:terms},function (data) {
                return process(data);

            });

        }


    });


</script>
@endsection
