@extends('layouts.admin')
@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                      <h3>My Events</h3>
                                    </div>
                                <div class="card-columns">
                                    <div class="card" style="width:400px">
                                        <img class="card-img-top" src="{{asset('Assets/images/event1.jpg')}}" alt="Card image" style="width:100%">
                                        <div class="card-body">
                                          <h4 class="card-title">Event 1</h4>
                                          <p class="card-text">A small description about event and other details</p>
                                          <a href="#" class="btn btn-primary stretched-link">Learn more</a>
                                        </div>
                                    </div>
                                    <div class="card" style="width:400px">
                                        <img class="card-img-top" src="{{asset('Assets/images/event2.jpg')}}" alt="Card image" style="width:100%">
                                        <div class="card-body">
                                          <h4 class="card-title">Event 2</h4>
                                          <p class="card-text">A small description about event and other details</p>
                                          <a href="#" class="btn btn-primary stretched-link">Learn more</a>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>


                    </div>
                </main>

    @endsection

