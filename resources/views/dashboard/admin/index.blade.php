@extends('dashboard.admin.layouts.main')
@section('content')
<div class="container">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid mt-5">
                <div class="row mt-5">
                    <div class="col-xl-3 col-md-6">

                        <div class="card bg-primary text-white mb-4 text-center">
                            <div class="card-body">Pendaftar</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{ url('/pendaftar') }}">Lihat</a>
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 text-center">
                        <div class="card bg-secondary text-white mb-4">
                            <div class="card-body">Verifikasi</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{ url('/verifikasi') }}">Lihat</a>
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 text-center">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Lolos</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{ url('/lolos') }}">Lihat</a>
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 text-center">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Gagal</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="gagal">Lihat</a>
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
