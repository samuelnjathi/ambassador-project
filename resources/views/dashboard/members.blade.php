@extends('layouts.admin')
@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="card mb-4">
                        <div class="card-header">
                          <h3>Members</h3>
                        </div>
                    <div class="row gx-5">
                        <div class="col-md-6 col-xl-4 mb-5">
                            <div class="card card-team">
                                <div class="card-body">
                                  <img
                                    class="card-team-img mb-3"
                                    src="{{asset('Assets/images/event3.jpg')}}"
                                    alt="..."
                                  />
                                  <div class="card-team-name">Valerie Luna</div>
                                  <div class="card-team-position mb-3">
                                    Managing Partner
                                  </div>
                                  <p class="small mb-0">
                                    Graduate Year: 2020
                                    Job Status: Employee Kenya Power
                                  </p>
                                </div>
                                <div class="card-footer text-center">
                                  <a
                                    class="btn btn-icon btn-transparent-dark mx-1"
                                    href="#!"
                                    ><i class="fab fa-facebook-f"></i
                                  ></a>
                                  <a
                                    class="btn btn-icon btn-transparent-dark mx-1"
                                    href="#!"
                                    ><i class="fab fa-twitter"></i
                                  ></a>
                                  <a
                                    class="btn btn-icon btn-transparent-dark mx-1"
                                    href="#!"
                                    ><i class="fab fa-linkedin-in"></i
                                  ></a>
                                  <a
                                    class="btn btn-icon btn-transparent-dark mx-1"
                                    href="#!"
                                    ><i class="fab fa-github"></i
                                  ></a>
                                </div>
                            </div>



                        </div>
                    </div>



                </main>

@endsection
