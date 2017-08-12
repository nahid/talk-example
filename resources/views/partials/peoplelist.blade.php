<div class="people-list" id="people-list">
<<<<<<< HEAD
    <script>
	var con_show = function(data){
	    console.log(data);
	    var con_id = data.conversation_id;
	    var msg = data.message;
	    var el = $("[con_id=" + con_id + "]");
	    if (el.length == 0)
		return; /* case of new conversation */
	    el.find(".last-message").text(msg);
	    el.find(".unread-counter").text(function(i, old){
		if (old == '')
		    return 1;
		return old++;
	    });
	    el.find(".unread-counter").show();
	};
    </script>
=======
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93
    <div class="search" style="text-align: center">
        <a href="{{url('/home')}}" style="font-size:16px; text-decoration:none; color: white;"><i class="fa fa-user"></i> {{auth()->user()->name}}</a>
    </div>
    <ul class="list">
        @foreach($threads as $inbox)
            @if(!is_null($inbox->thread))
<<<<<<< HEAD
        <li class="clearfix" con_id={{$inbox->thread->conversation_id}}>
=======
        <li class="clearfix">
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93
            <a href="{{route('message.read', ['id'=>$inbox->withUser->id])}}">
            <img src="{{$inbox->withUser->avatar}}" alt="avatar" />
            <div class="about">
                <div class="name">{{$inbox->withUser->name}}</div>
                <div class="status">
                    @if(auth()->user()->id == $inbox->thread->sender->id)
                        <span class="fa fa-reply"></span>
                    @endif
<<<<<<< HEAD
                    <span class="last-message">{{substr($inbox->thread->message, 0, 20)}}</span>
		    <span class="unread-counter"></span>
=======
                    <span>{{substr($inbox->thread->message, 0, 20)}}</span>
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93
                </div>
            </div>
            </a>
        </li>
<<<<<<< HEAD
	    {!! talk_live(['conversation'=>['id'=>$inbox->thread->conversation_id, 'callback'=>['con_show']]]) !!}
=======
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93
            @endif
        @endforeach

    </ul>
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93
