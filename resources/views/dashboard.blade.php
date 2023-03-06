@extends('communs.base')
@section('title', 'Dashboard')

@section('content')
    <div class="w-full bg-white rounded-lg -mt-12 overflow-hidden">
        <div class="p-4 flex items-center justify-between gap-4">
            <h1 class="font-black text-gray-900 text-2xl">
                {{ __('Dashboard') }}
            </h1>
            <div class="w-max flex items-center gap-2">
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-full text-white bg-blue-400 outline-none hover:bg-blue-300 focus:bg-blue-300">
                    <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 0 48 48">
                        <path
                            d="M32.3 42.35V23.3q0-1.1-.525-2.225T30.45 19.3l-10.2-7.2V8.6q.3-1.2 1.325-2.075Q22.6 5.65 24.05 5.65H42.1q1.8 0 3.2 1.35 1.4 1.35 1.4 3.2v27.6q0 1.9-1.4 3.225-1.4 1.325-3.2 1.325Zm2.8-8.6h2.85V30.9H35.1Zm0-8.4h2.85V22.5H35.1Zm0-8.5h2.85V14H35.1ZM1.3 40.05V24.6q0-1.1.475-2.075.475-.975 1.425-1.675l9.45-6.65q1.25-.85 2.65-.85t2.65.85l9.35 6.65q.85.7 1.35 1.675.5.975.5 2.075v15.45q0 1.05-.65 1.675t-1.65.625h-7.6v-11.9h-7.9v11.9h-7.8q-.9 0-1.575-.625Q1.3 41.1 1.3 40.05Z" />
                    </svg>
                </a>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-full text-white bg-blue-400 outline-none hover:bg-blue-300 focus:bg-blue-300">
                    <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 0 48 48">
                        <path
                            d="M32.3 42.35V23.3q0-1.1-.525-2.225T30.45 19.3l-10.2-7.2V8.6q.3-1.2 1.325-2.075Q22.6 5.65 24.05 5.65H42.1q1.8 0 3.2 1.35 1.4 1.35 1.4 3.2v27.6q0 1.9-1.4 3.225-1.4 1.325-3.2 1.325Zm2.8-8.6h2.85V30.9H35.1Zm0-8.4h2.85V22.5H35.1Zm0-8.5h2.85V14H35.1ZM1.3 40.05V24.6q0-1.1.475-2.075.475-.975 1.425-1.675l9.45-6.65q1.25-.85 2.65-.85t2.65.85l9.35 6.65q.85.7 1.35 1.675.5.975.5 2.075v15.45q0 1.05-.65 1.675t-1.65.625h-7.6v-11.9h-7.9v11.9h-7.8q-.9 0-1.575-.625Q1.3 41.1 1.3 40.05Z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-4 gap-4">
        <div class="w-full flex items-center gap-4 overflow-hidden p-4 bg-white rounded-lg">
            <div class="flex-1 flex flex-col">
                <h2 class="font-semibold text-xl text-gray-900">{{ __('Employees') }}</h2>
                <span class="text-gray-900 text-md px-2">{{ $employees->count() }}</span>
            </div>
            <svg class="block w-[52px] h-[52px] text-teal-300 pointer-events-none" fill="currentcolor" viewBox="0 0 48 48">
                <path
                    d="M3.4 41.5q-1 0-1.65-.625-.65-.625-.65-1.625V35.7q0-2.1 1.05-3.775 1.05-1.675 3-2.525 3.75-1.6 6.775-2.35 3.025-.75 6.225-.75 3.3 0 6.3.75t6.75 2.35q1.95.8 3.025 2.475T35.3 35.7v3.6q0 .95-.625 1.575T33 41.5Zm33.95 0q.55-.25 1.025-.875.475-.625.475-1.475V35.8q0-3.25-1.625-5.4-1.625-2.15-4.275-4 3 .5 5.65 1.225 2.65.725 4.45 1.575 1.75.95 2.825 2.675Q46.95 33.6 46.95 35.95v3.35q0 .95-.65 1.575t-1.65.625ZM18.2 23.3q-3.6 0-5.775-2.175-2.175-2.175-2.175-5.775 0-3.55 2.175-5.75T18.2 7.4q3.5 0 5.75 2.2t2.25 5.75q0 3.6-2.25 5.775Q21.7 23.3 18.2 23.3Zm19.3-7.95q0 3.55-2.225 5.75t-5.725 2.2q-.65 0-1.175-.075T27.15 22.9q1.3-1.35 1.925-3.25t.625-4.3q0-2.35-.625-4.175Q28.45 9.35 27.15 7.8q.55-.2 1.175-.3.625-.1 1.225-.1 3.5 0 5.725 2.225Q37.5 11.85 37.5 15.35Z" />
            </svg>
        </div>
        <div class="w-full flex items-center gap-4 overflow-hidden p-4 bg-white rounded-lg">
            <div class="flex-1 flex flex-col">
                <h2 class="font-semibold text-xl text-gray-900">{{ __('Clients') }}</h2>
                <span class="text-gray-900 text-md px-2">{{ $clients->count() }}</span>
            </div>
            <svg class="block w-[52px] h-[52px] text-orange-300 pointer-events-none" fill="currentcolor"
                viewBox="0 0 48 48">
                <path
                    d="m18.95 37.9-5.3-11.55-11.6-5.3 11.6-5.25 5.3-11.55 5.2 11.55 11.65 5.25-11.65 5.3Zm18.6 5.8-2.6-5.8-5.85-2.6 5.85-2.65 2.6-5.8 2.6 5.8L46 35.3l-5.85 2.6Z" />
            </svg>
        </div>
        <div class="w-full flex items-center gap-4 overflow-hidden p-4 bg-white rounded-lg">
            <div class="flex-1 flex flex-col">
                <h2 class="font-semibold text-xl text-gray-900">{{ __('Projects') }}</h2>
                <span class="text-gray-900 text-md px-2">{{ $projects->count() }}</span>
            </div>
            <svg class="block w-[52px] h-[52px] text-purple-300 pointer-events-none" fill="currentcolor"
                viewBox="0 0 48 48">
                <path
                    d="M23.95 21.45q-3.45 0-5.975-2.5-2.525-2.5-2.525-6t2.5-6.075Q20.45 4.3 24 4.3q3.5 0 6.075 2.575T32.65 13q0 3.45-2.575 5.95t-6.125 2.5Zm-11.5 21.6q-3.5 0-6.025-2.5Q3.9 38.05 3.9 34.5q0-3.5 2.525-6.075T12.5 25.85q3.5 0 6.05 2.575t2.55 6.125q0 3.45-2.525 5.975-2.525 2.525-6.125 2.525Zm23.05 0q-3.5 0-6.025-2.5-2.525-2.5-2.525-6.05 0-3.5 2.5-6.075t6.1-2.575q3.5 0 6.05 2.575t2.55 6.125q0 3.45-2.55 5.975-2.55 2.525-6.1 2.525Z" />
            </svg>
        </div>
        <div class="w-full flex items-center gap-4 overflow-hidden p-4 bg-white rounded-lg">
            <div class="flex-1 flex flex-col">
                <h2 class="font-semibold text-xl text-gray-900">Money</h2>
                <span class="text-gray-900 text-md px-2">100 DH</span>
            </div>
            <svg class="block w-[52px] h-[52px] text-green-300 pointer-events-none" fill="currentcolor" viewBox="0 0 48 48">
                <path
                    d="M24.15 42.45q-.75 0-1.225-.45-.475-.45-.475-1.25v-2.6q-2.6-.4-4.325-1.775T15.4 32.95q-.4-.65.025-1.45.425-.8 1.225-1.2.65-.15 1.375.075.725.225 1.275 1.025.85 1.55 2.2 2.25t2.95.7q2.25 0 3.625-1.05t1.375-2.8q0-2-1.4-3.175-1.4-1.175-5.25-2.375-3.45-1-5.25-3.05-1.8-2.05-1.8-5.05 0-2.6 1.625-4.575T22.45 9.8V7.2q0-.75.475-1.2.475-.45 1.225-.45.7 0 1.2.45t.5 1.2v2.6q1.7.35 3.25 1.175 1.55.825 2.55 2.275.4.65.125 1.425T30.65 15.8q-.6.25-1.35.025-.75-.225-1.45-.875T26.2 13.9q-.95-.4-2.1-.4-2.15 0-3.25.85t-1.1 2.4q0 1.55 1.225 2.675Q22.2 20.55 26.4 21.8q3.5 1.2 5.225 3.225Q33.35 27.05 33.45 30.3q0 3.25-1.925 5.3t-5.675 2.6v2.55q0 .8-.5 1.25-.5.45-1.2.45Z">
                </path>
            </svg>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row gap-4 items-start">
        <div class="w-full lg:w-4/12 h-full">
            <div class="w-full h-full bg-white p-4 rounded-lg flex flex-col">
                <h2 class="text-gray-900 font-semibold text-2xl lg:text-3xl mb-6">Prodactivity rate (%)</h2>
                <div class="w-full relative">
                    <div class="w-full">
                        <canvas id="pie" class="w-full aspect-square"></canvas>
                    </div>
                    <span id="data"
                        class="font-black text-gray-900 text-3xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></span>
                </div>
            </div>
        </div>
        <div class="w-full flex-1 h-full">
            <div class="w-full h-full bg-white p-4 rounded-lg flex flex-col">
                <h2 class="text-gray-900 font-semibold text-2xl lg:text-3xl mb-6">Week tasks</h2>
                <canvas id="chart" class="w-full flex-1"></canvas>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        const vals = Object.values({!! json_encode($progress) !!});
        data.innerHTML = ((vals[0] / (vals[0] + vals[1])) * 100).toFixed(2) + " %";
        new Chart("pie", {
            type: "doughnut",
            data: {
                labels: Object.keys({!! json_encode($progress) !!}),
                datasets: [{
                    backgroundColor: ["#60A5FA", "#f3f4f6"],
                    data: Object.values({!! json_encode($progress) !!})
                }]
            },
            options: {
                legend: false,
                tooltips: false,
                maintainAspectRatio: false
            }
        });

        new Chart("chart", {
            type: "bar",
            data: {
                labels: Object.keys({!! json_encode($months) !!}),
                datasets: [{
                    borderColor: "#60A5FA",
                    backgroundColor: "#60A5FA",
                    data: Object.values({!! json_encode($months) !!})
                }]
            },
            options: {
                legend: {
                    display: false
                },
            }
        });
    </script>
@endsection
