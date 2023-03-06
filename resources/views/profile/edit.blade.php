@extends('communs.base')
@section('title', 'Edit Profile')

@section('content')
    <div class="w-full bg-white rounded-lg -mt-12 overflow-hidden">
        <div class="p-4 flex items-center justify-between gap-4">
            <h1 class="font-black text-gray-900 text-2xl">
                Edit Profile
            </h1>
        </div>
        <div class="w-full overflow-y-auto no-scrollbar">
            <div class="flex w-max flex-wrap">
                <a href="{{ route('views.profile.summary') }}"
                    class="appearance-none w-max text-md flex items-center justify-center font-semibold p-2 px-4 text-gray-900 outline-none  hover:border-blue-400 focus:border-blue-400 border-b-4 {{ Help::sub('views.profile.summary') }}">
                    <span>Summary</span>
                </a>
                <a href="{{ route('views.profile.contracts') }}"
                    class="appearance-none w-max text-md flex items-center justify-center font-semibold p-2 px-4 text-gray-900 outline-none  hover:border-blue-400 focus:border-blue-400 border-b-4 {{ Help::sub('views.profile.contracts') }}">
                    <span>Contracts</span>
                </a>
                <a href="{{ route('views.profile.leaves.index') }}"
                    class="appearance-none w-max text-md flex items-center justify-center font-semibold p-2 px-4 text-gray-900 outline-none  hover:border-blue-400 focus:border-blue-400 border-b-4 {{ Help::sub('views.profile.leaves.index') }}">
                    <span>Leaves</span>
                </a>
                <a href="{{ route('views.profile.accounts') }}"
                    class="appearance-none w-max text-md flex items-center justify-center font-semibold p-2 px-4 text-gray-900 outline-none  hover:border-blue-400 focus:border-blue-400 border-b-4 {{ Help::sub('views.profile.accounts') }}">
                    <span>Accounts</span>
                </a>
                <a x-tab="#documents"
                    class="appearance-none w-max text-md flex items-center justify-center font-semibold p-2 px-4 text-gray-900 outline-none  hover:border-blue-400 focus:border-blue-400 border-b-4 {{ Help::sub('views.profile.documents') }}">
                    <span>Documents</span>
                </a>
            </div>
        </div>
    </div>

    <div class="grid grid-rows-1 grid-cols-1 gap-4">
        <div class="w-full bg-white p-4 rounded-lg ">
            <form action="{{ route('actions.profile.update') }}" method="POST" class="w-full flex flex-col gap-4">
                @csrf
                <div class="w-full flex flex-wrap gap-4">
                    <label for="image"
                        class="bg-gray-50 cursor-pointer flex items-center justify-center border border-gray-300 rounded-md aspect-square h-[275px]">
                        <input id="image" type="file" name="image" accept="image/*" onchange="preview(event)"
                            class="sr-only" />
                        <img class="max-w-full max-h-full block"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0OCA0OCIgd2lkdGg9IjIwMCIgaGVpZ2h0PSIyMDAiIGZpbGw9IiMxMTE4MjciPjxwYXRoIGQ9Ik0yNCAzMS4yNXEtMSAwLTEuNjUtLjY3NVEyMS43IDI5LjkgMjEuNyAyOVYxMy40NWwtNC4xIDQuMXEtLjY1LjYtMS41NzUuNjI1LS45MjUuMDI1LTEuNTI1LS42NzUtLjctLjY1LS43LTEuNiAwLS45NS43LTEuN2w3LjktNy45cS4zLS4yNS43MjUtLjQ1dC44NzUtLjJxLjQ1IDAgLjg3NS4ydC43MjUuNDVsNy45NSA4cS43LjY1LjY3NSAxLjYtLjAyNS45NS0uNjc1IDEuNi0uNi42NS0xLjU1LjYyNS0uOTUtLjAyNS0xLjY1LS42NzVsLTQuMS00VjI5cTAgLjktLjYyNSAxLjU3NVEyNSAzMS4yNSAyNCAzMS4yNVpNMTAuMjUgNDIuMnEtMS44IDAtMy4xNzUtMS4zNVE1LjcgMzkuNSA1LjcgMzcuNTVWMzAuNXEwLS45NS42NzUtMS42MjVUOCAyOC4ycTEgMCAxLjYyNS42NzV0LjYyNSAxLjYyNXY3LjFIMzcuN3YtNy4xcTAtLjk1LjY1LTEuNjI1dDEuNi0uNjc1cTEgMCAxLjY1LjY3NS42NS42NzUuNjUgMS42MjV2Ny4xcTAgMS45LTEuNCAzLjI1VDM3LjcgNDIuMloiLz48L3N2Zz4=" />
                    </label>
                    <div class="w-full flex flex-col flex-1 gap-4">
                        <div class="w-full flex flex-wrap justify-between items-center gap-2 border-b border-gray-300">
                            <h2 class="w-max text-lg font-black text-gray-900">General</h2>
                        </div>
                        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="w-full">
                                <label x-ucfirst for="firstName" class="block text-sm font-black text-gray-900 mb-1">First
                                    name</label>
                                <div class="relative">
                                    <input
                                        class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400"
                                        type="text" value="{{ $data->firstName }}" id="firstName"
                                        placeholder="First name" name="firstName" />
                                </div>
                            </div>
                            <div class="w-full">
                                <label x-ucfirst for="lastName" class="block text-sm font-black text-gray-900 mb-1">Last
                                    name</label>
                                <div class="relative">
                                    <input
                                        class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400"
                                        type="text" value="{{ $data->lastName }}" id="lastName" placeholder="Last name"
                                        name="lastName" />
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="w-full">
                                <label x-ucfirst for="birthDate" class="block text-sm font-black text-gray-900 mb-1">Birth
                                    date</label>
                                <div class="relative">
                                    <input x-date
                                        class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400"
                                        value="{{ $data->birthDate }}" id="birthDate" placeholder="Birth date"
                                        name="birthDate" />
                                </div>
                            </div>
                            <div class="w-full">
                                <label x-ucfirst for="gender"
                                    class="block text-sm font-black text-gray-900 mb-1">Gender</label>
                                <div class="relative">
                                    <select x-select id="gender" placeholder="Gender" name="gender">
                                        <option x-ucfirst value="male" @if ($data->gender == 'male') selected @endif>
                                            Male
                                        </option>
                                        <option x-ucfirst value="female" @if ($data->gender == 'female') selected @endif>
                                            Female
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="w-full">
                                <label x-ucfirst for="identity"
                                    class="block text-sm font-black text-gray-900 mb-1">Identity</label>
                                <div class="relative">
                                    <input
                                        class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400"
                                        type="text" value="{{ $data->identity }}" id="identity" placeholder="Identity"
                                        name="identity" />
                                </div>
                            </div>
                            <div class="w-full">
                                <label x-ucfirst for="identityType"
                                    class="block text-sm font-black text-gray-900 mb-1">Identity
                                    type</label>
                                <div class="relative">
                                    <select x-select id="identityType" placeholder="Identity type" name="identityType">
                                        <option x-ucfirst value="national"
                                            @if ($data->identityType == 'national') selected @endif>
                                            National</option>
                                        <option x-ucfirst value="passport"
                                            @if ($data->identityType == 'passport') selected @endif>
                                            Passport</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-wrap justify-between items-center gap-2 border-b border-gray-300">
                    <h2 class="w-max text-lg font-black text-gray-900">Contact</h2>
                </div>
                <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="w-full">
                        <label x-ucfirst for="email" class="block text-sm font-black text-gray-900 mb-1">Email</label>
                        <div class="relative">
                            <input
                                class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400"
                                value="{{ $data->email }}" id="email" placeholder="Email" name="email"
                                type="email" />
                        </div>
                    </div>
                    <div class="w-full">
                        <label x-ucfirst for="phone" class="block text-sm font-black text-gray-900 mb-1">Phone</label>
                        <div class="relative">
                            <input
                                class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400"
                                value="{{ $data->phone }}" id="phone" placeholder="Phone" name="phone"
                                type="tel" />
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <label x-ucfirst for="address" class="block text-sm font-black text-gray-900 mb-1">Address</label>
                    <input
                        class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400"
                        value="{{ $data->address }}" id="address" placeholder="Address" name="address"
                        type="text" />
                </div>
                <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-4">
                    <div class="w-full">
                        <label x-ucfirst for="state" class="block text-sm font-black text-gray-900 mb-1">State</label>
                        <div class="relative">
                            <select x-select id="state" placeholder="State" name="state">
                                @foreach (Help::states() as $state)
                                    <option x-ucfirst value="{{ $state }}"
                                        @if ($data->state == $state) selected @endif>
                                        {{ $state }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="w-full">
                        <label x-ucfirst for="city" class="block text-sm font-black text-gray-900 mb-1">City</label>
                        <div class="relative">
                            <select x-select id="city" placeholder="City" name="city">
                                @foreach (Help::cities() as $city)
                                    <option x-ucfirst value="{{ $city }}"
                                        @if ($data->city == $city) selected @endif>
                                        {{ $city }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="w-full">
                        <label x-ucfirst for="zipcode" class="block text-sm font-black text-gray-900 mb-1">Zip
                            code</label>
                        <input
                            class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400"
                            value="{{ $data->zipcode }}" id="zipcode" placeholder="Zip code" name="zipcode"
                            type="number" />
                    </div>
                </div>
                <div class="w-full">
                    <button type="submit"
                        class="appearance-none lg:w-max ml-auto text-md flex items-center justify-center rounded-md font-semibold w-full p-2 px-4 text-white outline-none bg-blue-400 hover:bg-blue-300 focus:bg-blue-300">
                        <span x-ucfirst>Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function preview(event) {
            event.target.nextElementSibling.src = event.target.files[0] ? URL.createObjectURL(event.target.files[0]) :
                "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0OCA0OCIgd2lkdGg9IjIwMCIgaGVpZ2h0PSIyMDAiIGZpbGw9IiMxMTE4MjciPjxwYXRoIGQ9Ik0yNCAzMS4yNXEtMSAwLTEuNjUtLjY3NVEyMS43IDI5LjkgMjEuNyAyOVYxMy40NWwtNC4xIDQuMXEtLjY1LjYtMS41NzUuNjI1LS45MjUuMDI1LTEuNTI1LS42NzUtLjctLjY1LS43LTEuNiAwLS45NS43LTEuN2w3LjktNy45cS4zLS4yNS43MjUtLjQ1dC44NzUtLjJxLjQ1IDAgLjg3NS4ydC43MjUuNDVsNy45NSA4cS43LjY1LjY3NSAxLjYtLjAyNS45NS0uNjc1IDEuNi0uNi42NS0xLjU1LjYyNS0uOTUtLjAyNS0xLjY1LS42NzVsLTQuMS00VjI5cTAgLjktLjYyNSAxLjU3NVEyNSAzMS4yNSAyNCAzMS4yNVpNMTAuMjUgNDIuMnEtMS44IDAtMy4xNzUtMS4zNVE1LjcgMzkuNSA1LjcgMzcuNTVWMzAuNXEwLS45NS42NzUtMS42MjVUOCAyOC4ycTEgMCAxLjYyNS42NzV0LjYyNSAxLjYyNXY3LjFIMzcuN3YtNy4xcTAtLjk1LjY1LTEuNjI1dDEuNi0uNjc1cTEgMCAxLjY1LjY3NS42NS42NzUuNjUgMS42MjV2Ny4xcTAgMS45LTEuNCAzLjI1VDM3LjcgNDIuMloiLz48L3N2Zz4=";
        };
    </script>
@endsection
