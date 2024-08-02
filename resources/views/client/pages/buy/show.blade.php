@extends('includes.app')

@section('title', 'Properti Ideal | Beli')

@section('content')
    <div class="bg-white max-w-full lg:px-20">
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
