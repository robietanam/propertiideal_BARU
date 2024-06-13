@extends('includes.app')

@section('title', 'Properti Ideal | Tentang')

@section('content')
<section class="py-20 bg-white">
    <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
        <div class="relative">
            <h2 class="w-full text-3xl font-bold text-center sm:text-4xl md:text-5xl"> Level Up Your Designs</h2>
            <p class="w-full py-8 mx-auto -mt-2 text-lg text-center text-gray-700 intro sm:max-w-3xl">Add some nice touches to your interface with our latest designs, components, and templates. We've crafted a beautiful user experience that your visitors will love. </p>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img class="rounded-lg shadow-xl" src="https://cdn.devdojo.com/images/december2020/dashboard-011.png" alt="">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">Drag-n-drop design</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Design Made Easy</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">Crafting your user experience has never been easier, with our intuitive drag'n drop interface you will be creating beatiful designs in no time.</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12">
                <img class="rounded-lg shadow-xl" src="https://cdn.devdojo.com/images/december2020/dashboard-04.png" alt="">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pl-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">know your data</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Optimized For Conversions</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">Backed by data, these templates have been crafted for ultimate optimization. Now, converting your visitors into customers is easier than ever before.</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img class="rounded-lg shadow-xl" src="https://cdn.devdojo.com/images/december2020/dashboard-03.png" alt="">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">Easy to customize</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Make It Your Own</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">All templates and components are fully customizable. You can use these templates to tell your personal story and convey your message.</p>
            </div>
        </div>
    </div>
</section>
<!-- component -->  
<div class="px-3 md:lg:xl:px-40   border-t border-b py-20 bg-opacity-10" style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png') ;">
    <div class="grid grid-cols-1 md:lg:xl:grid-cols-3 group bg-white shadow-xl shadow-neutral-100 border ">


        <div
            class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
            <span class="p-5 rounded-full bg-red-500 text-white shadow-lg shadow-red-200"><svg
                    xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg></span>
            <p class="text-xl font-medium text-slate-700 mt-3">Most Experienced Team</p>
            <p class="mt-2 text-sm text-slate-500">Team BrainEdge education is a bunch of highly focused, energetic
                set of people.</p>
        </div>

        <div
            class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
            <span class="p-5 rounded-full bg-orange-500 text-white shadow-lg shadow-orange-200"><svg
                    xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="1.5">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                </svg></span>
            <p class="text-xl font-medium text-slate-700 mt-3">Best
                Test preparation</p>
            <p class="mt-2 text-sm text-slate-500">Know where you stand and what next to do to succeed .</p>
        </div>

        <div class="p-10 flex flex-col items-center text-center group   md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
            <span class="p-5 rounded-full bg-yellow-500 text-white shadow-lg shadow-yellow-200"><svg
                    xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                </svg></span>
            <p class="text-xl font-medium text-slate-700 mt-3">Admission process Guidance</p>
            <p class="mt-2 text-sm text-slate-500">Professional Advice for higher education abroad and select the
                top institutions worldwide.</p>
        </div>


        <div class="p-10 flex flex-col items-center text-center group   md:lg:xl:border-r hover:bg-slate-50 cursor-pointer">
            <span class="p-5 rounded-full bg-lime-500 text-white shadow-lg shadow-lime-200"><svg
                    xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg></span>
            <p class="text-xl font-medium text-slate-700 mt-3">Best
                Track Record</p>
            <p class="mt-2 text-sm text-slate-500">Yet another year ! Yet another jewel in our crown!</p>
        </div>

        <div class="p-10 flex flex-col items-center text-center group    md:lg:xl:border-r hover:bg-slate-50 cursor-pointer">
            <span class="p-5 rounded-full bg-teal-500 text-white shadow-lg shadow-teal-200"><svg
                    xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg></span>
            <p class="text-xl font-medium text-slate-700 mt-3">Free
                Mock Exams</p>
            <p class="mt-2 text-sm text-slate-500">Get Topic-Wise Tests, Section- Wise and mock tests for your
                preparation.</p>
        </div>

        <div class="p-10 flex flex-col items-center text-center group     hover:bg-slate-50 cursor-pointer">
            <span class="p-5 rounded-full bg-indigo-500 text-white shadow-lg shadow-indigo-200"><svg
                    xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg></span>
            <p class="text-xl font-medium text-slate-700 mt-3">Genuine
                Visa Advice</p>
            <p class="mt-2 text-sm text-slate-500">Visa process by helping you create the necessary documentation
            </p>
        </div>




    </div>

    <div class="w-full   bg-indigo-600 shadow-xl shadow-indigo-200 py-10 px-20 flex justify-between items-center">
        <p class=" text-white"> <span class="text-4xl font-medium">Still Confused ?</span> <br> <span class="text-lg">Book For Free Career Consultation Today ! </span></p>
        <button class="px-5 py-3  font-medium text-slate-700 shadow-xl  hover:bg-white duration-150  bg-yellow-400">BOOK AN APPOINTMENT </button>
    </div>

