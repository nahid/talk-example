@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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