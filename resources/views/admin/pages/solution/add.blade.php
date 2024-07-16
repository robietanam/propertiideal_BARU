@extends('admin.layouts.master-dash')
@section('page', 'Properti Solution')
@section('menu', 'Tambah Properti Solution')
@push('style')
@endpush
@section('content')
    <div class="card my-4">
        <div class="card-body px-4 pb-2">
            <form action="/properti-solution" method="post">
                @csrf
                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Nama Properti Solution</label>
                    <input type="text" name="nama" class="form-control w-full">
                </div>
                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Deskripsi Kategori</label>
                    <textarea name="deskripsi" id="" cols="30" rows="5" class="form-control w-full"></textarea>
                </div>
                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Harga Properti Solution</label>
                    <input type="text" name="harga" class="form-control w-full">
                </div>
                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Status Properti Solution</label>
                    <select name="status" class="form-control w-full">
                        <option value="Tersedia">Tersedia</option>
                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                    </select>
                </div>
                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Status Properti Solution</label>
                    <select name="kategori" class="form-control w-full">
                        @foreach ($kategori as $item)
                            <option value="{{$item->id_kategori_solution}}">{{$item->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success" type="submit">
                    Tambah Data
                </button>
            </form>
        </div>
    </div>
@endsection
@push('script')
@endpush
