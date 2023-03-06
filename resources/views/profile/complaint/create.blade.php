@extends('communs.base')
@section('title', 'New Complaint')

@section('content')
    <div class="w-full bg-white rounded-lg -mt-12 overflow-hidden">
        <div class="p-4 flex items-center justify-between gap-4">
            <h1 class="font-black text-gray-900 text-2xl">
                New Complaint
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
            <form action="{{ route('actions.profile.complaints.store') }}" method="POST"
                class="w-full flex flex-col gap-4">
                @csrf
                <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="w-full">
                        <label x-ucfirst for="grievance"
                            class="block text-sm font-black text-gray-900 mb-1">Grievance</label>
                        <div class="relative">
                            <select x-select id="grievance" placeholder="Grievance" name="grievance">
                                <option x-ucfirst value="benefit denial">Benefit denial</option>
                                <option x-ucfirst value="bullying">Bullying</option>
                                <option x-ucfirst value="classification">Classification</option>
                                <option x-ucfirst value="demotion">Demotion</option>
                                <option x-ucfirst value="discipline">Discipline</option>
                                <option x-ucfirst value="discrimination">Discrimination</option>
                                <option x-ucfirst value="harassment">Harassment</option>
                                <option x-ucfirst value="safety">Safety</option>
                                <option x-ucfirst value="workload">Kenitra</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full">
                        <label x-ucfirst for="location" class="block text-sm font-black text-gray-900 mb-1">incident
                            location</label>
                        <div class="relative">
                            <input id="location" type="text" placeholder="incident location" name="location"
                                class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400" />
                        </div>
                    </div>
                </div>
                <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="w-full">
                        <label x-ucfirst for="time" class="block text-sm font-black text-gray-900 mb-1">Incident
                            time</label>
                        <div class="relative">
                            <input id="time" type="text" placeholder="Incident time" name="time"
                                class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400" />
                        </div>
                    </div>
                    <div class="w-full">
                        <label x-ucfirst for="date" class="block text-sm font-black text-gray-900 mb-1">Incident
                            date</label>
                        <div class="relative">
                            <input x-date id="date" type="text" placeholder="Incident date" name="date"
                                class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400" />
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <label x-ucfirst for="description"
                        class="block text-sm font-black text-gray-900 mb-1">Description</label>
                    <div class="relative">
                        <textarea x-rich id="description"" placeholder="Description" name="description"
                            class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md block w-full p-2 focus:outline-1 outline-blue-400"></textarea>
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
