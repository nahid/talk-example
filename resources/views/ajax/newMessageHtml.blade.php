<li class="clearfix">
    <div class="message-data align-right">
        <span class="message-data-time" >{{$message->human_time}}</span> &nbsp; &nbsp;
        <span class="message-data-name" >{{$message->sender->name}}</span> <i class="fa fa-circle me"></i>

    </div>
    <div class="message other-message float-right">
        {{$message->message}}
    </div>
</li>
