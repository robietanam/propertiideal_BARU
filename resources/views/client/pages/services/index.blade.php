@extends('includes.app')

@section('title', 'Properti Ideal')

@section('content')
    <div class="container flex flex-col mx-auto bg-white">
        <div class="w-full draggable">
            <div class="container flex flex-col items-center gap-16 mx-auto my-32">
                <div class="grid w-full grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-y-8">
                    <div class="flex flex-col items-center">
                        <h3 class="text-5xl font-extrabold leading-tight text-center text-dark-grey-900"><span id="countto1"
                                countTo="250"></span>+</h3>
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
                        <p class="text-base font-medium leading-7 text-center text-dark-grey-600">Daily Website Visitors</p>
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
