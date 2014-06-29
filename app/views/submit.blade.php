@extends('master')

@section('content')

<div class="jumbotron">
	<div class="container">
		<a href="#"><img data-src="{{asset('js/holder.js/100%x300')}}" alt="..."></a>
	</div>
</div>



<div class="container">
	<h1 class="text-center">Submit Your Kreation!</h1>
	<br><br>
<div class="row">
	<div class="col-sm-6 col-md-6 product">
		<a href="#"><img data-src="{{asset('js/holder.js/100%x300')}}" alt="..."></a>
	</div>
	<div class="col-sm-6 col-md-6 product">
		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
  		<a href="upload"><button type="button" class="btn btn-default btn-md pull-left">
  			<span class="glyphicon glyphicon-send"></span> Submit Design
		</button></a>
		<button type="button" class="btn btn-default btn-md pull-left">
  			<span class="glyphicon glyphicon-save"></span> Download Submission Kit
		</button>		
	</div>
</div>
</div>
@endsection