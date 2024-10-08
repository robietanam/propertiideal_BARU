@extends('admin.layouts.master-dash')
@section('page', 'Properti Solution')
@section('menu', 'Detail Solution')
@section('content')
    <div class="card mx-3 py-3 mb-5" style="border-radius: .5rem;">
        <div class="row g-0">
            <div class="col-md-12">
                <div class="card-body p-4">
                    <h6 class="text-warning">Detail Solution : </h6>
                    <hr>
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Nama Solution </h6>
                            <p class="text-muted">{{$detail->nama_solution}}</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Status</h6>
                            <p class="text-muted">{{$detail->status}}</p>
                        </div>
                    </div>
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Harga </h6>
                            <p class="text-muted">{{$detail->harga_solution}}</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Kategori Solution</h6>
                            <p class="text-muted">{{$detail->nama_kategori}}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <h6>Deskripsi</h6>
                            <p class="text-muted">{!!$detail->deskripsi_solution!!}</p>
                        </div>
                    </div>
                    <h6 class="text-warning">Data Foto : </h6>
                    <hr class="mt-0 mb-4">
                    <form action="/foto-solution/create/{{$detail->id_properti_solution}}">
                        @csrf
                        <button class="btn btn-info">Tambah Foto</button>
                    </form>
                    <table id="example" class="table" style="width:100%" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Deskripsi Foto</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($foto as $item)
                                <tr>
                                    <td class="pt-3">{{ $no++ }}</td>
                                    <td class="pt-3">{!! $item->deskripsi_foto !!}</td>
                                    <td class="pt-3"><img src="{{asset('upload/solution/'.$item->foto_solution)}}" alt="" class="img-fluid" width="300"></td>
                                    <td class="pt-3 d-flex gap-3">
                                        <a href="/foto-solution/edit/{{$item->id_foto_solution}}">
                                            <button class="btn btn-warning">Edit</button>
                                        </a>
                                        <form action="/foto-solution/{{$item->id_foto_solution}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-primary" onclick="confirm('Apakah anda yakin ingin menghapus data ini')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
