@extends('partner.layouts.app')

@section('title', 'Dashboard | Partner')

@section('content')
    <div>
        <div class="container mx-auto py-5">
            @if (session('error'))
                <p>{{ session('error') }}</p>
            @endif
            @if (session('success'))
                <p>{{ session('success') }}</p>
            @endif
            <div class="rounded-lg">
                <h1 class="text-3xl font-bold mb-4 text-textbase">Yuk, mulai listing properti Anda!</h1>
                <p class="text-textbase text-xl  mb-6">Silahkan diisi sesuai keadaan asli properti Anda</p>
                <form action="{{ route('pages.dashboard.properti.apartement.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div class="mb-6 pt-4">
                            <label class="mb-3 block text-xl font-medium text-textbase">
                                Foto Tampak Depan *
                            </label>
                            <div class="mb-3">
                                <input type="file" name="foto_depan" id="foto_depan" class="sr-only" />
                                <label for="foto_depan"
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
                            <description class="mb-5 block text-lg font-medium text-textbase">
                                Foto tampak depan properti apartment anda
                            </description>
                            @error('foto_depan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <div id="image-front-preview" class="mt-4"></div>
                        </div>
                        <div class="mb-6 pt-4">
                            <label class="mb-3 block text-xl font-medium text-textbase">
                                Foto Tampak Samping Kiri *
                            </label>

                            <div class="mb-3">
                                <input type="file" name="foto_samping_kiri" id="foto_samping_kiri" class="sr-only" />
                                <label for="foto_samping_kiri"
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
                            <description class="mb-5 block text-lg font-medium text-textbase">
                                Foto tampak samping kiri properti apartment anda
                            </description>
                            @error('foto_samping_kiri')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <div id="image-left-preview" class="mt-4"></div>
                        </div>
                        <div class="mb-6 pt-4">
                            <label class="mb-3 block text-xl font-medium text-textbase">
                                Foto tampak samping kanan *
                            </label>

                            <div class="mb-3">
                                <input type="file" name="foto_samping_kanan" id="foto_samping_kanan" class="sr-only" />
                                <label for="foto_samping_kanan"
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
                            <description class="mb-5 block text-lg font-medium text-textbase">
                                Foto tampak samping kanan properti apartment anda
                            </description>
                            @error('foto_samping_kanan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <div id="image-right-preview" class="mt-4"></div>
                        </div>
                        <div class="mb-6 pt-4">
                            <label class="mb-3 block text-xl font-medium text-textbase">
                                Foto tampak belakang *
                            </label>

                            <div class="mb-3">
                                <input type="file" name="foto_belakang" id="foto_belakang" class="sr-only" />
                                <label for="foto_belakang"
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
                            <description class="mb-5 block text-lg font-medium text-textbase">
                                Foto tampak belakang properti apartment anda
                            </description>
                            @error('foto_belakang')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <div id="image-behind-preview" class="mt-4"></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="nama_properti">Nama Properti *</label>
                            <input name="nama_properti" id="nama_properti" type="text"
                                placeholder="Masukkan Nama Properti" class="border p-2 rounded w-full">
                            @error('nama_properti')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="alamat">Alamat *</label>
                            <input name="alamat" id="alamat" type="text" placeholder="Masukkan alamat"
                                class="border p-2 rounded w-full">
                            @error('alamat')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="deskripsi">Deskripsi *</label>
                            <textarea type="deskripsi" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi properti"
                                class="border p-2 rounded w-full h-20"></textarea>
                            @error('deskripsi')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="harga">Harga *</label>
                            <input name="harga" id="harga" type="text" placeholder="Masukkan harga"
                                class="border p-2 rounded w-full">
                            @error('harga')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="luas_apartement">Luas Apartment *</label>
                            <input name="luas_apartement" id="luas_apartement" type="text"
                                placeholder="Masukkan luas apartement" class="border p-2 rounded w-full">
                            @error('luas_apartement')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="latitude">Latitude apartment *</label>
                            <input name="latitude" id="latitude" type="text" placeholder="Latitude apartment"
                                class="border p-2 rounded w-full">
                            @error('latitude')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="longitude">Longitude apartment
                                *</label>
                            <input name="longitude" id="longitude" type="text" placeholder="Masukkan longitude"
                                class="border p-2 rounded w-full">
                            @error('longitude')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="jumlah_kamar_tidur">Jumlah kamar tidur
                                apartment *</label>
                            <input name="jumlah_kamar_tidur" id="jumlah_kamar_tidur" type="text"
                                placeholder="Jumlah kamar tidur apartment" class="border p-2 rounded w-full">
                            @error('jumlah_kamar_tidur')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="jumlah_kamar_mandi">Jumlah kamar
                                mandi
                                *</label>
                            <input name="jumlah_kamar_mandi" id="jumlah_kamar_mandi" type="text"
                                placeholder="Masukkan jumlah kamar mandi" class="border p-2 rounded w-full">
                            @error('jumlah_kamar_mandi')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="kategori_penjualan_id">Dijual atau disewakan *</label>
                        <select name="kategori_penjualan_id" id="kategori_penjualan_id"
                            class="border p-2 rounded w-full">
                            @foreach ($salescategories as $salescategory)
                                <option value="{{ $salescategory->id_kategori_penjualan }}">
                                    {{ $salescategory->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                        @error('kategori_penjualan_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
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
        <script>
            $(document).ready(function() {
                $('#foto_depan').change(function(e) {
                    var fileName = e.target.files[0].name;
                    var fileExt = fileName.split('.').pop();
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-front-preview').html(`
                        <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-textbase">
                                ${fileName}
                                </span>
                            </div>
                        </div>
                        `);
                    };
                    reader.readAsDataURL(this.files[0]);
                });
            });

            $(document).ready(function() {
                $('#foto_samping_kiri').change(function(e) {
                    var fileName = e.target.files[0].name;
                    var fileExt = fileName.split('.').pop();
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-left-preview').html(`
                        <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-textbase">
                                ${fileName}
                                </span>
                            </div>
                        </div>
                        `);
                    };
                    reader.readAsDataURL(this.files[0]);
                });
            });

            $(document).ready(function() {
                $('#foto_samping_kanan').change(function(e) {
                    var fileName = e.target.files[0].name;
                    var fileExt = fileName.split('.').pop();
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-right-preview').html(`
                        <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-textbase">
                                ${fileName}
                                </span>
                            </div>
                        </div>
                        `);
                    };
                    reader.readAsDataURL(this.files[0]);
                });
            });

            $(document).ready(function() {
                $('#foto_belakang').change(function(e) {
                    var fileName = e.target.files[0].name;
                    var fileExt = fileName.split('.').pop();
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-behind-preview').html(`
                        <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-textbase">
                                ${fileName}
                                </span>
                            </div>
                        </div>
                        `);
                    };
                    reader.readAsDataURL(this.files[0]);
                });
            });
        </script>
    @endpush
@endsection
