@extends('layouts.admin')
@section('content')


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-xl-12">
<!---------------------------------------------------------INBOX PAGE--------------------------------------------------------------->
                        <div class="chatbox">
                            <form action="#">
                                <div class="card-header">
                                    <h1 class="heading">Chatbox</h1>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                                    <div>
                                    <div class="row p-4 no-gutters align-items-center">
                                    <div class="col-sm-12 col-md-6">
                                    <h3 class="font-light mb-0"><i class="ti-email mr-2"></i>Messages</h3>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                    <ul class="list-inline dl mb-0 float-left float-md-right">
                                    <li class="list-inline-item text-info mr-3">
                                    <a class="link" href="{{ route('blog.create') }}">
                                    <button class="btn btn-circle btn-success text-white" href="{{ route('blog.create') }}">
                                    <i class="fa fa-plus"></i>
                                    </button>
                                     <span class="ml-2 font-normal text-dark"> Compose</span>
                                    </a>
                                    </li>
                                    <li class="list-inline-item text-danger">
                                    <a class="link" href="#">
                                    <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                    <i class="fa fa-trash"></i>
                                    </button>
                                    <span class="ml-2 font-normal text-dark">Delete</span>
                                    </a>
                                    </li>
                                    </ul>
                                    </div>
                                    </div>

                                    <div class="table-responsive">
                                    <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                    <tbody>

                                    <tr>

                                    <td class="pl-3">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst1" />
                                    <label class="custom-control-label" for="cst1">&nbsp;</label>
                                    </div>
                                    </td>

                                    <td><i class="fa fa-star text-warning"></i></td>
                                    <td>
                                    <span class="mb-0 text-muted">Hritik Roshan</span>
                                    </td>

                                    <td>
                                    <a class="link" href="javascript: void(0)">

                                    <span class="text-dark">Lorem ipsum perspiciatis-</span>
                                    </a>
                                    </td>

                                    <td><i class="fa fa-paperclip text-muted"></i></td>

                                    <td class="text-muted">May 13</td>
                                    </tr>

                                    <tr>

                                    <td class="pl-3">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst2" />
                                    <label class="custom-control-label" for="cst2">&nbsp;</label>
                                    </div>
                                    </td>

                                    <td><i class="fa fa-star"></i></td>

                                    <td>
                                    <span class="mb-0 text-muted">Genelia Roshan</span>
                                    </td>

                                    <td>
                                    <a class="link" href="javascript: void(0)">

                                    <span class="text-dark">Inquiry about license for Admin </span>
                                    </a>
                                    </td>

                                    <td><i class="fa fa-paperclip text-muted"></i></td>

                                    <td class="text-muted">May 13</td>
                                    </tr>

                                    <tr>

                                    <td class="pl-3">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst3" />
                                    <label class="custom-control-label" for="cst3">&nbsp;</label>
                                    </div>
                                    </td>

                                    <td><i class="fa fa-star text-warning"></i></td>

                                    <td class="user-name max-texts">
                                    <span class="mb-0 text-muted font-light">Ritesh Deshmukh</span>
                                    </td>

                                    <td>
                                    <a class="link" href="javascript: void(0)">
                                    <span class="font-light text-dark">Bitbucket (commit Pushed) by Ritesh</span>
                                    </a>
                                    </td>

                                    <td><i class="fa fa-paperclip text-muted"></i></td>

                                    <td class="text-muted font-light">May 13</td>
                                    </tr>

                                    <tr class="">

                                    <td class="pl-3">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst4" />
                                    <label class="custom-control-label" for="cst4">&nbsp;</label>
                                    </div>
                                    </td>

                                    <td><i class="fa fa-star"></i></td>

                                    <td>
                                    <span class="mb-0 text-muted font-light">Akshay Kumar</span>
                                     </td>

                                    <td>
                                    <a class="link" href="javascript: void(0)">
                                    <span class="font-light text-dark">Perspiciatis unde omnis- iste Lorem ipsum</span>
                                    </a>
                                    </td>

                                    <td><i class="fa fa-paperclip text-muted"></i></td>

                                    <td class="text-muted font-light">May 9</td>
                                    </tr>

                                    <tr class="">

                                    <td class="pl-3">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst5" />
                                    <label class="custom-control-label" for="cst5">&nbsp;</label>
                                    </div>
                                    </td>

                                    <td><i class="fa fa-star"></i></td>

                                    <td>
                                    <span class="mb-0 text-muted font-light">John Abraham</span>
                                    </td>

                                    <td>
                                    <a class="link" href="javascript: void(0)">
                                    <span class="font-light text-dark">Lorem ipsum perspiciatis- unde omnis</span>
                                    </a>
                                    </td>

                                    <td><i class="fa fa-paperclip text-muted"></i></td>

                                    <td class="text-muted font-light">Mar 10</td>
                                    </tr>

                                    <tr class="">

                                    <td class="pl-3">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst6" />
                                    <label class="custom-control-label" for="cst6">&nbsp;</label>
                                    </div>
                                    </td>

                                    <td><i class="fa fa-star text-warning"></i></td>

                                    <td>
                                    <span class="mb-0 text-muted font-light">Akshay Kumar</span>
                                    </td>

                                    <td>
                                     <a class="link" href="javascript: void(0)">
                                    <span class="font-light text-dark">Lorem ipsum perspiciatis - unde</span>
                                    </a>
                                    </td>

                                    <td><i class="fa fa-paperclip text-muted"></i></td>

                                    <td class="text-muted font-light">Mar 09</td>
                                    </tr>
                                    </tbody>
                                    </table>

</main>

@endsection
