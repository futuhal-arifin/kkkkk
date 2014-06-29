@extends('master')

@section('content')

<div class="container">

	<div class="row">
		<div class=col-md-2>
			<div class="thumbnail">
				<a href="#"><img data-src="{{asset('js/holder.js/100%x256')}}" alt="..."></a>
				<div class="caption">
					<h4><strong> <a href=""> Andika Amri </a> </strong></h4>
					<!-- <div class="price">IDR 120.000</div> -->	
					<a href="rekening"><div class="well well-sm">IDR 120.000</div></a>					
					<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				</div>
			</div>
		</div>
		<div class=col-md-10>
			<ul class="nav nav-tabs">
			  <li class="active"><a href="#">Shop</a></li>
			  <li><a href="#">Kreation</a></li>
			</ul>
			<h2>Active</h2>
			@for ($i = 0; $i < ; $i++)
				<div class="col-sm-6 col-md-3 product">
				<div class="thumbnail">
					<a href="#"><img data-src="{{asset('js/holder.js/100%x300')}}" alt="..."></a>
					<div class="caption">
						<!-- <div class="price">IDR 120.000</div> -->	
						<div class="well well-sm">IDR 120.000</div>					
						<h4><strong> <a href=""> Starks Family </a> </strong></h4>
						<h5>Design by <a href="">Jonas Strong</a> </h5>

						 <span class="label label-success left">20/25</span>
						 <span class="label label-warning right">Tomorrow</span>
						 <span class="clearfix"></span>
					</div>
				</div>
			</div>
			@endfor

			

			<span class="clearfix"></span>

			<h2>Expired</h2>

			<hr>
			
			@for ($i = 0; $i < 4; $i++)
				<div class="col-sm-6 col-md-3 product">
				<div class="thumbnail">
					<a href="#"><img data-src="{{asset('js/holder.js/100%x300')}}" alt="..."></a>
				</div>
				</div>
			@endfor
			

			<!-- <div class="col-sm-6 col-md-3 product">
				<div class="thumbnail">
					<a href="#"><img data-src="{{asset('js/holder.js/100%x300')}}" alt="..."></a>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-3 product">
				<div class="thumbnail">
					<a href="#"><img data-src="{{asset('js/holder.js/100%x300')}}" alt="..."></a>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-3 product">
				<div class="thumbnail">
					<a href="#"><img data-src="{{asset('js/holder.js/100%x300')}}" alt="..."></a>
				</div>
			</div> -->
		</div> <!-- end of product row -->
	</div> <!-- end of outest row -->
</div> <!-- end of container -->

@endsection