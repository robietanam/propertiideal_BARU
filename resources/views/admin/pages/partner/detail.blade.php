@extends('admin.layouts.master-dash')
@section('page', 'Properti Ideal')
@section('menu', 'Partner Terdaftar')
@section('content')
    <div class="card mx-3 py-3 mb-5" style="border-radius: .5rem;">
        <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="Avatar"
                    class="img-fluid my-5" style="width: 100px;" />
                <h5 class="mb-4">{{$partner->nama}}</h5>
            </div>
            <div class="col-md-8">
                <div class="card-body p-4">
                    <h6>Akun Partner : </h6>
                    <hr>
                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                             <h6>Username</h6>
                            <p class="text-muted">{{$partner->name}}</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Email</h6>
                            <p class="text-muted">{{$partner->email}}</p>
                        </div>
                    </div>
                    <h6>Data lengkap : </h6>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-12 mb-3">
                            <h6>Alamat</h6>
                            <p class="text-muted">{{$partner->detail_alamat}}</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>No telepon</h6>
                            <p class="text-muted">{{$partner->no_telepon}}</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Foto KTP</h6>
                            <img src="{{asset('upload/ktp/'.$partner->foto_ktp)}}" alt="" width="400">
                        </div>
                    </div>
                    <div class="d-flex mt-3 gap-3 justify-content-start">
                        <a href="{{$partner->link_website}}"><i class="fas fa-globe fa-lg"></i> Website</a>
                        <a href="{{$partner->link_instagram}}"><i class="fab fa-instagram fa-lg"></i> Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Detail Partner</h6>
            </div>
        </div>
        <div class="card-body px-4 pb-2">

        </div>
    </div> --}}
@endsection
