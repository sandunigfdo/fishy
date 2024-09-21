<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10">

                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-lg font-semibold leading-6 text-gray-900">Results</h1>
                                <p class="mt-2 text-base text-gray-700">Results of the {{$campaign->name}} Campaign.</p>
                            </div>
                        </div>
                        <div class="mt-8 flow-root">
                            <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle">
                                    <!-- Campaign Results Table -->
                                    <div>
                                        <table class="min-w-full border-separate border-spacing-0">
                                            <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                                    Employee Name
                                                </th>
                                                <th scope="col"
                                                    class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                                    Email
                                                </th>
                                                <th scope="col"
                                                    class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                                    Position
                                                </th>
                                                <th scope="col"
                                                    class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                                    Department
                                                </th>
                                                <th scope="col"
                                                    class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                                    Link Clicked
                                                </th>
                                                <th scope="col"
                                                    class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                                    Form Submitted
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($employees as $employee)
                                                <tr>
                                                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                        {{$employee->f_name}} {{$employee->l_name}}
                                                    </td>
                                                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                        {{$employee->email}}
                                                    </td>
                                                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                        {{$employee->position}}
                                                    </td>
                                                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                        {{$employee->department}}
                                                    </td>
                                                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                        <!-- Display results related to this employee -->
                                                        @if(isset($employee_results[$employee->id]) && count($employee_results[$employee->id]) > 0)
                                                            @foreach($employee_results[$employee->id] as $result)
                                                                <div>
                                                                    @if($result->click_link == 1)
                                                                        <span class="inline-flex items-center rounded-md bg-yellow-100 px-1.5 py-0.5 text-xs font-medium text-yellow-700">clicked link</span>
                                                                    @endif

                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <p>No results found</p>
                                                        @endif
                                                    </td>
                                                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                        <!-- Display results related to this employee -->
                                                        @if(isset($employee_results[$employee->id]) && count($employee_results[$employee->id]) > 0)
                                                            @foreach($employee_results[$employee->id] as $result)
                                                                <div>
                                                                    @if($result->submit_creds == 1)
                                                                        <span class="inline-flex items-center rounded-md bg-red-100 px-1.5 py-0.5 text-xs font-medium text-red-700">submitted data</span>
                                                                    @endif

                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <p>No results found</p>
                                                        @endif
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

                    <!-- Register organization Form -->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
