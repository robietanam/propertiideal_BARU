@extends('admin.layouts.master-dash')
@section('page', 'PropertiIdeal')
@section('menu', 'Partner Terdaftar')
@section('content')
<div class="card my-4">
  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
      <h6 class="text-white text-capitalize ps-3">Authors table</h6>
    </div>
  </div>
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
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
            $no = 0;
        @endphp
        @foreach ($partner as $item)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$item->nama}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->no_hp}}</td>
          <td>{{$item->detail_alamat}}</td>
          <td>{{$item->status}}</td>
          <td><button class="btn btn-warning"></button></td>
        </tr>
        @endforeach
        {{-- <tr>
          <td>Tiger Nixon</td>
          <td>System Architect</td>
          <td>Edinburgh</td>
          <td>61</td>
          <td>2011/04/25</td>
          <td>$320,800</td>
        </tr> --}}
      </tbody>
    </table>
    {{-- <div class="table-responsive p-0">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
            <th class="text-secondary opacity-7"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                <div>
                  <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">John Michael</h6>
                  <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">Manager</p>
              <p class="text-xs text-secondary mb-0">Organization</p>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-success">Online</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
            </td>
            <td class="align-middle">
              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Edit
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div> --}}
  </div>
</div>
@endsection