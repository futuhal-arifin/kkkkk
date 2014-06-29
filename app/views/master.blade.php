<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/stylesheet.css')}}" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/holder.js')}}"></script>


  	<nav class="navbar navbar-default" role="navigation">

  		<div class="container">
  			<!-- Brand and toggle get grouped for better mobile display -->
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand" href="/">Kreatees</a>
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
            <li><a href="shop">Shop</a></li>
  					<li><a href="kreate">Kreate</a></li>
  					<li><a href="blog">Blog</a></li>
  				</ul>

  				<ul class="nav navbar-nav navbar-right">
  					<form class="navbar-form navbar-left" role="search">
  						<div class="form-group">
  							<input type="text" class="form-control" placeholder="Search">
  						</div>
  						<button type="submit" class="btn btn-default">Search</button>
  					</form>
  					<li><a href="dashboard">Login</a></li>
  					<li><a href="#">Cart</a></li>
  				</ul>
  			</div><!-- /.navbar-collapse -->
  		</div><!-- /.container -->
  	</nav>

  	@yield('content');

    <hr>

    <footer>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-4">
  				<h3>Subscribe our Newsletter</h3>
  				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
  				<p><a class="btn" href="#">View details &raquo;</a></p>
  			</div>
  			<div class="col-md-4">
  				<h3>Facebook Feed</h3>
  				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
  				<p><a class="btn" href="#">View details &raquo;</a></p>
  			</div>
  			<div class="col-md-4">
  				<h3>Twitter Timeline</h3>
  				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
  				<p><a class="btn" href="#">View details &raquo;</a></p>
  			</div>
  		</div>

  		<hr>

  		<div class="row">
  			<div class="col-md-2">
  				<div class="list-group">
  					<h4>About Us</h4>
  					<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
  					<a href="#" class="list-group-item">Morbi leo risus</a>
  					<a href="#" class="list-group-item">Porta ac consectetur ac</a>
  					<a href="#" class="list-group-item">Vestibulum at eros</a>
  				</div>
  			</div>
  			<div class="col-md-2">
  				<div class="list-group">
  					<h4>Help</h4>
  					<a href="#" class="list-group-item">FAQ</a>
  					<a href="#" class="list-group-item">Support</a>
  					<a href="#" class="list-group-item">Terms of Use</a>
  					<a href="#" class="list-group-item">Privacy Policy</a>
  				</div>
  			</div>
  			<div class="col-md-4">
  				<h4>Categories</h4>
  				<div class="row">
  					<div class="col-md-6">
  						<div class="list-group">
  							<a href="#" class="list-group-item">What is Kreatees?</a>
  							<a href="#" class="list-group-item">FAQ</a>
  							<a href="#" class="list-group-item">Support</a>
  							<a href="#" class="list-group-item">Terms of Use</a>
  							<a href="#" class="list-group-item">Privacy Policy</a>
  						</div>
  					</div>
  					<div class="col-md-6">
  						<div class="list-group">
  							<a href="#" class="list-group-item">FAQ</a>
  							<a href="#" class="list-group-item">Support</a>
  							<a href="#" class="list-group-item">Terms of Use</a>
  							<a href="#" class="list-group-item">Privacy Policy</a>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="col-md-4">
  				<h4>Contact Us</h4>
  				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
  			</div>
  		</div>
  	</div> <!-- end container -->
    </footer>
  </body>
  </html>