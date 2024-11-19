<style>
    .white-filter {
        filter: brightness(0) invert(1);
    }
</style>


<footer class="bg-secondary-blue pt-10" aria-labelledby="footer-heading">
    <div class="mx-auto max-w-full px-6 pb-8 lg:px-20 py-5">
        <div class="xl:grid xl:grid-cols-3 xl:gap-16">
            <div class="space-y-8 col-span-1 row-span-2">
                <a href="/" class="flex flex-wrap gap-x-2 items-center">
                    <img class="w-10 md:w-14 white-filter brightness-0"
                        src="{{ asset('img/icons/properti-ideal-icon.png') }}" alt="Company name">
                    <p class="text-white font-bold text-2xl">Properti Ideal</p>
                </a>
                <p class="text-white text-justify text-sm">Bergabunglah dengan ribuan pelanggan puas yang telah
                    menemukan
                    properti ideal mereka bersama kami. Mari bersama-sama wujudkan impian Anda memiliki hunian atau
                    properti investasi yang tepat.</p>
            </div>

            <div class="xs:mt-16 flex flex-col gap-8 xl:col-span-2 xl:mt-0">
                <div class="flex flex-row gap-4 place-self-end">
                    <a href="https://www.instagram.com/propertiideal_id/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffffff"
                            viewBox="0 0 256 256">
                            <path
                                d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@PropertiIdeal" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffffff"
                            viewBox="0 0 256 256">
                            <path
                                d="M164.44,121.34l-48-32A8,8,0,0,0,104,96v64a8,8,0,0,0,12.44,6.66l48-32a8,8,0,0,0,0-13.32ZM120,145.05V111l25.58,17ZM234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.41C69,215.56,120.4,216,127.34,216h1.32c6.94,0,58.37-.44,91.18-13.11a24,24,0,0,0,14.49-16.41c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-15.49,113a8,8,0,0,1-4.77,5.49c-31.65,12.22-85.48,12-86,12H128c-.54,0-54.33.2-86-12a8,8,0,0,1-4.77-5.49C34.8,173.39,32,156.57,32,128s2.8-45.39,5.16-54.47A8,8,0,0,1,41.93,68c30.52-11.79,81.66-12,85.85-12h.27c.54,0,54.38-.18,86,12a8,8,0,0,1,4.77,5.49C221.2,82.61,224,99.43,224,128S221.2,173.39,218.84,182.47Z">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="flex flex-row gap-8 max-md:flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold leading-6 text-white">Layanan</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('pages.services.propertiideal') }}"
                                    class="text-md  leading-6 text-white hover:text-slate-300">Properti
                                    Ideal</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.services.propertisolution') }}"
                                    class="text-md  leading-6 text-white hover:text-slate-300">Properti
                                    Solution</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-lg font-bold leading-6 text-white">Perusahaan</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('pages.about') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-slate-300">Tentang
                                    Kami</a>
                            </li>
                            <li>
                                <a href="wa.me/6285749783447" target="_blank"
                                    class="text-md font-medium leading-6 text-white hover:text-slate-300">Kontak</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-md font-medium leading-6 text-white hover:text-slate-300">Kebijakan
                                    Privasi</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold leading-6 text-white">Jadi Partner</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('pages.submission') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-slate-300">Pengajuan</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.sell') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-slate-300">Proses</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.partner.login') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-slate-300">Login
                                    Partner</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-lg font-bold leading-6 text-white">Kategori</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="./beli?category=rumah&minimal=&maksimal="
                                    class="text-md font-medium leading-6 text-white hover:text-slate-300">Rumah</a>
                            </li>
                            <li>
                                <a href="./beli?category=apartement&minimal=&maksimal="
                                    class="text-md font-medium leading-6 text-white hover:text-slate-300">Apartement</a>
                            </li>
                            <li>
                                <a href="./beli?category=tanah&minimal=&maksimal="
                                    class="text-md font-medium leading-6 text-white hover:text-slate-300">Tanah</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" bg-slate-100 opacity-70 w-5/6 mx-auto h-0.5"></div>
    <div class="pt-6">
        <p class="text-md flex justify-center items-center pb-6 leading-5 text-white">&copy; 2024 PT. Properti Ideal
            All
            rights
            reserved.</p>
    </div>
</footer>
</div>
