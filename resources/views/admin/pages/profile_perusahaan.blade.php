@extends('admin.layouts.master-dash')
@section('page', 'Beranda')
@section('menu', 'Profile Perusahaan')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="row align-items-center">
      <div class="col-8">
        <h3 class="mb-0">Edit profile </h3>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form action="/admin/profile/{{$profile->id_profile_perusahaan}}" method="post">
      @csrf
      <h6 class="heading-small text-muted mb-4">Informasi Perusahaan</h6>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-6">
            <label class="form-control-label" for="input-username">Nama Perusahaan</label><br>
            <div class="input-group input-group-outline mb-4">
              <input type="text" id="input-username" class="form-control" placeholder="Username" name="nama" value="{{$profile->nama_perusahaan}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <label class="form-control-label" for="input-username">Privacy & Policy</label><br>
            <div class="input-group input-group-outline mb-4">
              <textarea class="w-100 form-control" name="pp" id="" rows="8">{{$profile->privacy_policy}}</textarea>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-4" />
      <!-- Address -->
      <h6 class="heading-small text-muted mb-4">Kontak Perusahaan</h6>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-6">
            <label class="form-control-label" for="input-username">No Telepon</label><br>
            <div class="input-group input-group-outline mb-4">
              <input type="text" id="input-username" class="form-control" name="nohp" placeholder="Username" value="{{$profile->no_hp}}">
            </div>
          </div>
          <div class="col-lg-6">
            <label class="form-control-label" for="input-username">Email</label><br>
            <div class="input-group input-group-outline mb-4">
              <input type="text" id="input-username" class="form-control" name="email" placeholder="Username" value="{{$profile->email}}">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <label class="form-control-label" for="input-username">Instagram</label><br>
          <div class="input-group input-group-outline mb-4">
            <input type="text" id="input-username" class="form-control" name="instagram" placeholder="Username" value="{{$profile->instagram}}">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-primary">
        Simpan
      </button>
    </form>
  </div>
</div>
@endsection