@extends('admin.layouts.master-dash')
@section('page', 'Properti Solution')
@section('menu', 'Edit Properti Solution')
@push('style')
@endpush
@section('content')
    <div class="card my-4">
        <div class="card-body px-4 pb-2">
            <form action="/properti-solution/{{$solusi->id_properti_solution}}" method="post">
                @method('PUT')
                @csrf
                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Nama Properti Solution</label>
                    <input type="text" name="nama" class="form-control w-full" value="{{$solusi->nama_solution}}">
                </div>
                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Deskripsi Kategori</label>
                    <textarea name="deskripsi" id="ckeditor" cols="30" rows="5" class="ckeditor form-control w-full">{{$solusi->deskripsi_solution}}</textarea>
                </div>
                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Harga Properti Solution</label>
                    <input type="text" name="harga" class="form-control w-full" value="{{$solusi->harga_solution}}">
                </div>
                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Status Properti Solution</label>
                    <select name="kategori" class="form-control w-full">
                        <option value="{{$solusi->kategori_solution_id}}">{{$solusi->nama_kategori}}</option>
                        @foreach ($kategori as $item)
                            <option value="{{$item->id_kategori_solution}}">{{$item->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success" type="submit">
                    Edit Data
                </button>
            </form>
        </div>
    </div>
@endsection
@push('script')
<script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
@endpush
