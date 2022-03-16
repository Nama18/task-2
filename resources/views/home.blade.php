@extends('template.template')
@section('title','Home | Aplikasi Koperasi')
@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="alert alert-success">
			<h2>Selamat datang, {{ Auth::user()->name }} ( {{ Auth::user()->role }} )</h2>
		</div>
		
	</div>

</div>


@endsection
