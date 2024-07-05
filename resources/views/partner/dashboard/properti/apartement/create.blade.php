@extends('partner.layouts.app')

@section('title', 'Dashboard | Partner')

@section('content')
    <div>
        <div class="container mx-auto py-5">
            <div class="rounded-lg">
                <h1 class="text-2xl font-bold mb-4 text-textbase">Yuk, mulai listing properti Anda!</h1>
                <p class="text-textbase text-xl  mb-6">Silahkan diisi sesuai keadaan asli properti Anda</p>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="nama">Nama *</label>
                            <input name="nama" id="nama" type="text" placeholder="Nama Partner"
                                class="border p-2 rounded w-full">
                            @error('nama')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="username">Username *</label>
                            <input name="username" id="username" type="text" placeholder="Masukkan username"
                                class="border p-2 rounded w-full">
                            @error('username')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="email">Email *</label>
                            <input type="email" name="email" id="email" placeholder="Masukkan Email"
                                class="border p-2 rounded w-full">
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="password">Password *</label>
                            <input name="password" id="password" type="password" placeholder="Masukkan password"
                                class="border p-2 rounded w-full">
                            @error('password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="konfirmasi_password">Konfirmasi
                                password *</label>
                            <input name="konfirmasi_password" id="konfirmasi_password" type="password"
                                placeholder="Masukkan ulang password" class="border p-2 rounded w-full">
                            @error('konfirmasi_password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="nama_partner">Nama Partner *</label>
                            <input name="nama_partner" id="nama_partner" type="text" placeholder="Nama Partner"
                                class="border p-2 rounded w-full">
                            @error('nama_partner')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="nama_perusahaan_partner">Nama peternakan
                                *</label>
                            <input name="nama_perusahaan_partner" id="nama_perusahaan_partner" type="text"
                                placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                            @error('nama_perusahaan_partner')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="provinsi_partner">Provinsi *</label>
                            <select name="provinsi_partner" id="provinsi_partner"
                                class="provinsi_partner border p-2 rounded w-full">
                                <option data-id="1" value="JAWA TIMUR">Pilih provinsi *</option>
                            </select>
                            @error('provinsi_partner')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="kabupaten_partner">Kabupaten *</label>
                            <select disabled name="kabupaten_partner" id="kabupaten_partner"
                                class="kabupaten_partner border p-2 rounded w-full">
                                <option data-id="1" value="KAB. NGAWI">Pilih kabupaten *</option>
                            </select>
                            @error('kabupaten_partner')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="kecamatan_partner">Kecamatan *</label>
                            <select disabled name="kecamatan_partner" id="kecamatan_partner"
                                class="kecamatan_partner border p-2 rounded w-full">
                                <option data-id="1" value="Paron">Pilih kecamatan</option>
                            </select>
                            @error('kecamatan_partner')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="kelurahan_partner">Kelurahan *</label>
                            <select disabled name="kelurahan_partner" id="kelurahan_partner"
                                class="kelurahan_partner border p-2 rounded w-full">
                                <option data-id="1" value="1">Pilih kelurahan *</option>
                            </select>
                            @error('kelurahan_partner')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="alamat_partner">Detail alamat *</label>
                        <input name="alamat_partner" id="alamat_partner" type="text" placeholder="Detail alamat"
                            class="border p-2 rounded w-full">
                        @error('alamat_partner')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="tanggal_lahir">Tanggal lahir *</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                placeholder="Masukkan Tanggal lahir" class="border p-2 rounded w-full">
                            @error('tanggal_lahir')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="jenis_kelamin">Jenis kelamin *</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="border p-2 rounded w-full">
                                <option value="">Pilih jenis kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-lg font-medium text-textbase" for="lama_peternakan_berdiri">Berdiri sejak
                            *</label>
                        <input name="lama_peternakan_berdiri" id="lama_peternakan_berdiri" type="number"
                            placeholder="Berdiri sejak" class="border p-2 rounded w-full">
                        @error('lama_peternakan_berdiri')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-medium text-textbase">
                            Foto diri *
                        </label>

                        <div class="mb-8">
                            <input type="file" name="foto_profil" id="foto_profil" class="sr-only" />
                            <label for="foto_profil"
                                class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                <div>
                                    <span class="mb-2 block text-xl font-semibold text-textbase">
                                        Jatuhkan gambar disini
                                    </span>
                                    <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                        atau
                                    </span>
                                    <span
                                        class="inline-flex rounded-lg border border-[#e0e0e0] py-2 px-7 text-base font-medium text-textbase">
                                        Pilih
                                    </span>
                                </div>
                            </label>
                        </div>
                        @error('foto_profil')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div id="image-preview1" class="mt-4"></div>

                    </div>
                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-medium text-textbase">
                            Foto peternakan *
                        </label>

                        <div class="mb-8">
                            <input type="file" name="foto_peternakan" id="foto_peternakan" class="sr-only" />
                            <label for="foto_peternakan"
                                class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                <div>
                                    <span class="mb-2 block text-xl font-semibold text-textbase">
                                        Jatuhkan gambar disini
                                    </span>
                                    <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                        atau
                                    </span>
                                    <span
                                        class="inline-flex rounded-lg border border-[#e0e0e0] py-2 px-7 text-base font-medium text-textbase">
                                        Pilih
                                    </span>
                                </div>
                            </label>
                        </div>
                        @error('foto_peternakan')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div id="image-preview2" class="mt-4"></div>
                    </div>
                    <div>
                        <button type="submit"
                            class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-xl font-semibold text-white outline-none">
                            Listing
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    @push('js')
    @endpush
@endsection
