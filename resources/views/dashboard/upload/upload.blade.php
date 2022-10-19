@extends('dashboard.layouts.main')
@section('content')
	<div class="row">
		<div class="container">

			<h2 class="text-center my-5">Lengkapi Persyaratan Anda</h2>

			<div class="col-lg-8 mx-auto my-5">

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
                <div class="card-body">
                    @forelse ($uploaded as $product)
                        <p class="bg-success text-white p-1">Data Anda Sudah kami terima, Silahkan cek Pengumuman secara berkala</p>
                        @include('dashboard.upload.sudahupload')
                    @empty
                        <p class="bg-danger text-white p-1">Data Belum Ada silahkan Upload</p>
                        @include('dashboard.upload.belumupload')
                    @endforelse
                </div>
			</div>
		</div>
	</div>
@endsection
