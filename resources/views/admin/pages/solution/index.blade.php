@extends('admin.layouts.master-dash')
@section('page', 'Properti Solution')
@section('menu', 'Kategori Solution')
@push('style')
    <link id="pagestyle" href="{{ asset('/css') }}/dataTables.bootstrap5.css" rel="stylesheet" />
@endpush
@section('content')
    <div class="card my-4">
        <div class="card-body px-4 pb-2">
            <a href="/kategori-solution/create" id="verifikasi">
                <button class="btn btn-success">Tambah Data</button>
            </a>
            <table id="example" class="table" style="width:100%" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($solusi as $item)
                        <tr>
                            <td class="pt-3">{{ $no++ }}</td>
                            <td class="pt-3">{{ $item->nama_kategori }}</td>
                            <td class="pt-3">{{ $item->deskripsi_kategori }}</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="/kategori-solution/{{ $item->id_kategori_solution }}/edit" id="verifikasi">
                                            <button class="btn btn-warning">edit</button>
                                        </a>
                                    </div>

                                    {{-- <div class="col">
                                        <a href="/admin/partner/nonaktif/{{ $item->id_partner }}" id="nonaktif">
                                            <button class="btn btn-danger">Hapus</button>
                                        </a>
                                    </div> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
@endpush
