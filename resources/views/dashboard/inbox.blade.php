@extends('layouts.admin')
@section('content')

 <!-----------------------------------------------CHATBOX------------------------------------>
 <div class="chatbox">
    <form action="#">
        <h1 class="heading">Chatbox</h1>
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

        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>


@endsection
