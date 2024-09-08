@extends('admin.layouts.master-dash')
@section('page', 'Properti Ideal')
@section('menu', 'Jual Properti')
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
            border-radius: 7px
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
            z-index: 100;
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
            <table id="example" class="table" style="width:100%" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Properti</th>
                        <th>Jenis</th>
                        <th>Nama Partner</th>
                        <th>Detail Alamat</th>
                        <th>Status</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($jual as $item)
                        <tr>
                            <td class="pt-3">{{ $no++ }}</td>
                            <td class="pt-3">{{ $item->nama_properti }}</td>
                            <td class="pt-3">{{ $item->kategori_properti }}</td>
                            <td class="pt-3">{{ $item->nama }}</td>
                            <td class="pt-3">{{ $item->alamat }}</td>
                            <td class="pt-3">{{ $item->status }}</td>
                            <td class="pt-3">
                                <a href="/admin/jual/detail/{{ $item->id_properti }}" class="text-decoration-underline">
                                    klik disini
                                </a>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropbtn">Pilih Status</button>
                                    <div class="dropdown-content">
                                        <a href="/admin/setproperti/tersedia/{{ $item->id_properti }}">Tersedia</a>
                                        <a href="/admin/setproperti/tidaktersedia/{{ $item->id_properti }}">Tidak
                                            Tersedia</a>
                                        <a href="/admin/setproperti/nonaktif/{{ $item->id_properti }}">Nonaktif</a>
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
