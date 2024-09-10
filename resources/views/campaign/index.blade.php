<x-user_app-layout>
    <!-- Campaigns table Container-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-lg font-semibold leading-6 text-gray-900">Campaigns</h1>
                                <p class="mt-2 text-base text-gray-700">A list of all Campaigns.</p>
                            </div>
{{--                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">--}}
{{--                                <a href="{{route('employees.index')}}"--}}
{{--                                   class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">--}}
{{--                                    Add Campaign--}}
{{--                                </a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="mt-8 flow-root">
                            <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle">
                                    <!-- Campaign Management Table -->
                                    <div>
                                        <table class="min-w-full border-separate border-spacing-0">
                                            <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                                    Campaign Name
                                                </th>
                                                <th scope="col"
                                                    class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                                    Created Date
                                                </th>
                                                <th scope="col"
                                                    class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                                    Status
                                                </th>
                                                <th scope="col"
                                                    class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 text-left pl-3 pr-4 backdrop-blur backdrop-filter sm:pr-6 lg:pr-8">
                                                    Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($campaigns as $campaign)
                                                    <tr>
                                                        <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                            {{$campaign->name}}
                                                        </td>
                                                        <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                            {{$campaign->created_at}}
                                                        </td>
                                                        <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                            {{$campaign->status}}
                                                        </td>
                                                        <td class="relative whitespace-nowrap border-b border-gray-200 py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-8 lg:pr-8">
                                                            <div class="flex space-x-10">
                                                                <div><a href="{{ route('analytics.index', $campaign) }}" class="text-blue-600 hover:text-blue-900">Results</a></div>

                                                                <div>
                                                                    <form   method="POST" action="">
                                                                        @csrf
                                                                        @method('delete')
                                                                            <button type="submit"
                                                                                    onclick="return confirm('Are you sure you want to delete this employee?');"
                                                                                    class="text-red-600 hover:text-red-900">
                                                                                    Delete
                                                                            </button>
                                                                    </form>
                                                                </div>
                                                                <!-- Launch button -->
                                                                <div class="ml-auto mt-4 sm:mt-0 sm:flex-none">
                                                                    <a href="#"
                                                                       class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                                        Launch Campaign
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>

                                        <!-- Campaign Management Table -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Campaign Table container -->
    <!-- -->
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <h1 class="text-center text-lg font-semibold leading-6 tracking-tight text-gray-900">Create a Campaign</h1>
                    </div>

                    <!-- Add new Campaign Form -->
                    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                        <form method="POST" action="{{ route('campaign.store') }}">
                            @csrf
                            <div class="space-y-12">
                                <div class="border-b border-gray-900/10 pb-12">
                                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                        <!-- Name -->
                                        <div class="sm:col-span-6">
                                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                            <div class="mt-2">
                                                <input id="name" name="name" type="text" required
                                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            </div>
                                        </div>
                                        <!-- Launch Date -->
{{--                                        <div class="sm:col-span-6">--}}
{{--                                            <div class="relative max-w-sm">--}}
{{--                                              <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">--}}
{{--                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                                  <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>--}}
{{--                                                </svg>--}}
{{--                                              </div>--}}
{{--                                              <input datepicker id="default-datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <a href="{{ route('campaign.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                                <button type="submit"
                                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Add new Campaign Form -->
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <h1 class="text-center text-lg font-semibold leading-6 tracking-tight text-gray-900">Issue Canary Tokens</h1>
                    </div>

                    <!-- Canary issue Form -->
                    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm" x-data="employeeSelection()">
                        <form method="POST" action="{{ route('results.store') }}">
                            @csrf
                            <div class="space-y-12">
                                <div class="border-b border-gray-900/10 pb-12">
                                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                        <!-- Campaign -->
                                        <div class="sm:col-span-6">
                                            <label for="campaign" class="block text-sm font-medium leading-6 text-gray-900">Campaign</label>
                                            <div class="mt-2">
                                                <select id="campaign" name="campaign"
                                                        class="border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-900 dark:border-gray-700 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-indigo-600 dark:focus:border-indigo-600 mt-1">
                                                    <option selected>Select campaign</option>
                                                    @foreach($campaigns as $campaign)
                                                        <option value="{{ $campaign->id }}">{{ ucfirst($campaign->name) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Group Dropdown -->
                                        <div class="sm:col-span-6">
                                            <label for="groups" class="block text-sm font-medium leading-6 text-gray-900">Employee Group</label>
                                            <div class="mt-2">
                                                <select id="groups" name="groups" x-model="selectedGroup" @change="fetchEmployees"
                                                    class="border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5">
                                                    <option selected>Select group</option>
                                                    @foreach($groups as $group)
                                                        <option value="{{ $group->id }}">{{ ucfirst($group->name) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Employees -->
                                        <div id="employees-container" class="sm:col-span-6 mt-2">
                                            <template x-for="employee in employees" :key="employee.id">
                                                <div class="flex gap-4 mb-4">
                                                    <div class="flex-1">
                                                        <label :for="'canary-' + employee.id"
                                                            class="block text-sm font-medium leading-6 text-gray-900">
                                                            Canary
                                                        </label>
                                                        <div class="mt-2">
                                                            <input type="text"
                                                                :name="'canary-' + employee.id"
                                                                :id="'canary-' + employee.id"
                                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <label :for="'e_name-' + employee.id"
                                                            class="block text-sm font-medium leading-6 text-gray-900">
                                                            Employee
                                                        </label>
                                                        <div class="mt-2">
                                                            <input type="text"
                                                                :name="'e_name-' + employee.id"
                                                                :id="'e_name-' + employee.id"
                                                                x-bind:value="employee.f_name + ' ' + employee.l_name"
                                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <a href="{{ route('campaign.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                                <button type="submit"
                                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Issue
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Canary Issue Form -->
                </div>
            </div>
        </div>
    </div>



    <!-- Alpine.js Logic -->
    <script>
        function employeeSelection() {
            return {
                selectedGroup: '',
                employees: [],
                fetchEmployees() {
                    if (this.selectedGroup) {
                        fetch(`/employees/by-group?group_id=${this.selectedGroup}`)
                            .then(response => response.json())
                            .then(data => {
                                this.employees = data;
                            })
                            .catch(error => {
                                console.error('Error fetching employees:', error);
                            });
                    } else {
                        this.employees = [];
                    }
                }
            }
        }
    </script>

</x-user_app-layout>
