@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<<<<<<< HEAD
	<div class="col-md-10 col-md-offset-1">
	    <div class="panel panel-success">
		<div class="panel-heading">List of users to chat with</div>
		    @if(Auth::check())
		      <!-- Table -->
		      <table class="table">
			  @foreach($users as $user)
			    @if ($user['id'] == Auth::user()->id)
				@continue
			    @endif
			    <tr>
				<td class="username">
				    {{ $user['name'] }}
				</td>
				<td>
				    <a href="{{route('message.read', ['id'=>$user->id])}}" class="btn btn-success pull-right">Send Message</a>
				</td>
			    </tr>
			  @endforeach
		      </table>
		    @endif
		</div>
	    </div>
	</div>
    </div>
</div>
@endsection
=======
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Users</div>

                <div class="panel-body">
                @foreach($users as $user)
                    <table class="table">
                        <tr>
                            <td>
                                <img src="{{$user->avatar}}">
                                {{$user->name}}
                            </td>
                            <td>
                                <a href="{{route('message.read', ['id'=>$user->id])}}" class="btn btn-success pull-right">Send Message</a>
                            </td>
                        </tr>
                    </table>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
>>>>>>> 08ed55357d1124fbf16f3a0a8a1d11baa1561e93
