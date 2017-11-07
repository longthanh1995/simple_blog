@if(Session::has('message')) 
	<div class="alert {!! Session::get('flash_level') !!}">
		<span class="closebtn">&times;</span>  
		<strong>{!! strtoupper(Session::get('flash_level')) !!}: </strong>
		{!! Session::get('message') !!}
	</div>
@endif
