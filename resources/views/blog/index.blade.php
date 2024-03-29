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
                                        @foreach ($posts as $post )
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
                                    <span class="mb-0 text-muted">{{ $post->user->name ?? 'None' }}</span>
                                    </td>

                                    <td>
                                    <a class="link" href="javascript: void(0)">

                                    <span class="text-dark">{{ substr(strip_tags($post->body), 0, 150) }}
                                        {{ strlen(strip_tags($post->body)) > 50 ? "......" : "" }}</span>
                                    </a>
                                    </td>

                                    <td><i class="fa fa-paperclip text-muted"></i></td>

                                    <td class="text-muted">{{$post->created_at->diffForHumans()}}</td>
                                    </tr>



                                    </tbody>
                                    @endforeach
                                    </table>

</main>

@endsection
