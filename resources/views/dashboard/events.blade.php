@extends('layouts.admin')
@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="card mb-4">
                        <div class="card-header">
                          <h3>My Events</h3>
                        </div>
                        <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="card" style="width:350px">
                                    <img class="card-img-top" src="{{asset('Assets/images/event1.jpeg')}}" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                      <h4 class="card-title">Sound pot concert</h4>
                                      <p class="card-text">A small description about event and other details</p>
                                      <p class="time">24 March From <time>11:00</time> to <time>13:00</time></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="card" style="width:350px">
                                    <img class="card-img-top" src="{{asset('Assets/images/event2.png')}}" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                      <h4 class="card-title">Tamasha la sauti ya Jamii</h4>
                                      <p class="card-text">A small description about event and other details</p>
                                      <p class="time">26 March From <time>10:00</time> to <time>12:00</time></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="card" style="width:350px">
                                    <img class="card-img-top" src="{{asset('Assets/images/event3.jpg')}}" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                      <h4 class="card-title">Friday Poetry: Man-nani</h4>
                                      <p class="card-text">A small description about event and other details</p>
                                      <p class="time">4 April From <time>14:00</time> to <time>16:00</time></p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>


                </main>

    @endsection

