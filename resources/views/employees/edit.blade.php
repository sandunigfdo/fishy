<x-user_app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <h1 class="text-center text-lg font-semibold leading-6 tracking-tight text-gray-900">Edit Employee Details</h1>
                    </div>

                    <!-- Register organization Form -->
                        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                            <form method="POST" action="{{ route('employees.update', $employee) }}">
                                @csrf
                                @method('patch')
                                <div class="space-y-12">
                                    <div class="border-b border-gray-900/10 pb-12">
                                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                            <!-- First Name -->
                                            <div class="sm:col-span-3">
                                                <label  for="f_name"
                                                        class="block text-sm font-medium leading-6 text-gray-900">
                                                        First name</label>
                                                <div class="mt-2">
                                                    <input type="text"
                                                           name="f_name"
                                                           id="f_name"
                                                           value="{{ old('f_name', $employee->f_name) }}"
                                                           autocomplete="given_name"
                                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                </div>
                                            </div>

                                            <!-- Last Name -->
                                            <div class="sm:col-span-3">
                                                <label  for="l_name"
                                                        class="block text-sm font-medium leading-6 text-gray-900">
                                                        Last name</label>
                                                <div class="mt-2">
                                                    <input type="text"
                                                           name="l_name"
                                                           id="l_name"
                                                           value="{{ old('l_name', $employee->l_name) }}"
                                                           autocomplete="family_name"
                                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                </div>
                                            </div>

                                            <!-- Email -->
                                            <div class="sm:col-span-4">
                                                <label  for="email"
                                                        class="block text-sm font-medium leading-6 text-gray-900">
                                                        Email address</label>
                                                <div class="mt-2">
                                                    <input id="email"
                                                           name="email"
                                                           type="email"
                                                           value="{{ old('email', $employee->email) }}"
                                                           autocomplete="email"
                                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                </div>
                                            </div>

                                            <!-- Position -->
                                            <div class="sm:col-span-4">
                                                <label  for="position"
                                                        class="block text-sm font-medium leading-6 text-gray-900">
                                                        Position</label>
                                                <div class="mt-2">
                                                    <input id="position"
                                                           name="position"
                                                           type="text"
                                                           value="{{ old('position', $employee->position ) }}"
                                                           autocomplete="position"
                                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                </div>
                                            </div>

                                            <!-- Department -->
                                            <div class="sm:col-span-4">
                                                <label  for="department"
                                                        class="block text-sm font-medium leading-6 text-gray-900">
                                                        Department</label>
                                                <div class="mt-2">
                                                    <input id="department"
                                                           name="department"
                                                           type="text"
                                                           value="{{ old('department', $employee->department) }}"
                                                           autocomplete="department"
                                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                    <a href="{{ route('userdashboard') }}"
                                            class="text-sm font-semibold leading-6 text-gray-900">
                                            Cancel
                                    </a>
                                    <button type="submit"
                                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                            Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    <!-- Register organization Form -->
                </div>
            </div>
        </div>
    </div>
</x-user_app-layout>
