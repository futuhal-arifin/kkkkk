@extends('master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-7">
			<a href="#"><img data-src="{{asset('js/holder.js/100%x480')}}" alt="..."></a>
		</div>

		<div class="col-md-5">
			<h2>The Stark Family</h2>
			<h4>by <a href="">Andika Amri</a></h4>
			<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<hr>
			<div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-default">4 Jam</button>
				<button type="button" class="btn btn-default">24 Menit</button>
				<button type="button" class="btn btn-default">24 Detik</button>
			</div>
			<ul class="nav nav-pills">
				<li class="active"><a href="#">S</a></li>
				<li><a href="#">M</a></li>
				<li><a href="#">L</a></li>
				<li><a href="#">XL</a></li>
				<li><a href="#">XXL</a></li>
				<li><a href="#">XXXL</a></li>
			</ul>
			<ul class="nav nav-pills">
				<li class="active"><a href="#">Red</a></li>
				<li><a href="#">Green</a></li>
				<li><a href="#">Blue</a></li>
				<li><a href="#">Orange</a></li>
				<li><a href="#">Grey</a></li>
				<li><a href="#">Black</a></li>
			</ul>
		</div>
	</div>

	@endsection

