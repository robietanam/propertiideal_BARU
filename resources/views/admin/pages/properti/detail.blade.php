@extends('admin.layouts.master-dash')
@section('page', 'Properti Ideal')
@section('menu', 'Detail Properti')
@section('content')
    <div class="card mx-3 py-3 mb-5" style="border-radius: .5rem;">
        <div class="row g-0">
            <div class="col-md-12">
                <div class="card-body p-4">
                    <h6 class="text-warning">Properti : </h6>
                    <hr>
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Nama Properti </h6>
                            <p class="text-muted">{{$detail->nama_properti}}</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Partner</h6>
                            <p class="text-muted">{{$detail->nama}}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <h6>Deskripsi</h6>
                            <p class="text-muted">{{$detail->deskripsi}}</p>
                        </div>
                    </div>
                    <h6 class="text-warning">Data lengkap : </h6>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-12 mb-3">
                            <h6>Alamat</h6>
                            <p class="text-muted">{{$detail->alamat}}</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Harga</h6>
                            <p class="text-muted">@currency($detail->harga)</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Status</h6>
                            <p class="text-muted">{{$detail->status}}</p>
                        </div>
                    </div>
                    @if ($detail->kategori_properti == "Rumah")
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Luas Tanah</h6>
                            <p class="text-muted">{{$detail_kategori->luas_tanah}}</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Luas Bangunan</h6>
                            <p class="text-muted">{{$detail_kategori->luas_bangunan}}</p>
                        </div>
                    </div>
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Jumlah Kamar Tidur</h6>
                            <p class="text-muted">{{$detail_kategori->jumlah_kamar_tidur}} Buah</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Jumlah Kamar Mandi</h6>
                            <p class="text-muted">{{$detail_kategori->jumlah_kamar_mandi}} Buah</p>
                        </div>
                    </div>
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Jumlah Garasi</h6>
                            <p class="text-muted">{{$detail_kategori->jumlah_garasi}} Buah</p>
                        </div>
                    </div>
                    <h6 class="text-warning">Data Foto : </h6>
                    <hr class="mt-0 mb-4">
                    <table id="example" class="table" style="width:100%" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Foto</th>
                                <th>Deskripsi Foto</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($foto as $item)
                                <tr>
                                    <td class="pt-3">{{ $no++ }}</td>
                                    <td class="pt-3">{{ $item->jenis_foto }}</td>
                                    <td class="pt-3">{{ $item->deskripsi_foto }}</td>
                                    <td class="pt-3"><img src="{{asset('upload/rumah/'.$item->foto_properti)}}" alt=""></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    @if ($detail->kategori_properti == "Kos")
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Jumlah Kamar Tidur</h6>
                            <p class="text-muted">{{$detail_kategori->jumlah_kamar_tidur}} Buah</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Jumlah Kamar Mandi</h6>
                            <p class="text-muted">{{$detail_kategori->jumlah_kamar_mandi}} Buah</p>
                        </div>
                    </div>
                    <h6 class="text-warning">Data Foto : </h6>
                    <hr class="mt-0 mb-4">
                    <table id="example" class="table" style="width:100%" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Foto</th>
                                <th>Deskripsi Foto</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($foto as $item)
                                <tr>
                                    <td class="pt-3">{{ $no++ }}</td>
                                    <td class="pt-3">{{ $item->jenis_foto }}</td>
                                    <td class="pt-3">{{ $item->deskripsi_foto }}</td>
                                    <td class="pt-3"><img src="{{asset('upload/kos/'.$item->foto_properti)}}" alt=""></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    @if ($detail->kategori_properti == "Tanah")
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Luas Tanah</h6>
                            <p class="text-muted">{{$detail_kategori->luas_tanah}}</p>
                        </div>
                    </div>
                    <h6 class="text-warning">Data Foto : </h6>
                    <hr class="mt-0 mb-4">
                    <table id="example" class="table" style="width:100%" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Foto</th>
                                <th>Deskripsi Foto</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($foto as $item)
                                <tr>
                                    <td class="pt-3">{{ $no++ }}</td>
                                    <td class="pt-3">{{ $item->jenis_foto }}</td>
                                    <td class="pt-3">{{ $item->deskripsi_foto }}</td>
                                    <td class="pt-3"><img src="{{asset('upload/tanah/'.$item->foto_properti)}}" alt=""></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    @if ($detail->kategori_properti == "Apartement")
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Jumlah Kamar Tidur</h6>
                            <p class="text-muted">{{$detail_kategori->jumlah_kamar_tidur}} Buah</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Jumlah Kamar Mandi</h6>
                            <p class="text-muted">{{$detail_kategori->jumlah_kamar_mandi}} Buah</p>
                        </div>
                    </div>
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Luas Apartement</h6>
                            <p class="text-muted">{{$detail_kategori->luas_apartement}}</p>
                        </div>
                    </div>
                    <h6 class="text-warning">Data Foto : </h6>
                    <hr class="mt-0 mb-4">
                    <table id="example" class="table" style="width:100%" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Foto</th>
                                <th>Deskripsi Foto</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($foto as $item)
                                <tr>
                                    <td class="pt-3">{{ $no++ }}</td>
                                    <td class="pt-3">{{ $item->jenis_foto }}</td>
                                    <td class="pt-3">{{ $item->deskripsi_foto }}</td>
                                    <td class="pt-3"><img src="{{asset('upload/apartement/'.$item->foto_properti)}}" alt=""></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    @if ($detail->kategori_properti == "Ruko")
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Luas Tanah</h6>
                            <p class="text-muted">{{$detail_kategori->luas_tanah}}</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Luas Bangunan</h6>
                            <p class="text-muted">{{$detail_kategori->luas_bangunan}}</p>
                        </div>
                    </div>
                    <h6 class="text-warning">Data Foto : </h6>
                    <hr class="mt-0 mb-4">
                    <table id="example" class="table" style="width:100%" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Foto</th>
                                <th>Deskripsi Foto</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($foto as $item)
                                <tr>
                                    <td class="pt-3">{{ $no++ }}</td>
                                    <td class="pt-3">{{ $item->jenis_foto }}</td>
                                    <td class="pt-3">{{ $item->deskripsi_foto }}</td>
                                    <td class="pt-3"><img src="{{asset('upload/ruko/'.$item->foto_properti)}}" alt=""></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
