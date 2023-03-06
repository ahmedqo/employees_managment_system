@extends('communs.base')
@section('title', 'Edit Leave #' . $data->id)

@section('content')
    <div class="w-full bg-white rounded-lg -mt-12 overflow-hidden">
        <div class="p-4 flex items-center justify-between gap-4">
            <h1 class="font-black text-gray-900 text-2xl">
                Edit Leave #{{ $data->id }}
            </h1>
        </div>
        <div class="w-full overflow-y-auto">
            <div class="flex w-max flex-wrap">
                <a href="{{ route('views.profile.summary') }}"
                    class="appearance-none w-max text-md flex items-center justify-center font-semibold p-2 px-4 text-gray-900 outline-none  hover:border-blue-400 focus:border-blue-400 border-b-4 {{ Help::sub('views.profile.summary') }}">
                    <span>Summary</span>
                </a>
                <a href="{{ route('views.profile.contracts') }}"
                    class="appearance-none w-max text-md flex items-center justify-center font-semibold p-2 px-4 text-gray-900 outline-none  hover:border-blue-400 focus:border-blue-400 border-b-4 {{ Help::sub('views.profile.contracts') }}">
                    <span>Contracts</span>
                </a>
                <a href="{{ route('views.profile.reviews.index') }}"
                    class="appearance-none w-max text-md flex items-center justify-center font-semibold p-2 px-4 text-gray-900 outline-none  hover:border-blue-400 focus:border-blue-400 border-b-4 {{ Help::sub('views.profile.reviews.index') }}">
                    <span>Reviews</span>
                </a>
                <a href="{{ route('views.profile.complaints.index') }}"
                    class="appearance-none w-max text-md flex items-center justify-center font-semibold p-2 px-4 text-gray-900 outline-none  hover:border-blue-400 focus:border-blue-400 border-b-4 {{ Help::sub('views.profile.complaints.index') }}">
                    <span>Complaints</span>
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
            <form action="{{ route('actions.profile.leaves.update', $data->id) }}" method="POST"
                class="w-full flex flex-col gap-4">
                @csrf
                <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-4">
                    <div class="w-full">
                        <label x-ucfirst for="type" class="block text-sm font-black text-gray-900 mb-1">Type</label>
                        <div class="relative">
                            <select x-select id="type" placeholder="Type" name="type">
                                <option x-ucfirst value="compassionate" @if ($data->type == 'compassionate') selected @endif>
                                    Compassionate
                                </option>
                                <option x-ucfirst value="long service" @if ($data->type == 'long service') selected @endif>
                                    Long service
                                </option>
                                <option x-ucfirst value="personal" @if ($data->type == 'personal') selected @endif>
                                    Personal
                                </option>
                                <option x-ucfirst value="medical" @if ($data->type == 'medical') selected @endif>
                                    Medical
                                </option>
                                <option x-ucfirst value="annual" @if ($data->type == 'annual') selected @endif>
                                    Annual
                                </option>
                                <option x-ucfirst value="unpaid" @if ($data->type == 'unpaid') selected @endif>
                                    Unpaid
                                </option>
                                <option x-ucfirst value="other" @if ($data->type == 'other') selected @endif>
                                    Other
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full">
                        <label x-ucfirst for="startDate" class="block text-sm font-black text-gray-900 mb-1">Start
                            date</label>
                        <input x-date id="startDate" placeholder="Start date" name="startDate"
                            value="{{ $data->startDate }}" />
                    </div>
                    <div class="w-full">
                        <label x-ucfirst for="endDate" class="block text-sm font-black text-gray-900 mb-1">End date</label>
                        <input x-date id="endDate" placeholder="End date" name="endDate" value="{{ $data->endDate }}" />
                    </div>
                </div>
                <div class="w-full">
                    <label x-ucfirst for="document" class="block text-sm font-black text-gray-900 mb-1">Documents</label>
                    <div class="bg-gray-50 border border-gray-300 text-gray-900 rounded-md overflow-hidden">
                        <div class="relative w-full">
                            <input id="document" type="file"
                                class="opacity-0 block absolute top-0 left-0 w-full h-full cursor-pointer" name="document"
                                onchange="upload(this)" multiple />
                            <input readonly id="text-display" type="text" placeholder="Documents"
                                class="appearance-none bg-transparent text-gray-900 text-md rounded-md block w-full pr-10 p-2 focus:outline-1 outline-blue-400" />
                            <span
                                class="flex w-6 h-6 items-center justify-center absolute right-2 top-1/2 -translate-y-1/2">
                                <svg class="block w-4 h-4 text-gray-900 pointer-events-none" fill="currentcolor"
                                    viewBox="0 0 48 48">
                                    <path
                                        d="M24 31.25q-1 0-1.65-.675Q21.7 29.9 21.7 29V13.45l-4.1 4.1q-.65.6-1.575.625-.925.025-1.525-.675-.7-.65-.7-1.6 0-.95.7-1.7l7.9-7.9q.3-.25.725-.45t.875-.2q.45 0 .875.2t.725.45l7.95 8q.7.65.675 1.6-.025.95-.675 1.6-.6.65-1.55.625-.95-.025-1.65-.675l-4.1-4V29q0 .9-.625 1.575Q25 31.25 24 31.25ZM10.25 42.2q-1.8 0-3.175-1.35Q5.7 39.5 5.7 37.55V30.5q0-.95.675-1.625T8 28.2q1 0 1.625.675t.625 1.625v7.1H37.7v-7.1q0-.95.65-1.625t1.6-.675q1 0 1.65.675.65.675.65 1.625v7.1q0 1.9-1.4 3.25T37.7 42.2Z" />
                                </svg>
                            </span>
                        </div>
                        <div class="flex flex-col"></div>
                    </div>
                </div>
                <div class="w-full">
                    <label x-ucfirst for="description"
                        class="block text-sm font-black text-gray-900 mb-1">Description</label>
                    <div class="relative">
                        <textarea x-rich id="description" placeholder="Description" name="description"
                            class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400">{{ $data->description }}</textarea>
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
