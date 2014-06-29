@extends('master')

@section('content')

<div class="container"
	<div class="row">
		<div class="col-md-4">
			<h2><strong>Submit Your Kreation!</strong></h2>
			<h4>Add your image</h4>
			<form role="form">
				<div class="form-group">
					<label for="exampleInputPassword1">Title</label>
					<input type="input" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Design Story</label>
					<textarea class="form-control" rows="3"></textarea>
				</div>

				<div class="form-group">
					<label for="exampleInputFile">File input</label>
					<input type="file" id="exampleInputFile">
					<p class="help-block">Choose your image file to display your design. Your image must be in JPG format (RGB mode not CMYK), 1200 pixels wide x 1200 pixels tall.</p>
				</div>
				<div class="form-group">
					<label for="">Pilih Warna</label>
					<br>
					<label class="checkbox-inline">
						<input type="checkbox" id="inlineCheckbox1" value="option1"> Merah
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" id="inlineCheckbox2" value="option2"> Biru
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" id="inlineCheckbox3" value="option3"> Hijau
					</label>
				</div>
				
				<div class="form-group">
					<label for="">Masa Kreation</label>
					<select class="form-control">
						<option>1 Hari</option>
						<option>3 Hari</option>
						<option>5 Hari</option>
						<option>7 Hari</option>
						<option>10 Hari</option>
					</select>
				</div>

				<div class="form-group">
					<div class="row">
					<label for="inputPrice" class="col-md-4 control-label">Your Price</label>
						<div class="col-md-8">
						<input type="text" class="form-control text-right" id="inputPrice" placeholder="10.000">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
					<label for="inputDiscount" class="col-md-4 control-label">Discount</label>
						<div class="col-md-8">
						<input type="text" class="form-control text-right" id="inputDiscount" placeholder="10.000">
						</div>
					</div>
				</div>
				
				<span class="pull-left">Base Price</span>
				<span class="pull-right">120.000</span>
				<span class="clearfix"></span>
				<hr>
				<span class="pull-left">Profit per Unit</span>
				<span class="pull-right">18.000</span>

				<span class="clearfix"></span>
				<br>

				<div class="checkbox">
					<label>
						<input type="checkbox"> Anda telah menyetujui <a href="#">Syarat dan Ketentuan</a> dari Kreatees.
					</label>
				</div>
				<br>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div> <!-- end of left col -->

		<div class="col-md-8">
		
		</div> <!-- end of right col -->
	</div>
</div>

@endsection