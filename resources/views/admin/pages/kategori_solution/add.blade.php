@extends('admin.layouts.master-dash')
@section('page', 'Kategori Solution')
@section('menu', 'Tambah Kategori Solution')
@push('style')
@endpush
@section('content')
    <div class="card my-4">
        <div class="card-body px-4 pb-2">
            <form action="/kategori-solution" method="post">
                @csrf
                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Nama Kategori</label>
                    <input type="text" name="nama" class="form-control w-full">
                </div>
                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Deskripsi Kategori</label>
                    <textarea name="deskripsi" id="ckeditor" cols="30" rows="5" class="form-control w-full ckeditor"></textarea>
                </div>
                <button class="btn btn-success" type="submit">
                    Tambah Data
                </button>
            </form>
        </div>
    </div>
@endsection
@push('script')
<script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>
@endpush
