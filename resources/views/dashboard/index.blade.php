@extends('dashboard.layouts.main')
@section('content')
<div class="row">
    <div class="container col-lg-8 mx-auto">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Selamat Datang, {{ auth()->user()->name }} </h1>
        </div>
    </div>
</div>
@endsection
