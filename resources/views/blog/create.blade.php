@extends('layouts.admin')

@section('head')
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('content')


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-xl-12">
 <!-----------------------------------------------CHATBOX------------------------------------>
                    <div class="chatbox">
                        <form  method = "POST" action = "{{ route('blog.store') }}"   enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h1 class="heading">Chatbox</h1>
                                @include('includes.flash-message')
                            </div>
                            <div class="card-body">
                                <h3 class="font-light mb-0"><i class="ti-email mr-2"></i>Compose new message</h3><br>
                            <div class="form-group">
                                <label for="uname">To:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter receiver's username" name="uname" required>
                            </div>

                            @error('uname')
                                <div class = alert-danger>{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="Subject">Subject:</label>
                                <input type="subject" class="form-control" id="subject" placeholder="Enter subject" name="subject">
                            </div>

                            @error('subject')
                                <div class = alert-danger>{{ $message }}</div>
                            @enderror



                            <div class="form-group">
                                <label for="comment">Message:</label>
                                <textarea class="form-control" rows="5" id="comment" placeholder="Type your message here...." name="body"></textarea>
                            </div>

                            @if($errors->first('body'))
                                <div class = alert-danger>{{ $errors->first('body') }}</div>
                            @endif

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>

                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('scripts')
<script>CKEDITOR.replace( 'body' );</script>
@endsection
