@extends('admin.layouts.master-dash')
@section('page', 'Properti Solution')
@section('menu', 'Edit Foto Properti Solution')
@push('style')
@endpush
@section('content')
    <div class="card my-4">
        <div class="card-body px-4 pb-2">
            <form action="/foto-solution/{{$data->id_foto_solution}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Foto Properti Solution</label>
                    <input type="file" name="foto" class="form-control w-full">
                    @error('nama')
                        <p class="text-primary">{{$error->message}}</p>
                    @enderror
                </div>

                <div class="input-group d-flex flex-column input-group-outline my-3">
                    <label class="">Deskripsi Foto</label>
                    <textarea name="deskripsi" id="ckeditor" cols="30" rows="5" class="ckeditor form-control w-full" required>{{$data->deskripsi_foto}}</textarea>
                </div>
                <input type="hidden" name="properti_id" value="{{$data->properti_id}}">
                <button class="btn btn-success" type="submit">
                    Edit Data
                </button>
            </form>
        </div>
    </div>
@endsection
@push('script')
<script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>
@endpush