</div>
        <div class="text-white mt-24 container mx-auto p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">
            

            <div class="grid gap-8 md:grid-cols-2 ">
                <div class="flex flex-col  justify-center">
                    <p class="self-start inline text-xl font-semibold text-textbase">
                        Tentang eFarm 🐑
                    </p>
                    <h2 class="text-4xl font-bold text-textbase">eFarm, Teman peternakanmu</h2>
                    <div class="h-6"></div>
                    <p class="font-serif text-xl text-textbase md:pr-10">
                        Dengan eFarm, kebutuhan peternakan Anda akan terpenuhi dengan mudah dan efisien. Kami menyediakan
                        solusi terbaik untuk mendukung peternakan Anda dalam mencapai hasil yang optimal.
                    </p>
                    <div class="h-8"></div>
                    <div class="grid grid-cols-2 gap-4 pt-4 ">
                        <div>
                            <p class="font-semibold text-textbase">Partner</p>
                            <div class="h-4"></div>
                            <p class="font-serif text-textbase">
                                Kami bekerja sama dengan berbagai mitra terpercaya untuk memastikan Anda mendapatkan produk
                                dan layanan terbaik
                            </p>
                        </div>
                        <div>
                            <p class="font-semibold text-textbase">Market</p>
                            <div class="h-4"></div>
                            <p class="font-serif text-textbase">
                                Temukan berbagai produk berkualitas tinggi yang tersedia di pasar kami
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex rounded-lg">
                        <img class="rounded-xl"
                            src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/03/14/3062481748.jpg"
                            alt="about">
                    </div>
                </div>
            </div>

            <div class="h-32 md:h-40"></div>

            <p class="text-4xl">
                <span class="text-textbase font-semibold text-6xl">Dibangun oleh kelompok PPL E08 dengan Mitranya adalah
                    Ternak Express</span>
            </p>
            <section
                class="flex flex-col mt-20 w-full h-[500px] bg-blur bg-cover bg-fixed bg-center flex justify-center items-center rounded-3xl"
                style="
                background-image: url({{ asset('images/herofixed.png') }});
            ">
                <h1 class="text-primarybase text-7xl font-bold mt-20 mb-10">
                    eFarm
                </h1>

                <span class="text-center font-bold my-20 text-white/90">
                    <a href="https://egoistdeveloper.github.io/twcss-to-sass-playground/" target="_blank"
                        class="text-primarybase hover:text-white">
                        Jadi Partner
                    </a>

                    <a href="https://unsplash.com/photos/8Pm_A-OHJGg" target="_blank"
                        class="text-primarybase hover:text-white">
                        Jual Beli Hewan Ruminansia
                    </a>

                </span>
            </section>
        </div>


        <div class="text-white mt-24 container mx-auto p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">
            <div class="mx-auto px-4 md:px-8">
                <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12 flex-col">
                    <div class="flex items-center flex-col">
                        <h2 class="text-6xl font-bold text-gray-800 lg:text-6xl ">Dokumentasi eFarm</h2>
                        <p class="max-w-screen text-xl mt-3 text-gray-500 ">
                            Ini adalah aktivitas, kemitraan, produk, penjalanan, dan sejarah dari eFarm
                        </p>
                    </div>

                </div>

                <div class="grid grid-cols-3 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/03/16/Screenshot-138-2778996270.png"
                            loading="lazy" alt="Photo by Minh Pham"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Kambing</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2023/08/23/kandang-kambing-mewah-di-tuban-2_169.jpeg?w=650"
                            loading="lazy" alt="Photo by Magicle"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Kandang</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="https://kominfo.jatimprov.go.id/uploads/images/IMG-20240311-WA0050.jpg" loading="lazy"
                            alt="Photo by Martin Sanchez"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Mitra</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="https://cdn.rri.co.id/berita/48/images/1677338816561-Bupati_Banyuwangi_Ipuk_Fiestiandani_(Kanan)_Saat_Meninjau_Peternakan_Kambing/1677338816561-Bupati_Banyuwangi_Ipuk_Fiestiandani_(Kanan)_Saat_Meninjau_Peternakan_Kambing.jpg"
                            loading="lazy" alt="Photo by Lorenzo Herrera"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Aktivitas</span>
                    </a>
                    <!-- image - end -->
                </div>
            </div>

            <div class="py-24 px-8 max-w-5xl mx-auto flex flex-col md:flex-row gap-12">
                <div class="flex flex-col text-left basis-1/2">
                    <p class="inline-block font-semibold text-primary mb-4 text-black">Insurance FAQ</p>
                    <p class="sm:text-4xl text-3xl font-extrabold text-base-content text-black">Frequently Asked Questions</p>
                </div>
                <ul class="basis-1/2">
                    <li>
                        <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1 text-base-content text-black">How secure is my insurance information?</span>
                            <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                                <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                            </svg>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                            <div class="pb-5 leading-relaxed">
                                <div class="space-y-2 leading-relaxed text-black">We prioritize the security of your insurance information. We use advanced encryption and strict data protection measures to ensure your data is safe and confidential.</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1 text-base-content text-black">How can I customize my insurance coverage?</span>
                            <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                                <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                            </svg>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                            <div class="pb-5 leading-relaxed">
                                <div class="space-y-2 leading-relaxed text-black">Our insurance plans are customizable. You can tailor your coverage to meet your specific needs and budget.</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1 text-base-content text-black">Is there a waiting period for insurance claims?</span>
                            <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                                <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                            </svg>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                            <div class="pb-5 leading-relaxed">
                                <div class="space-y-2 leading-relaxed text-black">There may be a waiting period for certain insurance claims, depending on the policy terms and conditions. Please refer to your policy documents for details.</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            
            <script>
                function toggleFAQ(button) {
                    const content = button.nextElementSibling;
                    button.setAttribute("aria-expanded", button.getAttribute("aria-expanded") === "false" ? "true" : "false");
                    content.style.maxHeight = button.getAttribute("aria-expanded") === "true" ? content.scrollHeight + "px" : "0";
                }
            </script>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        @push('js')
            <script>
                $(document).ready(function() {
                    $(window).scroll(function() {
                        var scrollPosition = $(window).scrollTop();
                        var blurTriggerPosition = 200;

                        // Menambahkan atau menghapus kelas blur sesuai dengan posisi scroll
                        if (scrollPosition > blurTriggerPosition) {
                            $('.sticky').addClass('blurred-background');
                        } else {
                            $('.sticky').removeClass('blurred-background');
                        }
                    });
                });
            </script>
        @endpush
    @endsection
