@extends('admin.layouts.master-dash')
@section('page', 'PropertiIdeal')
@section('menu', 'Partner Terdaftar')
@push('style')
  <link id="pagestyle" href="{{ asset('/css') }}/dataTables.bootstrap5.css" rel="stylesheet" />
@endpush
@section('content')
  <div class="card my-4">
    <div class="card-body px-4 pb-2">
      <table id="example" class="table" style="width:100%" border="1">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Partner</th>
            <th>Username</th>
            <th>No Telepon</th>
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
          @foreach ($partner as $item)
            <tr>
              <td class="pt-3">{{ $no++ }}</td>
              <td class="pt-3">{{ $item->nama }}</td>
              <td class="pt-3">{{ $item->name }}</td>
              <td class="pt-3">{{ $item->no_telepon }}</td>
              <td class="pt-3">{{ $item->detail_alamat }}</td>
              <td class="pt-3">{{ $item->status }}</td>
              <td class="pt-3">
                <a href="/admin/partner/detail/{{ $item->id_partner }}" class="text-decoration-underline">
                  klik disini
                </a>
              </td>
              <td>
                <div class="row">
                  @if ($item->status == 'Belum Verifikasi')
                    <div class="col">
                      <a href="/admin/partner/verifikasi/{{ $item->id_partner }}" id="verifikasi">
                        <button class="btn btn-success">Verifikasi</button>
                      </a>
                    </div>
                  @endif
                  @if ($item->status == 'Sudah Verifikasi')
                    <div class="col">
                      <a href="/admin/partner/nonaktif/{{ $item->id_partner }}" id="nonaktif">
                        <button class="btn btn-danger">Nonaktif</button>
                      </a>
                    </div>
                  @endif
                  @if ($item->status == 'Nonaktif')
                    <div class="col">
                      <a href="/admin/partner/aktif/{{ $item->id_partner }}" id="aktif">
                        <button class="btn btn-info">Aktif</button>
                      </a>
                    </div>
                  @endif
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
  <script>
    $('#verifikasi').click(function(e) {
      e.preventDefault();
      const href = this.getAttribute('href');
      Swal.fire({
        title: 'Yakin untuk verifikasi partner?',
        text: 'cek data profil partner terlebih dahulu',
        icon: 'question',
        showConfirmButton: true,
        showCancelButton: true,
        confirmButtonText: 'Yakin',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = href;
        }
      })
    });

    $('#nonaktif').click(function(e) {
      e.preventDefault();
      const href = this.getAttribute('href');
      Swal.fire({
        title: 'Yakin untuk nonaktifkan data partner?',
        text: 'cek data profil partner terlebih dahulu',
        icon: 'question',
        showConfirmButton: true,
        showCancelButton: true,
        confirmButtonText: 'Yakin',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = href;
        }
      })
    });

    $('#aktif').click(function(e) {
      e.preventDefault();
      const href = this.getAttribute('href');
      Swal.fire({
        title: 'Yakin untuk aktifkan data partner?',
        text: 'cek data profil partner terlebih dahulu',
        icon: 'question',
        showConfirmButton: true,
        showCancelButton: true,
        confirmButtonText: 'Yakin',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = href;
        }
      })
    });
  </script>
@endpush
