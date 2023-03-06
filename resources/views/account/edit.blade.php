@extends('communs.base')
@section('title', 'Edit Account #' . $data->id)

@section('content')
    <div class="w-full bg-white rounded-lg -mt-12 overflow-hidden">
        <div class="p-4 flex items-center justify-between gap-4">
            <h1 class="font-black text-gray-900 text-2xl">
                Edit Account #{{ $data->id }}
            </h1>
        </div>
    </div>

    <div class="grid grid-rows-1 grid-cols-1 gap-4">
        <div class="w-full bg-white p-4 rounded-lg ">
            <form action="{{ route('actions.accounts.update', $data->id) }}" method="POST" class="w-full flex flex-col gap-4">
                @csrf
                <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="w-full">
                        <label x-ucfirst for="bank" class="block text-sm font-black text-gray-900 mb-1">Bank</label>
                        <div class="relative">
                            <input id="bank" type="text" placeholder="Bank" name="bank"
                                value="{{ $data->bank }}"
                                class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400" />
                        </div>
                    </div>
                    <div class="w-full">
                        <label x-ucfirst for="rib" class="block text-sm font-black text-gray-900 mb-1">Rib</label>
                        <div class="relative">
                            <input id="rib" type="text" placeholder="Rib" name="rib"
                                value="{{ $data->rib }}"
                                class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400" />
                        </div>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-4">
                    <div class="w-full lg:flex-1">
                        <label x-ucfirst for="type" class="block text-sm font-black text-gray-900 mb-1">Type</label>
                        <div class="relative">
                            <select x-select id="type" placeholder="Type" name="type">
                                <option x-ucfirst value="company" @if ($data->type == 'company') selected @endif>Company
                                </option>
                                <option x-ucfirst value="employee" @if ($data->type == 'employee') selected @endif>
                                    Employee
                                </option>
                                <option x-ucfirst value="client" @if ($data->type == 'client') selected @endif>Client
                                </option>
                            </select>
                        </div>
                    </div>
                    <div x-employee class="hidden w-full lg:flex-1">
                        <label x-ucfirst for="employee" class="block text-sm font-black text-gray-900 mb-1">Employee</label>
                        <div class="relative">
                            <select x-select id="employee" placeholder="Employee" name="employee">
                                @foreach ($employees as $employee)
                                    <option x-ucfirst value="{{ $employee->id }}"
                                        @if ($bankEmployee && $employee->id == $bankEmployee->employee) selected @endif>
                                        {{ $employee->firstName }} {{ $employee->lastName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div x-client class="hidden w-full lg:flex-1">
                        <label x-ucfirst for="client" class="block text-sm font-black text-gray-900 mb-1">client</label>
                        <div class="relative">
                            <select x-select id="client" placeholder="client" name="client">
                                @foreach ($clients as $client)
                                    <option x-ucfirst value="{{ $client->id }}"
                                        @if ($bankClient && $client->id == $bankClient->client) selected @endif>
                                        {{ $client->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
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

@section('script')
    <script>
        document.querySelector("#type").addEventListener("select", change);
        change();
    </script>
@endsection
