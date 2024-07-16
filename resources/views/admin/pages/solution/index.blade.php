@extends('admin.layouts.master-dash')
@section('page', 'Properti Solution')
@section('menu', 'Kategori Solution')
@push('style')
<link id="pagestyle" href="{{ asset('/css') }}/dataTables.bootstrap5.css" rel="stylesheet" />
<style>
    /* Style The Dropdown Button */
    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        font-size: 14px;
        border: none;
        cursor: pointer;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>
@endpush
@section('content')
    <div class="card my-4">
        <div class="card-body px-4 pb-2">
            <a href="/properti-solution/create" id="verifikasi">
                <button class="btn btn-success">Tambah Data</button>
            </a>
            <table id="example" class="table" style="width:100%" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Solution</th>
                        <th>Harga Solution</th>
                        <th>Status</th>
                        <th>Kategori Solution</th>
                        <th>Ubah Status</th>
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
                            <td class="pt-3">{{ $item->nama_solution }}</td>
                            <td class="pt-3">{{ 'Rp ' . number_format($item->harga_solution, 2, ',', '.') }}</td>
                            <td class="pt-3">{{ $item->status }}</td>
                            <td class="pt-3">{{ $item->nama_kategori }}</td>
                            <td class="">
                                <div class="dropdown">
                                    <button class="btn btn-info">Klik Disini</button>
                                    <div class="dropdown-content">
                                        @if ($item->status == 'Tersedia')
                                        <a href="/properti-solution/tidaktersedia/{{$item->id_properti_solution}}">Tidak Tersedia</a>
                                        <a href="/properti-solution/nonaktif/{{$item->id_properti_solution}}">Nonaktif</a>
                                        @endif
                                        @if ($item->status == 'Tidak Tersedia')
                                        <a href="/properti-solution/tersedia/{{$item->id_properti_solution}}">Tersedia</a>
                                        <a href="/properti-solution/nonaktif/{{$item->id_properti_solution}}">Nonaktif</a>
                                        @endif
                                        @if ($item->status == 'Nonaktif')
                                        <a href="/properti-solution/tersedia/{{$item->id_properti_solution}}">Tersedia</a>
                                        <a href="/properti-solution/tidaktersedia/{{$item->id_properti_solution}}">Tidak Tersedia</a>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-warning">Klik Disini</button>
                                    <div class="dropdown-content">
                                        <a href="/properti-solution/{{ $item->id_properti_solution }}/edit">Edit</a>
                                        <a href="/properti-solution/{{ $item->id_properti_solution }}">Detail</a>
                                    </div>
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
