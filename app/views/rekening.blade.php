@extends('master')

@section('content')

	<div class="container">
	
	<h2 class="pull-left">Informasi Rekening</h2>
	<button type="button" class="btn btn-default btn-md pull-right">
  		<span class="glyphicon glyphicon-share"></span> Tarik Dana
	</button>
	<h4 class="pull-right">Saldo Akhir: Rp 270.000</h4>
	
	<table class="table table-hover table-bordered table-striped">
		<thead>
			<th>Tanggal</th>
			<th>Deskripsi</th>
			<th>Kuantitas</th>
			<th>Dana Masuk</th>
			<th>Dana Keluar</th>
			<th>Saldo</th>
		</thead>
		<tbody>
		@for ($i = 0; $i < 4 ; $i++)
		<tr>
			<td>27/01/2014</td>
			<td>Transaksi Dummy</td>
			<td>4000</td>
			<td>120.000</td>
			<td>70.000</td>
			<td>40.000</td>
		</tr>
		@endfor
	</tbody>
	</table>
	</div>


@endsection