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
            <div class="rounded-lg" x-data="{ isOpen: false }">
                <h1 class="text-3xl font-bold mb-4 text-textbase">Yuk, mulai listing properti Anda!</h1>
                <p class="text-textbase text-xl  mb-6">Silahkan diisi sesuai keadaan asli properti Anda</p>
                <form action="{{ route('pages.dashboard.properti.rumah.store') }}" method="POST"
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
                                Foto tampak depan properti rumah anda
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
                                Foto tampak samping kiri properti rumah anda
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
                                Foto tampak samping kanan properti rumah anda
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
                                Foto tampak belakang properti rumah anda
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
                    <div class="mb-4">
                        <label class="text-lg font-medium text-textbase" for="harga">Harga *</label>
                        <input name="harga" id="harga" type="text" placeholder="Masukkan harga"
                            class="border p-2 rounded w-full">
                        @error('harga')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="luas_tanah">Luas tanah *
                                (<span>m<sup>2</sup></span>)</label>
                            <input name="luas_tanah" id="luas_tanah" type="text" placeholder="Masukkan luas tanah"
                                class="border p-2 rounded w-full">
                            @error('luas_tanah')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="luas_bangunan">Luas bangunan *
                                (<span>m<sup>2</sup></span>)</label>
                            <input name="luas_bangunan" id="luas_bangunan" type="text"
                                placeholder="Masukkan luas_bangunan" class="border p-2 rounded w-full">
                            @error('luas_bangunan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="latitude">Latitude rumah *</label>
                            <div class="flex gap-2 items-center">
                                <input name="latitude" id="latitude" type="number" placeholder="Latitude rumah"
                                    class="border p-2 rounded w-full">
                                <svg @click="isOpen = !isOpen" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="#2d2d2d" viewBox="0 0 256 256">
                                    <path
                                        d="M140,180a12,12,0,1,1-12-12A12,12,0,0,1,140,180ZM128,72c-22.06,0-40,16.15-40,36v4a8,8,0,0,0,16,0v-4c0-11,10.77-20,24-20s24,9,24,20-10.77,20-24,20a8,8,0,0,0-8,8v8a8,8,0,0,0,16,0v-.72c18.24-3.35,32-17.9,32-35.28C168,88.15,150.06,72,128,72Zm104,56A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z">
                                    </path>
                                </svg>
                            </div>
                            @error('latitude')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="longitude">Longitude rumah
                                *</label>
                            <div class="flex gap-2 items-center">
                                <input name="longitude" id="longitude" type="number" placeholder="Masukkan longitude"
                                    class="border p-2 rounded w-full">
                                <svg @click="isOpen = !isOpen" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="#2d2d2d" viewBox="0 0 256 256">
                                    <path
                                        d="M140,180a12,12,0,1,1-12-12A12,12,0,0,1,140,180ZM128,72c-22.06,0-40,16.15-40,36v4a8,8,0,0,0,16,0v-4c0-11,10.77-20,24-20s24,9,24,20-10.77,20-24,20a8,8,0,0,0-8,8v8a8,8,0,0,0,16,0v-.72c18.24-3.35,32-17.9,32-35.28C168,88.15,150.06,72,128,72Zm104,56A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z">
                                    </path>
                                </svg>
                            </div>
                            @error('longitude')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="jumlah_garasi">Jumlah garasi
                                rumah *</label>
                            <input name="jumlah_garasi" id="jumlah_garasi" type="text" placeholder="Jumlah garasi"
                                class="border p-2 rounded w-full">
                            @error('jumlah_garasi')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="jumlah_kamar_tidur">Jumlah kamar tidur
                                rumah *</label>
                            <input name="jumlah_kamar_tidur" id="jumlah_kamar_tidur" type="text"
                                placeholder="Jumlah kamar tidur rumah" class="border p-2 rounded w-full">
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

                {{-- modal --}}
                <div x-show="isOpen" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-50">

                    <div x-show="isOpen" @click.away="isOpen = false" :class="{ '!block': isOpen }"
                        class="hidden flex flex-col p-6 gap-6 bg-white rounded-xl border border-secondary-white w-full h-fit mt-10 md:mt-0 md:w-1/2 max-w-lg absolute inset-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <button @click="isOpen = false" class="absolute top-2 right-2 text-xl text-gray-600">
                            &times;
                        </button>
                        <p class="text-xl font-semibold">Latitude & Longitude</p>
                        <div class="flex flex-col gap-3">
                            <p>Buka <a target="_blank" class="underline" href="https://www.google.com/maps">Google
                                    Maps.</a></p>
                            <div class="flex flex-col gap-2">
                                <p>Telusuri tempat atau area yang akan dicari.</p>
                                <img class="w-fit h-10" src="/img/search-location.png" alt="search-location">
                            </div>
                            <div class="flex flex-col gap-2">
                                <p>Klik kanan tempat atau area pada peta. Jika menggunakan Ponsel cukup tahan lama area
                                    pada
                                    peta.
                                </p>
                                <div class="grid grid-cols-2 w-full h-72">
                                    <div class="flex items-center justify-center h-72 w-full">
                                        <img src="/img/get-data-location.png" class="h-full w-full object-contain"
                                            alt="get-data-location">
                                    </div>
                                    <div class="flex flex-col items-center justify-center h-72 w-full">
                                        <img src="/img/get-data-location2.png" class="h-fit w-full object-contain"
                                            alt="get-data-location">
                                        <div class="flex flex-col w-full justify-center items-start gap-1 px-2">
                                            <div class="flex flex-row gap-2 ">
                                                <div class="w-4 h-4 bg-red-500"> </div>
                                                <p>: Latitude</p>
                                            </div>
                                            <div class="flex flex-row gap-2 ">
                                                <div class="w-4 h-4 bg-blue-500"> </div>
                                                <p>: Longitude</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Tindakan ini akan membuka jendela pop-up. Anda dapat menemukan lintang dan bujur dalam
                                format
                                desimal
                                di
                                bagian atas.</p>
                        </div>
                    </div>
                </div>
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
