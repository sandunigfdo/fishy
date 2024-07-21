<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <h1 class="text-center text-lg font-semibold leading-6 tracking-tight text-gray-900">Add new Customer</h1>
                    </div>

                    <!-- Register organization Form -->
                        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                            <form class="space-y-6" action="{{ route('organizations.store') }}" method="POST">
                                @csrf

                                <div>
                                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                    <div class="mt-2">
                                        <input id="name" name="name" type="text" required
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div>
                                    <label for="o_name" class="block text-sm font-medium leading-6 text-gray-900">Organization</label>
                                    <div class="mt-2">
                                        <input id="o_name" name="o_name" type="text" required
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                                        address</label>
                                    <div class="mt-2">
                                        <input id="email" name="email" type="email" autocomplete="email" required
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between">
                                        <label for="password"
                                               class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                        {{--                                        <div class="text-sm">--}}
                                        {{--                                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                    <div class="mt-2">
                                        <input id="password" name="password" type="password"
                                               autocomplete="current-password" required
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div>
                                <label for="role_id" class="block text-sm font-medium leading-6 text-gray-900">Role</label>
                                <div class="mt-2">
                                    <input id="role_id" name="role_id" type="number"  required
                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>


                                <div>
                                    <button type="submit"
                                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        Register
                                    </button>
                                </div>
                            </form>

                            {{--                            <p class="mt-10 text-center text-sm text-gray-500"> Not a member?--}}
                            {{--                                <a href="#"--}}
                            {{--                                   class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>--}}
                            {{--                            </p>--}}
                        </div>
                    <!-- Register organization Form -->


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
