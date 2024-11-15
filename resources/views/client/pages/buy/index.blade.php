@extends('includes.app')

@section('title', 'Properti Ideal | Beli')

@section('content')
    <div class="bg-white max-w-full lg:px-10">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 md:grid-cols-2 ">
            <div class="w-full p-5 lg:p-1 rounded-md">
                <div class="lg:top-10 lg:left-14 w-full">
                    <div class="bg-white relative rounded-xl shadow-lg mb-6 px-4 py-4">
                        <div class="flex flex-row justify-between items-center mb-2">
                            <a href="" class="inline-block text-gray-600 hover:text-black w-full"><span
                                    class="material-icons-outlined font-semibold text-2xl float-left">Kategori</span></a>
                        </div>

                        <div class="h-px bg-black"></div>
                        <div id="tasks" class="my-5 ml-2">
                            <form id="filterForm" action="{{ route('pages.buy') }}" method="GET">
                                @foreach ($categories as $category)
                                    <div id="task"
                                        class="flex justify-between items-center border-b border-slate-200 py-3 px-2 border-l-4 border-l-transparent">
                                        <div class="inline-flex items-center space-x-2">
                                            <div class="text-slate-500">{{ $category->nama_kategori }}</div>
                                        </div>
                                        <div>
                                            <input type="radio" name="category" value="{{ $category->slug }}"
                                                onchange="document.getElementById('filterForm').submit();"
                                                {{ request()->category == $category->slug ? 'checked' : '' }}>
                                        </div>
                                    </div>
                                @endforeach

                                <div
                                    class="flex flex-row justify-center items-center my-2 h-full border border-gray-200 rounded-lg overflow-hidden">
                                    <span
                                        class="z-highest  w-10 h-full flex justify-center items-center text-md text-gray-400 border-r border-gray-200">
                                        Rp
                                    </span>
                                    <input value="{{ request()->minimal }}"
                                        class="border-none rounded-lg outline-none focus:ring-1 ring-blue-400 w-full pl-2"
                                        name="minimal" placeholder="Min Price">
                                </div>
                                <div
                                    class="flex flex-row justify-center items-center my-2 h-full border border-gray-200 rounded-lg overflow-hidden">
                                    <span
                                        class="z-highest  w-10 h-full flex justify-center items-center text-md text-gray-400 border-r border-gray-200">
                                        Rp
                                    </span>
                                    <input value="{{ request()->maksimal }}"
                                        class="border-none rounded-lg outline-none focus:ring-1 ring-blue-400 w-full pl-2"
                                        name="maksimal" placeholder="Max Price">
                                </div>

                                <button type="submit"
                                    class="w-full block mt-5 bg-primarybase text-white justify-center flex font-medium text-lg py-2 mt-2 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-yellow-600 hover:text-white">
                                    Terapkan filter
                                </button>
                            </form>
                            <a href="{{ route('pages.buy') }}"
                                class="w-full bg-white ring-1 ring-primarybase mt-3 text-primarybase font-medium text-lg py-2 rounded-xl flex justify-center items-center hover:shadow-lg transition duration-200 ease-in-out hover:bg-primarybase  hover:ring-1 hover:ring-primarybase hover:text-white">
                                Bersihkan filter
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3 p-4 bg-white mt-3" id="posted">
                @if ($properties->isEmpty())
                    <div class="w-full h-full flex flex-col justify-center items-center gap-5">
                        <svg width="313" height="306" viewBox="0 0 313 306" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_57_1407)">
                                <path
                                    d="M198.705 68.8186H114.365C112.443 68.8209 110.601 69.5866 109.242 70.9478C107.883 72.3089 107.118 74.1543 107.116 76.0792V263.816L106.149 264.111L85.4593 270.457C84.4788 270.756 83.4197 270.654 82.5145 270.172C81.6093 269.69 80.932 268.868 80.6313 267.887L19.0883 66.5484C18.7888 65.5663 18.8908 64.5053 19.3721 63.5986C19.8533 62.6918 20.6743 62.0136 21.6546 61.7128L53.5377 51.9351L145.968 23.5992L177.851 13.8215C178.336 13.6719 178.846 13.6197 179.352 13.6677C179.857 13.7157 180.348 13.8631 180.796 14.1014C181.245 14.3397 181.642 14.6642 181.965 15.0564C182.288 15.4485 182.531 15.9007 182.679 16.3869L198.41 67.8505L198.705 68.8186Z"
                                    fill="#F2F2F2" />
                                <path
                                    d="M217.109 67.8503L198.149 5.82487C197.834 4.79141 197.318 3.83033 196.632 2.99656C195.945 2.16278 195.102 1.47264 194.149 0.965588C193.196 0.458531 192.153 0.144486 191.079 0.0414091C190.005 -0.0616675 188.921 0.0482446 187.889 0.364854L143.063 14.1069L50.638 42.4477L5.81233 56.1945C3.72997 56.8349 1.98637 58.2767 0.964269 60.2033C-0.0578347 62.1299 -0.274944 64.384 0.360606 66.4708L65.161 278.448C65.6773 280.133 66.719 281.607 68.1334 282.655C69.5477 283.703 71.2602 284.27 73.0195 284.271C73.8338 284.272 74.6434 284.149 75.4213 283.908L106.149 274.489L107.116 274.189V273.177L106.149 273.472L75.1363 282.984C73.2982 283.545 71.3129 283.353 69.616 282.45C67.919 281.547 66.6488 280.007 66.0841 278.167L1.28873 66.1852C1.00895 65.2737 0.911435 64.3159 1.00178 63.3666C1.09212 62.4173 1.36853 61.4952 1.8152 60.653C2.26187 59.8109 2.87003 59.0652 3.60483 58.4588C4.33963 57.8524 5.18665 57.3971 6.09739 57.119L50.9231 43.3722L143.349 15.0362L188.174 1.28939C188.865 1.07825 189.583 0.97059 190.306 0.969916C191.856 0.973402 193.364 1.47388 194.609 2.39805C195.855 3.32222 196.772 4.62151 197.227 6.10562L216.099 67.8503L216.399 68.8184H217.404L217.109 67.8503Z"
                                    fill="#3F3D56" />
                                <path
                                    d="M59.2913 61.8711C58.3598 61.8705 57.453 61.5708 56.704 61.0162C55.955 60.4616 55.4031 59.6811 55.1294 58.7894L48.9044 38.4248C48.7371 37.8777 48.6791 37.3031 48.7336 36.7336C48.7881 36.1641 48.9541 35.6109 49.2221 35.1057C49.49 34.6004 49.8548 34.153 50.2955 33.789C50.7361 33.4249 51.244 33.1514 51.7903 32.984L136.821 6.91155C137.924 6.57443 139.115 6.6894 140.134 7.23124C141.153 7.77308 141.915 8.69751 142.253 9.80163L148.479 30.1665C148.815 31.2712 148.7 32.4645 148.159 33.4846C147.618 34.5046 146.695 35.2681 145.593 35.6075L60.562 61.6799C60.1503 61.8065 59.722 61.8709 59.2913 61.8711Z"
                                    fill="#004FA7" />
                                <path
                                    d="M91.9004 21.7602C97.2388 21.7602 101.566 17.4259 101.566 12.0793C101.566 6.73272 97.2388 2.39844 91.9004 2.39844C86.5621 2.39844 82.2345 6.73272 82.2345 12.0793C82.2345 17.4259 86.5621 21.7602 91.9004 21.7602Z"
                                    fill="#004FA7" />
                                <path
                                    d="M91.9004 18.2092C95.2808 18.2092 98.0212 15.4646 98.0212 12.079C98.0212 8.69333 95.2808 5.94873 91.9004 5.94873C88.52 5.94873 85.7797 8.69333 85.7797 12.079C85.7797 15.4646 88.52 18.2092 91.9004 18.2092Z"
                                    fill="white" />
                                <path
                                    d="M291.252 281.798H127.898C126.809 281.797 125.765 281.363 124.994 280.591C124.224 279.82 123.791 278.774 123.79 277.683V81.6456C123.791 80.5548 124.224 79.509 124.994 78.7377C125.764 77.9663 126.809 77.5325 127.898 77.5312H291.252C292.341 77.5325 293.385 77.9664 294.155 78.7377C294.925 79.509 295.359 80.5548 295.36 81.6456V277.683C295.359 278.774 294.925 279.82 294.155 280.591C293.385 281.363 292.341 281.797 291.252 281.798Z"
                                    fill="#E6E6E6" />
                                <path
                                    d="M216.099 67.8501H114.365C112.187 67.8532 110.099 68.7211 108.559 70.2637C107.019 71.8062 106.152 73.8974 106.149 76.0788V273.472L107.116 273.177V76.0788C107.118 74.1539 107.883 72.3085 109.242 70.9474C110.601 69.5862 112.443 68.8205 114.365 68.8182H216.399L216.099 67.8501ZM304.784 67.8501H114.365C112.187 67.8532 110.099 68.7211 108.559 70.2637C107.019 71.8062 106.152 73.8974 106.149 76.0788V297.771C106.152 299.952 107.019 302.044 108.559 303.586C110.099 305.129 112.187 305.997 114.365 306H304.784C306.962 305.997 309.05 305.129 310.59 303.586C312.13 302.044 312.997 299.952 313 297.771V76.0788C312.997 73.8974 312.13 71.8062 310.59 70.2637C309.05 68.7211 306.962 67.8532 304.784 67.8501ZM312.033 297.771C312.031 299.696 311.267 301.541 309.908 302.903C308.548 304.264 306.706 305.029 304.784 305.032H114.365C112.443 305.029 110.601 304.264 109.242 302.903C107.883 301.541 107.118 299.696 107.116 297.771V76.0788C107.118 74.1539 107.883 72.3085 109.242 70.9474C110.601 69.5862 112.443 68.8205 114.365 68.8182H304.784C306.706 68.8205 308.548 69.5862 309.908 70.9474C311.267 72.3085 312.031 74.1539 312.033 76.0788V297.771Z"
                                    fill="#3F3D56" />
                                <path
                                    d="M254.038 89.1484H165.112C163.958 89.1471 162.853 88.6877 162.037 87.871C161.222 87.0543 160.763 85.947 160.762 84.792V63.4941C160.763 62.3391 161.222 61.2318 162.037 60.4151C162.853 59.5984 163.958 59.139 165.112 59.1377H254.038C255.191 59.139 256.297 59.5984 257.112 60.4151C257.928 61.2318 258.386 62.3391 258.388 63.4941V84.792C258.386 85.947 257.928 87.0543 257.112 87.871C256.297 88.6877 255.191 89.1471 254.038 89.1484Z"
                                    fill="#004FA7" />
                                <path
                                    d="M209.575 60.5898C214.913 60.5898 219.241 56.2555 219.241 50.9089C219.241 45.5623 214.913 41.228 209.575 41.228C204.236 41.228 199.909 45.5623 199.909 50.9089C199.909 56.2555 204.236 60.5898 209.575 60.5898Z"
                                    fill="#004FA7" />
                                <path
                                    d="M209.575 56.8053C212.826 56.8053 215.462 54.1653 215.462 50.9088C215.462 47.6522 212.826 45.0122 209.575 45.0122C206.323 45.0122 203.687 47.6522 203.687 50.9088C203.687 54.1653 206.323 56.8053 209.575 56.8053Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_57_1407">
                                    <rect width="313" height="306" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="text-gray-700 text-lg font-semibold center truncate">Tidak ada data yang
                            ditemukan</p>
                    </div>
                @else
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        @foreach ($properties as $property)
                            <a href="{{ route('pages.detail.properties', $property->slug) }}">
                                <div
                                    class="w-full  flex flex-col bg-white shadow-lg rounded-xl p-3 h-fit border border-slate-200">

                                    @php
                                        $displayImage = '';
                                        if (in_array($property->kategori_properti_id, [1, 2, 3, 4])) {
                                            $displayImage = $property->foto_properti[0]['foto_properti'];
                                        }
                                    @endphp
                                    <img class=" h-52 w-full rounded-t-lg object-cover" src="{{ asset($displayImage) }}" />
                                    <div class="p-2 flex flex-col gap-2">
                                        <p class="text-gray-700 text-lg font-semibold center truncate">
                                            {{ $property->nama_properti }}</p>
                                        <div class="h-0.5 bg-gray-200 opacity-50 w-full"></div>
                                        <p class="text-primarybase text-lg font-semibold">Rp
                                            {{ number_format($property->harga, 0, ',', '.') }}</p>
                                        <div class="h-24">
                                            <p class="text-black text-base text-justify line-clamp-3">
                                                {{ $property->deskripsi }}
                                            </p>
                                        </div>
                                        <div class="flex flex-row gap-2">
                                            <svg class="w-5 aspect-square text-black"
                                                viewBox="0 0 24 24"xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 6C11.2583 6 10.5333 6.21993 9.91661 6.63199C9.29993 7.04404 8.81928 7.62971 8.53545 8.31494C8.25162 9.00016 8.17736 9.75416 8.32205 10.4816C8.46675 11.209 8.8239 11.8772 9.34835 12.4017C9.8728 12.9261 10.541 13.2833 11.2684 13.4279C11.9958 13.5726 12.7498 13.4984 13.4351 13.2145C14.1203 12.9307 14.706 12.4501 15.118 11.8334C15.5301 11.2167 15.75 10.4917 15.75 9.75C15.75 8.75544 15.3549 7.80161 14.6517 7.09835C13.9484 6.39509 12.9946 6 12 6ZM12 12C11.555 12 11.12 11.868 10.75 11.6208C10.38 11.3736 10.0916 11.0222 9.92127 10.611C9.75097 10.1999 9.70642 9.7475 9.79323 9.31105C9.88005 8.87459 10.0943 8.47368 10.409 8.15901C10.7237 7.84434 11.1246 7.63005 11.561 7.54323C11.9975 7.45642 12.4499 7.50097 12.861 7.67127C13.2722 7.84157 13.6236 8.12996 13.8708 8.49997C14.118 8.86998 14.25 9.30499 14.25 9.75C14.25 10.3467 14.0129 10.919 13.591 11.341C13.169 11.7629 12.5967 12 12 12ZM12 1.5C9.81273 1.50248 7.71575 2.37247 6.16911 3.91911C4.62247 5.46575 3.75248 7.56273 3.75 9.75C3.75 12.6938 5.11031 15.8138 7.6875 18.7734C8.84552 20.1108 10.1489 21.3151 11.5734 22.3641C11.6995 22.4524 11.8498 22.4998 12.0037 22.4998C12.1577 22.4998 12.308 22.4524 12.4341 22.3641C13.856 21.3147 15.1568 20.1104 16.3125 18.7734C18.8859 15.8138 20.25 12.6938 20.25 9.75C20.2475 7.56273 19.3775 5.46575 17.8309 3.91911C16.2843 2.37247 14.1873 1.50248 12 1.5ZM12 20.8125C10.4503 19.5938 5.25 15.1172 5.25 9.75C5.25 7.95979 5.96116 6.2429 7.22703 4.97703C8.4929 3.71116 10.2098 3 12 3C13.7902 3 15.5071 3.71116 16.773 4.97703C18.0388 6.2429 18.75 7.95979 18.75 9.75C18.75 15.1153 13.5497 19.5938 12 20.8125Z"
                                                    fill="#2D2D2D" />
                                            </svg>
                                            <p class="text-gray-700 font-semibold text-base w-full truncate">
                                                {{ $property->alamat }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>

        </div>
    </div>
    <script src="chrome-extension://kgejglhpjiefppelpmljglcjbhoiplfn/shadydom.js"></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script>
        if (!window.ShadyDOM) window.ShadyDOM = {
            force: true,
            noPatch: true
        };
    </script>
    @push('js')
    @endpush
@endsection
