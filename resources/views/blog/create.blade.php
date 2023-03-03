@extends('layouts.admin')
@section('content')


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-xl-12">
 <!-----------------------------------------------CHATBOX------------------------------------>
                    <div class="chatbox">
                        <form action="#">
                            <div class="card-header">
                                <h1 class="heading">Chatbox</h1>
                            </div>
                            <div class="card-body">
                                <h3 class="font-light mb-0"><i class="ti-email mr-2"></i>Compose new message</h3><br>
                            <div class="form-group">
                                <label for="receiver">To:</label>
                                <input type="receiver" class="form-control" id="subject" placeholder="send to" name="receiver">
                            </div>
                            <div class="form-group">
                                <label for="Subject">Subject:</label>
                                <input type="subject" class="form-control" id="subject" placeholder="Enter subject" name="subject">
                            </div>
                            <div class="form-group">
                                <label for="comment">Message:</label>
                                <textarea class="form-control" rows="5" id="comment" placeholder="Type your message here...." name="text"></textarea>
                            </div>
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
