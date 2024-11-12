@extends('includes.app')

@section('title', 'Properti Ideal | Jual beli properti')

@section('content')
    <div class="relative h-[40rem] isolate overflow-hidden bg-primarybase">
        <div class="absolute top-0 w-full h-full bg-center bg-cover "
            style="background-image: url('{{ asset('img/assets/beranda-hero.jpg') }}');">
            <span id="blackOverlay" class="w-full h-full absolute opacity-25 bg-black"></span>
        </div>

        <div class="relative h-full px-10 z-20 grid grid-cols-2">
            <div class="flex flex-col justify-center gap-6" data-aos="fade-right">
                <p class="text-6xl font-bold text-primary-yellow ">Temukan</p>
                <p class="text-6xl font-bold text-primary-blue p-3 bg-white rounded-lg w-fit bg-opacity-50">Properti Ideal
                    Mu!
                </p>
                <p class="text-base text-white ">Kami menyediakan berbagai pilihan properti yang cocok untuk berbagai
                    kebutuhan,
                    mulai dari hunian pribadi
                    hingga bisnis komersil.</p>
                <div>
                    <button>
                        <p>Beli Properti</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="relative h-[40rem] isolate overflow-hidden bg-primarybase">
        <div class="absolute top-0 w-full h-full bg-center bg-cover "
            style="background-image: url('{{ asset('img/assets/beranda-hero.jpg') }}');">
            <span id="blackOverlay" class="w-full h-full absolute opacity-25 bg-black"></span>
        </div>

        <div class="relative h-full px-10 z-20 grid grid-cols-2">
            <div class="flex flex-col justify-center gap-6" data-aos="fade-right">
                <p class="text-6xl font-bold text-primary-yellow ">Temukan</p>
                <p class="text-6xl font-bold text-primary-blue p-3 bg-white rounded-lg w-fit bg-opacity-50">Properti Ideal
                    Mu!
                </p>
                <p class="text-base text-white ">Kami menyediakan berbagai pilihan properti yang cocok untuk berbagai
                    kebutuhan,
                    mulai dari hunian pribadi
                    hingga bisnis komersil.</p>
                <div>
                    <button>
                        <p>Beli Properti</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="relative h-[40rem] isolate overflow-hidden bg-primarybase">
        <div class="absolute top-0 w-full h-full bg-center bg-cover "
            style="background-image: url('{{ asset('img/assets/beranda-hero.jpg') }}');">
            <span id="blackOverlay" class="w-full h-full absolute opacity-25 bg-black"></span>
        </div>

        <div class="relative h-full px-10 z-20 grid grid-cols-2">
            <div class="flex flex-col justify-center gap-6" data-aos="fade-right">
                <p class="text-6xl font-bold text-primary-yellow ">Temukan</p>
                <p class="text-6xl font-bold text-primary-blue p-3 bg-white rounded-lg w-fit bg-opacity-50">Properti Ideal
                    Mu!
                </p>
                <p class="text-base text-white ">Kami menyediakan berbagai pilihan properti yang cocok untuk berbagai
                    kebutuhan,
                    mulai dari hunian pribadi
                    hingga bisnis komersil.</p>
                <div>
                    <button>
                        <p>Beli Properti</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @push('js')
        <script>
            $(document).ready(function() {
                $(window).scroll(function() {
                    var scrollPosition = $(window).scrollTop();
                    var blurTriggerPosition = 200;

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
