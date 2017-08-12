<div class="people-list" id="people-list">
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
    <div class="search" style="text-align: center">
        <a href="{{url('/home')}}" style="font-size:16px; text-decoration:none; color: white;"><i class="fa fa-user"></i> {{auth()->user()->name}}</a>
    </div>
    <ul class="list">
        @foreach($threads as $inbox)
            @if(!is_null($inbox->thread))
        <li class="clearfix" con_id={{$inbox->thread->conversation_id}}>
            <a href="{{route('message.read', ['id'=>$inbox->withUser->id])}}">
            <img src="{{$inbox->withUser->avatar}}" alt="avatar" />
            <div class="about">
                <div class="name">{{$inbox->withUser->name}}</div>
                <div class="status">
                    @if(auth()->user()->id == $inbox->thread->sender->id)
                        <span class="fa fa-reply"></span>
                    @endif
                    <span class="last-message">{{substr($inbox->thread->message, 0, 20)}}</span>
		    <span class="unread-counter"></span>
                </div>
            </div>
            </a>
        </li>
	    {!! talk_live(['conversation'=>['id'=>$inbox->thread->conversation_id, 'callback'=>['con_show']]]) !!}
            @endif
        @endforeach

    </ul>
</div>