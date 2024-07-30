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
                <form action="{{ route('pages.dashboard.properti.tanah.edit', $properti->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        @foreach ([
            'foto_depan' => 'Foto Tampak Depan',
            'foto_samping_kiri' => 'Foto Tampak Samping Kiri',
            'foto_samping_kanan' => 'Foto Tampak Samping Kanan',
            'foto_belakang' => 'Foto Tampak Belakang',
        ] as $field => $label)
                            <div class="mb-6 pt-4">
                                <label class="mb-3 block text-xl font-medium text-textbase">
                                    {{ $label }} *
                                </label>
                                <div class="mb-3">
                                    <input type="file" name="{{ $field }}" id="{{ $field }}"
                                        class="sr-only"
                                        onchange="document.getElementById('preview-{{ $field }}').src = window.URL.createObjectURL(this.files[0])" />
                                    <label for="{{ $field }}"
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
                                    {{ $label }} properti apartment anda
                                </description>
                                @error($field)
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                                    <div id="image-{{ $field }}-preview" class="flex items-center justify-between">
                                        <img id="preview-{{ $field }}" class="w-full h-auto mt-2 rounded-md"
                                            src="{{ asset(optional($properti->foto_properti
                                            ->where('jenis_foto_id', $loop->index + 1)
                                            ->first())->foto_properti) }}"
                                            alt="{{ $label }} Preview" />
                                    </div>
                                    <span id="label-{{ $field }}"
                                        class="truncate pr-3 text-base font-medium text-textbase relative">
                                        {{ optional($properti->foto_properti
                                        ->where('jenis_foto_id', $loop->index + 1)
                                        ->first())->foto_properti ? basename(optional($properti->foto_properti->
                                        where('jenis_foto_id', $loop->index + 1)
                                        ->first())->foto_properti) : '' }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="nama_properti">Nama Properti *</label>
                            <input value="{{ $properti->nama_properti }}" name="nama_properti" id="nama_properti"
                                type="text" placeholder="Masukkan Nama Properti" class="border p-2 rounded w-full">
                            @error('nama_properti')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="alamat">Alamat *</label>
                            <input value="{{ $properti->alamat }}" name="alamat" id="alamat" type="text"
                                placeholder="Masukkan alamat" class="border p-2 rounded w-full">
                            @error('alamat')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="deskripsi">Deskripsi *</label>
                            <textarea type="deskripsi" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi properti"
                                class="border p-2 rounded w-full h-20">{{ $properti->deskripsi }}</textarea>
                            @error('deskripsi')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="harga">Harga *</label>
                            <input value="{{ $properti->harga }}" name="harga" id="harga" type="text"
                                placeholder="Masukkan harga" class="border p-2 rounded w-full">
                            @error('harga')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="luas_apartement">Luas Apartment
                                *</label>
                            <input value="{{ optional($properti->properti_apartement->first())->luas_apartement }}"
                                name="luas_apartement" id="luas_apartement" type="text"
                                placeholder="Masukkan luas apartement" class="border p-2 rounded w-full">
                            @error('luas_apartement')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="latitude">Latitude apartment *</label>
                            <input value="{{ $properti->latitude }}" name="latitude" id="latitude" type="text"
                                placeholder="Latitude apartment" class="border p-2 rounded w-full">
                            @error('latitude')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="longitude">Longitude apartment
                                *</label>
                            <input value="{{ $properti->longitude }}" name="longitude" id="longitude" type="text"
                                placeholder="Masukkan longitude" class="border p-2 rounded w-full">
                            @error('longitude')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="jumlah_kamar_tidur">Jumlah kamar tidur
                                apartment *</label>
                            <input value="{{ optional($properti->properti_apartement->first())->jumlah_kamar_tidur }}"
                                name="jumlah_kamar_tidur" id="jumlah_kamar_tidur" type="text"
                                placeholder="Jumlah kamar tidur apartment" class="border p-2 rounded w-full">
                            @error('jumlah_kamar_tidur')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="jumlah_kamar_mandi">Jumlah kamar
                                mandi
                                *</label>
                            <input value="{{ optional($properti->properti_apartement->first())->jumlah_kamar_mandi }}"
                                name="jumlah_kamar_mandi" id="jumlah_kamar_mandi" type="text"
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
                                <option value="{{ $salescategory->id_kategori_penjualan }}"
                                    {{ $salescategory->id_kategori_penjualan == $properti->kategori_penjualan_id ? 'selected' : '' }}>
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
                            Ubah
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
                function handleFileChange(inputId, previewId, dbImageId, dbLabelFieldId) {
                    $(`#${inputId}`).change(function(e) {
                        var fileName = e.target.files[0].name;
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $(`#${previewId}`).html(`
                            <div>
                                <div class="flex items-center justify-between">
                                    <img src="${e.target.result}" class="w-full h-auto mt-2 rounded-md" />
                                </div>
                                <span class="truncate pr-3 text-base font-medium text-textbase">
                                    ${fileName}
                                </span>
                            </div>
                            `);
                            $(`#${dbImageId}`).hide();
                            $(`#${dbLabelFieldId}`).hide();
                        };
                        reader.readAsDataURL(this.files[0]);
                    });
                }

                handleFileChange('foto_depan', 'image-foto_depan-preview', 'db-image-foto_depan', 'label-foto_depan');
                handleFileChange('foto_samping_kiri', 'image-foto_samping_kiri-preview', 'db-image-foto_samping_kiri',
                    'label-foto_samping_kiri');
                handleFileChange('foto_samping_kanan', 'image-foto_samping_kanan-preview',
                    'db-image-foto_samping_kanan', 'label-foto_samping_kanan');
                handleFileChange('foto_belakang', 'image-foto_belakang-preview', 'db-image-foto_belakang',
                    'label-foto_belakang');
            });
        </script>
    @endpush
@endsection
