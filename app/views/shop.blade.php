@extends('master')

@section('content')

<div class="container">
	<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand" href="#">Shop</a>
  			</div>

  			<!-- Collect the nav links, forms, and other content for toggling -->
  			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  				<ul class="nav navbar-nav">
  					<!-- <li class="dropdown">
  						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
  						<ul class="dropdown-menu">
  							<li><a href="#">Action</a></li>
  							<li><a href="#">Another action</a></li>
  							<li><a href="#">Something else here</a></li>
  							<li class="divider"></li>
  							<li><a href="#">Separated link</a></li>
  							<li class="divider"></li>
  							<li><a href="#">One more separated link</a></li>
  						</ul>
  					</li> -->
            <li><a href="shop">Popularity</a></li>
  					<li><a href="kreate">Newest</a></li>
  					<li><a href="blog">Group Buying</a></li>
  				</ul>
  			</div>
  		</nav>


	<div class="row">
		<div class="col-md-2">
			<div class="list-group">
				<h4>Department</h4>
				<a href="#" class="list-group-item">Pria</a>
				<a href="#" class="list-group-item">Wanita</a>
				<a href="#" class="list-group-item">Anak-anak</a>
			</div>
			<div class="list-group">
				<h4>Style</h4>
				<a href="#" class="list-group-item">T-Shirt</a>
				<a href="#" class="list-group-item">Hoodie</a>
				<a href="#" class="list-group-item">Tank Top</a>
				<a href="#" class="list-group-item">Long Sleeve</a>
			</div>
			<div class="list-group">
				<h4>Size</h4>
				<a href="#" class="list-group-item">Small</a>
				<a href="#" class="list-group-item">Medium</a>
				<a href="#" class="list-group-item">Large</a>
				<a href="#" class="list-group-item">Extra Large</a>
			</div>
			<div class="list-group">
				<h4>Categories</h4>
				<a href="#" class="list-group-item">Animals</a>
				<a href="#" class="list-group-item">Comics</a>
				<a href="#" class="list-group-item">Creativity</a>
				<a href="#" class="list-group-item">Cute</a>

			</div>
		</div>

		<div class="col-md-10 product-list">
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
			

		</div>
	</div>


</div>


@endsection