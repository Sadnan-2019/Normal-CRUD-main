@extends('front-end.master')

{{--@section('title')
    TEAM
    @endsection--}}
@section('body')




    <div class="about" id="team">
        <div class="container">
            <!-- default heading -->
            <div class="default-heading">
                <!-- heading -->
                <h2>Who We Are?</h2>
            </div>
            <!-- about what we are like content -->
            <div class="about-what-we">
                <div class="row">

@foreach($TeamDescriptions as $TeamDescription)


                    <div class="col-md-4 col-sm-4">
                        <div class="what-we-item ">
                            <!-- heading with icon -->
                            <h3><i class="fa fa-heartbeat"></i> What we do?</h3>
                            <!-- paragraph -->
                            <p>{{$TeamDescription->textone}}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="what-we-item ">
                            <!-- heading with icon -->
                            <h3><i class="fa fa-hand-o-up"></i> Why choose us?</h3>
                            <!-- paragraph -->
                            <p>{{$TeamDescription->textone}} </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="what-we-item ">
                            <!-- heading with icon -->
                            <h3><i class="fa fa-map-marker"></i> Where we are?</h3>
                            <!-- paragraph -->
                            <p> {{$TeamDescription->textone}}</p>
                        </div>
                    </div>

    @endforeach
                </div>
            </div>
        </div>
        <!-- our team -->
        <div class="team">
            <div class="container">
                <!-- Team Member's Details -->
                <div class="team-content">





                    <div class="row">

                        @foreach($TeamMember as $Team)
                            <div class="col-md-4 col-sm-6">

                                <!-- Team Member -->

                                    <div class="team-member  delay-two">
                                        <!-- Image Hover Block -->
                                        <div class="member-img">

                                            <!-- Image  -->

                                            <img class="img-responsive" src="{{asset($Team->photo)}}" alt="" />
                                            <!-- Hover block -->
                                            <div class="social text-center">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </div>
                                        </div>
                                        <!-- Member Details -->
                                        <h3>{{$Team->name}}</h3>
                                        <span class="designation">{{$Team->description}}</span>

                                    </div>
                            </div>



                        @endforeach


                        </div>










                </div>


            </div>
        </div>
    </div>






    @endsection
