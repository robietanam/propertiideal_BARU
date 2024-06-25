@extends('includes.app')

@section('title', 'Properti Ideal')

@section('content')
    <div class="bg-white min-h-screen">

        <div class="px-28 py-10">
            <div class="relative z-10 pb-10">
                <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                    <div class="max-w-2xl text-center mx-auto">
                        <div class="mt-5 max-w-2xl">
                            <h1 class="block font-bold text-textbase text-5xl md:text-5xl lg:text-6xl">
                                Menyediakan Layanan<span class="text-primarybase"> Sesuai Kebutuhan Anda</span>
                            </h1>
                        </div>

                        <div class="mt-5 max-w-3xl">
                            <p class="text-lg text-textbase">Kelola peternakan, jual hewan ternak, beli hewan ternak
                                dengan berbagai layanan yang tersedia di eFarm.</p>
                        </div>
                    </div>
                </div>
            </div>

            <ul role="list" class="grid xs:grid-cols-1 gap-6 px-8 sm:grid-cols-2 lg:grid-cols-2">
                <div class="w-full px-4">
                    <div class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-4 shadow-lg rounded-lg">
                        <div class="bg-gray-50 rounded-lg">
                            <div class="relative flex">
                                <img src="{{ asset('cardcover.png') }}" alt="montaña" class="w-full bg-cover" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <img src="{{ asset('efarm-market.png') }}" alt="montaña" class="" />
                                </div>
                            </div>
                            <div class="py-8 px-10">
                                <p class="text-3xl font-semibold text-textbase leading-sm">
                                    Properti Ideal
                                </p>
                                <p class="text-xl text-textbase leading-sm mt-2">
                                    Lift-up Properti Anda, Beli hunian impian anda dengan Properti Ideal! 🤩
                                </p>
                                <div class="flex flex-wrap items-center mt-2 cursor-pointer">
                                    <a href="" class="flex text-primarybase font-semibold text-xl mr-3">
                                        Pelajari selengkapnya
                                    </a>
                                    <svg width="28" height="20" viewBox="0 0 28 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.8407 11.7976H1.79759C1.28827 11.7976 0.861346 11.6253 0.516807 11.2808C0.172269 10.9362 0 10.5093 0 10C0 9.49068 0.172269 9.06375 0.516807 8.71922C0.861346 8.37468 1.28827 8.20241 1.79759 8.20241H21.8407L16.7176 3.07927C16.3581 2.71976 16.1858 2.30032 16.2008 1.82096C16.2158 1.3416 16.388 0.922164 16.7176 0.562646C17.0771 0.203128 17.504 0.0158787 17.9984 0.000898796C18.4927 -0.0140811 18.9196 0.158188 19.2792 0.517706L27.5031 8.74169C27.6829 8.92144 27.8102 9.11618 27.8851 9.3259C27.96 9.53562 27.9975 9.76032 27.9975 10C27.9975 10.2397 27.96 10.4644 27.8851 10.6741C27.8102 10.8838 27.6829 11.0786 27.5031 11.2583L19.2792 19.4823C18.9196 19.8418 18.4927 20.0141 17.9984 19.9991C17.504 19.9841 17.0771 19.7969 16.7176 19.4374C16.388 19.0778 16.2158 18.6584 16.2008 18.179C16.1858 17.6997 16.3581 17.2802 16.7176 16.9207L21.8407 11.7976Z"
                                            fill="#AAC14C" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <li class="col-span-1 rounded-lg">
                    <div class="w-full px-4">
                        <div
                            class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-4 shadow-lg rounded-lg">
                            <div class="bg-gray-50 rounded-lg">
                                <div class="relative flex">
                                    <img src="{{ asset('cardcover.png') }}" alt="montaña" class="w-full bg-cover" />
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <img src="{{ asset('efarm-partner-logo.png') }}" alt="montaña" class="" />
                                    </div>
                                </div>
                                <div class="py-8 px-10">
                                    <p class="text-3xl font-semibold text-textbase leading-sm">
                                        Properti Solution
                                    </p>
                                    <p class="text-xl text-textbase leading-sm mt-2">
                                        Solusi menyeluruh untuk Pembangunan, Renovasi, dan Desain Interior. 🤩
                                    </p>
                                    <div class="flex flex-wrap items-center mt-2 cursor-pointer">
                                        <a href="" class="flex text-primarybase font-semibold text-xl mr-3">
                                            Pelajari selengkapnya
                                        </a>
                                        <svg width="28" height="20" viewBox="0 0 28 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.8407 11.7976H1.79759C1.28827 11.7976 0.861346 11.6253 0.516807 11.2808C0.172269 10.9362 0 10.5093 0 10C0 9.49068 0.172269 9.06375 0.516807 8.71922C0.861346 8.37468 1.28827 8.20241 1.79759 8.20241H21.8407L16.7176 3.07927C16.3581 2.71976 16.1858 2.30032 16.2008 1.82096C16.2158 1.3416 16.388 0.922164 16.7176 0.562646C17.0771 0.203128 17.504 0.0158787 17.9984 0.000898796C18.4927 -0.0140811 18.9196 0.158188 19.2792 0.517706L27.5031 8.74169C27.6829 8.92144 27.8102 9.11618 27.8851 9.3259C27.96 9.53562 27.9975 9.76032 27.9975 10C27.9975 10.2397 27.96 10.4644 27.8851 10.6741C27.8102 10.8838 27.6829 11.0786 27.5031 11.2583L19.2792 19.4823C18.9196 19.8418 18.4927 20.0141 17.9984 19.9991C17.504 19.9841 17.0771 19.7969 16.7176 19.4374C16.388 19.0778 16.2158 18.6584 16.2008 18.179C16.1858 17.6997 16.3581 17.2802 16.7176 16.9207L21.8407 11.7976Z"
                                                fill="#AAC14C" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="relative z-10 pb-10">
            <div class="w-full mx-auto lg:px-4 py-10 lg:py-10">
                <div class="max-w-2xl text-center mx-auto">
                    <div class="mt-5 max-w-2xl">
                        <h1 class="block font-bold text-textbase text-5xl md:text-5xl lg:text-6xl">
                            Berbagai produk yang tersedia di PropertiIdeal
                        </h1>
                    </div>
                    

                    <div class="mt-5 max-w-3xl">
                        <p class="text-lg text-textbase">beli rumah, jual properti, sewa apartmen dengan berbagai layanan yang tersedia di PropertiIdeal.</p>
                    </div>
                </div>
            </div>
            <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
            <div class="lg:flex items-stretch md:mt-12 mt-8">
                <div class="lg:w-1/2">
                    <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6">
                        <div class="sm:w-1/2 relative">
                            <div>
                                <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April
                                    2021</p>
                                <div class="absolute bottom-0 left-0 p-6">
                                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                                    <a href="javascript:void(0)"
                                        class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                        <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                        <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <img src="https://i.ibb.co/DYxtCJq/img-1.png" class="w-full" alt="chair" />
                        </div>
                        <div class="sm:w-1/2 sm:mt-0 mt-4 relative">
                            <div>
                                <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April
                                    2021</p>
                                <div class="absolute bottom-0 left-0 p-6">
                                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                                    <a href="javascript:void(0)"
                                        class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                        <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                        <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <img src="https://i.ibb.co/3C5HvxC/img-2.png" class="w-full" alt="wall design" />
                        </div>
                    </div>
                    <div class="relative">
                        <div>
                            <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12
                                April 2021</p>
                            <div class="absolute bottom-0 left-0 md:p-10 p-6">
                                <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                                <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                                <a href="javascript:void(0)"
                                    class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                    <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <img src="https://i.ibb.co/Ms4qyXp/img-3.png" alt="sitting place"
                            class="w-full mt-8 md:mt-6 hidden sm:block" />
                        <img class="w-full mt-4 sm:hidden" src="https://i.ibb.co/6XYbN7f/Rectangle-29.png"
                            alt="sitting place" />
                    </div>
                </div>
                <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">
                    <div class="relative">
                        <div>
                            <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12
                                April 2021</p>
                            <div class="absolute bottom-0 left-0 md:p-10 p-6">
                                <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                                <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                                <a href="javascript:void(0)"
                                    class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                    <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <img src="https://i.ibb.co/6Wfjf2w/img-4.png" alt="sitting place"
                            class="w-full sm:block hidden" />
                        <img class="w-full sm:hidden" src="https://i.ibb.co/dpXStJk/Rectangle-29.png"
                            alt="sitting place" />
                    </div>
                    <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6 md:mt-6 mt-4">
                        <div class="relative w-full">
                            <div>
                                <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April
                                    2021</p>
                                <div class="absolute bottom-0 left-0 p-6">
                                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                                    <a href="javascript:void(0)"
                                        class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                        <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                        <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <img src="https://i.ibb.co/3yvZBpm/img-5.png" class="w-full" alt="chair" />
                        </div>
                        <div class="relative w-full sm:mt-0 mt-4">
                            <div>
                                <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April
                                    2021</p>
                                <div class="absolute bottom-0 left-0 p-6">
                                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                                    <a href="javascript:void(0)"
                                        class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                        <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                        <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <img src="https://i.ibb.co/gDdnJb5/img-6.png" class="w-full" alt="wall design" />
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="container mx-auto py-16 text-center">
                <img class="h-96 w-full rounded-xl object-cover lg:w-full"
                    src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" />
            </div>
        </div>
        <div class="flex mx-auto justify-center">
            <section class="bg-white px-10">
                <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 class="text-textbase max-w-2xl mb-4 text-6xl font-bold leading-none md:text-5xl xl:text-6xl">
                            Berbagai produk yang tersedia di PropertiIdeal</h1>
                        <p class="text-textbase max-w-2xl mb-6 font-semibold lg:mb-8 md:text-xl lg:text-2xl">
                            Temukan segala jenis properti dengan proses mudah di PropertiIdeal</p>
                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="{{ asset('layouts.png') }}" alt="mockup">
                    </div>
                </div>
            </section>
        </div>
        <div class="flex mx-auto justify-center">
            <section class="bg-white px-10">
                <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="{{ asset('layouts.png') }}" alt="mockup">
                    </div>
                    <div class="ml-auto place-self-center lg:col-span-7">
                        <h1 class="text-textbase max-w-2xl mb-4 text-6xl font-bold leading-none md:text-5xl xl:text-6xl">
                            Pengelolaan properti secara online</h1>
                        <p class="text-textbase max-w-2xl mb-6 font-semibold lg:mb-8 md:text-xl lg:text-2xl">
                            Jual dan beli properti dengan aman dan cepat di PropertiIdeal</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="py-5 ">
        <div class="container flex flex-col items-center justify-center w-full p-6 mx-auto text-center xl:px-0">
            <div class="text-sm font-bold tracking-wider text-indigo-600 uppercase">Testimonials</div>
            <h2
                class="max-w-2xl mt-3 text-3xl font-bold leading-snug tracking-tight text-gray-800 lg:leading-tight lg:text-4xl ">
                Here's what our customers said</h2>
            <p class="max-w-2xl py-4 text-lg leading-normal text-gray-500 lg:text-xl xl:text-xl ">Testimonials is a great
                way to increase brand trust and awareness. Use this section to highlight your popular customers.</p>
        </div>
        <div class="container p-6 mx-auto mb-10 xl:px-0">
            <div class="grid gap-10 lg:grid-cols-2 xl:grid-cols-3">
                <div class="lg:col-span-2 xl:col-auto">
                    <div
                        class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100  md:px-14 rounded-2xl md:py-14 ">
                        <p class="text-2xl leading-normal ">Share a <mark
                                class="mx-1 text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4   ">testimonial</mark>
                            that hits some of your benefits from one of your popular customers.</p>
                        <div class="flex items-center mt-8 space-x-3">
                            <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                                <img alt="Avatar"
                                    src="https://images.unsplash.com/photo-1511485977113-f34c92461ad9?crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjIwMTQ5ODEx&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=100&amp;h=100"
                                    loading="lazy" />
                            </div>
                            <div>
                                <div class="text-lg font-medium text-gray-200">Sarah Steiner</div>
                                <div class="text-gray-600 ">VP Sales at Google</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div
                        class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100  md:px-14 rounded-2xl md:py-14 ">
                        <p class="text-2xl leading-normal ">Make sure you only pick the <mark
                                class="mx-1 text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4   ">right
                                sentence</mark> to keep it short and simple.</p>
                        <div class="flex items-center mt-8 space-x-3">
                            <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                                <img alt="Avatar"
                                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100&amp;q=80"
                                    loading="lazy" />
                            </div>
                            <div>
                                <div class="text-lg font-medium text-gray-200">Dylan Ambrose</div>
                                <div class="text-gray-600 ">Lead marketer at Netflix </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div
                        class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100  md:px-14 rounded-2xl md:py-14 ">
                        <p class="text-2xl leading-normal ">This is an <mark
                                class="mx-1 text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4   ">awesome</mark>
                            landing page template I've seen. I would use this for anything.</p>
                        <div class="flex items-center mt-8 space-x-3">
                            <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                                <img alt="Avatar"
                                    src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=100&amp;h=100&amp;crop=faces&amp;q=80"
                                    loading="lazy" />
                            </div>
                            <div>
                                <div class="text-lg font-medium text-gray-200">Gabrielle Winn</div>
                                <div class="text-gray-600 ">Co-founder of Acme Inc</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container flex flex-col mx-auto bg-white">
        <div class="w-full draggable">
            <div class="container flex flex-col items-center gap-16 mx-auto my-32">
                <div class="grid w-full grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-y-8">
                    <div class="flex flex-col items-center">
                        <h3 class="text-5xl font-extrabold leading-tight text-center text-dark-grey-900"><span
                                id="countto1" countTo="250"></span>+</h3>
                        <p class="text-base font-medium leading-7 text-center text-dark-grey-600">Successful Projects</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <h3 class="text-5xl font-extrabold leading-tight text-center text-dark-grey-900">$<span
                                id="countto2" countTo="12"></span>m</h3>
                        <p class="text-base font-medium leading-7 text-center text-dark-grey-600">Annual Revenue Growth</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <h3 class="text-5xl font-extrabold leading-tight text-center text-dark-grey-900"><span
                                id="countto3" countTo="2600" data-decimal="1"></span>k+</h3>
                        <p class="text-base font-medium leading-7 text-center text-dark-grey-600">Global Partners</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <h3 class="text-5xl font-extrabold leading-tight text-center text-dark-grey-900"><span
                                id="countto4" countTo="18000"></span>+</h3>
                        <p class="text-base font-medium leading-7 text-center text-dark-grey-600">Daily Website Visitors
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div>
                    <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">Everything you need</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">All-in-one platform</p>
                    <p class="mt-6 text-base leading-7 text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</p>
                </div>
                <dl
                    class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:gap-y-16">

                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <svg class="absolute top-1 left-0 h-5 w-5 text-indigo-500"
                                x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Invite team members
                        </dt>
                        <dd class="mt-2">Rerum repellat labore necessitatibus reprehenderit molestiae praesentium.</dd>
                    </div>

                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <svg class="absolute top-1 left-0 h-5 w-5 text-indigo-500"
                                x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            List view
                        </dt>
                        <dd class="mt-2">Corporis asperiores ea nulla temporibus asperiores non tempore assumenda aut.
                        </dd>
                    </div>

                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <svg class="absolute top-1 left-0 h-5 w-5 text-indigo-500"
                                x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Keyboard shortcuts
                        </dt>
                        <dd class="mt-2">In sit qui aliquid deleniti et. Ad nobis sunt omnis. Quo sapiente dicta
                            laboriosam.</dd>
                    </div>

                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <svg class="absolute top-1 left-0 h-5 w-5 text-indigo-500"
                                x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Calendars
                        </dt>
                        <dd class="mt-2">Sed rerum sunt dignissimos ullam. Iusto iure occaecati voluptate eligendi fugiat
                            sequi.</dd>
                    </div>

                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <svg class="absolute top-1 left-0 h-5 w-5 text-indigo-500"
                                x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Notifications
                        </dt>
                        <dd class="mt-2">Quos inventore harum enim nesciunt. Aut repellat rerum omnis adipisci.</dd>
                    </div>

                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <svg class="absolute top-1 left-0 h-5 w-5 text-indigo-500"
                                x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Boards
                        </dt>
                        <dd class="mt-2">Quae sit sunt excepturi fugit veniam voluptatem ipsum commodi.</dd>
                    </div>

                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <svg class="absolute top-1 left-0 h-5 w-5 text-indigo-500"
                                x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Reporting
                        </dt>
                        <dd class="mt-2">Eos laudantium repellat sed architecto earum unde incidunt. Illum sit dolores
                            voluptatem.</dd>
                    </div>

                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <svg class="absolute top-1 left-0 h-5 w-5 text-indigo-500"
                                x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Mobile app
                        </dt>
                        <dd class="mt-2">Nulla est saepe accusamus nostrum est est. Fugit voluptatum omnis quidem
                            voluptatem.</dd>
                    </div>

                </dl>
            </div>
        </div>
    </div>
    <script
        src="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/scripts/plugins/countup.min.js">
    </script>
    <script>
        let numbers = document.querySelectorAll("[countTo]");

        numbers.forEach((number) => {
            let ID = number.getAttribute("id");
            let value = number.getAttribute("countTo");
            let countUp = new CountUp(ID, value);

            if (number.hasAttribute("data-decimal")) {
                const options = {
                    decimalPlaces: 1,
                };
                countUp = new CountUp(ID, 2.8, options);
            } else {
                countUp = new CountUp(ID, value);
            }

            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
                number.innerHTML = value;
            }
        });
    </script>
@endsection
