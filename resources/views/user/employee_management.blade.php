<x-user_app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10">
                    <!-- Employee Management Container -->
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-lg font-semibold leading-6 text-gray-900">Employees</h1>
                                <p class="mt-2 text-base text-gray-700">A list of all Employees.</p>
                            </div>
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <a href="{{route('employees.index')}}"
                                   class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Add Employee
                                </a>
                            </div>
                        </div>
                        <div class="mt-8 flow-root">
                            <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle">
                                    <!-- Employee Management Table -->
                                        <table class="min-w-full border-separate border-spacing-0">
                                        <thead>
                                        <tr>
                                            <th scope="col"
                                                class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                                First Name
                                            </th>
                                            <th scope="col"
                                                class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                                Last Name
                                            </th>
                                            <th scope="col"
                                                class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell">
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
                                                Group
                                            </th>
                                            <th scope="col"
                                                class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 text-left pl-3 pr-4 backdrop-blur backdrop-filter sm:pr-6 lg:pr-8">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($employees as $employee)
                                            <tr>
                                                <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                    {{$employee->f_name}}
                                                </td>
                                                <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                    {{$employee->l_name}}
                                                </td>
                                                <td class="hidden whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                    {{$employee->email}}
                                                </td>
                                                <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                    {{$employee->position}}
                                                </td>
                                                <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                    {{$employee->department}}
                                                </td>
                                                <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                    {{$employee->group->name}}
                                                </td>
                                                <td class="relative whitespace-nowrap border-b border-gray-200 py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-8 lg:pr-8">
                                                    <div class="flex space-x-10">
                                                        <div><a href="{{ route('employees.edit', $employee) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a></div>
                                                        <div>
                                                            <form   method="POST" action="{{ route('employees.destroy', $employee) }}">
                                                                @csrf
                                                                @method('delete')
                                                                    <button type="submit"
                                                                            onclick="return confirm('Are you sure you want to delete this employee?');"
                                                                            class="text-red-600 hover:text-red-900">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                    <!-- Employee Management Table -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Employee Management Container -->

                </div>
            </div>
        </div>
    </div>

    <!-- Employee Group -->

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-10">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-lg font-semibold leading-6 text-gray-900">Groups</h1>
                            <p class="mt-2 text-base text-gray-700">Add Employees to groups.</p>
                        </div>

{{--                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">--}}
{{--                            <button type="submit"--}}
{{--                                    class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">--}}
{{--                                    Add Group--}}
{{--                            </button>--}}
{{--                        </div>--}}
                    </div>
                    <!--  -->
                    <div class="mt-8 flow-root">
                        <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <!-- Group Form  -->
                                    <form method="POST" action="{{ route('groups.store') }}">
                                        @csrf
                                        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                            <div class="sm:col-span-4">
                                                <input type="text"
                                                       name="name"
                                                       id="name"
                                                       placeholder="Group name"
                                                       autocomplete="name"
                                                       class="block border-0 focus:ring-2 focus:ring-indigo-600 focus:ring-inset mb-6 placeholder:text-gray-400 py-1.5 ring-1 ring-gray-300 ring-inset rounded-md shadow-sm sm:leading-6 sm:text-sm text-gray-900 w-full">
                                            </div>
                                            <div class="sm:col-span-3">
                                                <button type="submit"
                                                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                    Add Group
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                <!--  -->
                                <table class="min-w-full border-separate border-spacing-0">
                                    <thead>
                                    <tr>
                                        <th scope="col"
                                            class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                            Group
                                        </th>
                                        <th scope="col"
                                            class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                            Employees
                                        </th>
                                        <th scope="col"
                                            class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 text-left pl-3 pr-4 backdrop-blur backdrop-filter sm:pr-6 lg:pr-8">
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
{{--                                    @foreach($employees as $employee)--}}
                                    <tr>
                                        <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                            Group
                                        </td>
                                        <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                            Employees
                                        </td>
                                        <td class="relative whitespace-nowrap border-b border-gray-200 py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-8 lg:pr-8">
                                            <div class="flex space-x-10">
                                                <div><a href="#"
                                                        class="text-indigo-600 hover:text-indigo-900">Edit</a></div>
                                                <div>
                                                    <form method="POST"
                                                          action="#">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                                onclick="return confirm('Are you sure you want to delete this employee?');"
                                                                class="text-red-600 hover:text-red-900">Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
{{--                                    @endforeach--}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
    <!-- -->

</x-user_app-layout>
