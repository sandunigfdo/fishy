<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <h1 class="text-center text-lg font-semibold leading-6 tracking-tight text-gray-900">Add new User</h1>
                    </div>

                    <!-- Register organization Form -->
                        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                            <form action="{{ route('users.store') }}" method="POST">
                                @csrf
                                <!-- Name -->
                                <div class="space-y-12">
                                    <div class="border-b border-gray-900/10 pb-12">
                                        <div class="gap-x-6 gap-y-8">
                                            <div class="pb-6">
                                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                                <div class="mt-2">
                                                    <input id="name" name="name" type="text" required
                                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                </div>
                                            </div>
                                            <!-- Name -->
                                            <!-- Organization -->
            {{--                                <div>--}}
            {{--                                    <label for="organization" class="block text-sm font-medium leading-6 text-gray-900">Organization</label>--}}
            {{--                                    <div class="mt-2">--}}
            {{--                                        <input id="organization" name="organization" type="text" required--}}
            {{--                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
                                            <!-- Organization -->
                                            <!-- Email -->
                                            <div class="pb-6">
                                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                                                    address</label>
                                                <div class="mt-2">
                                                    <input id="email" name="email" type="email" autocomplete="email" required
                                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                </div>
                                            </div>
                                            <!-- Email -->
                                            <!-- Password -->
                                            <div>
                                                <div class="flex items-center justify-between">
                                                    <label for="password"
                                                           class="block text-sm font-medium leading-6 text-gray-900">
                                                           Password
                                                    </label>

                                                </div>
                                                <div class="mt-2">
                                                    <input id="password" name="password" type="password"
                                                           autocomplete="current-password" required
                                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                </div>
                                            </div>
                                            <!-- Password -->
                                            <!-- Role dropdown -->
            {{--                                <div>--}}
            {{--                                    <label for="role_id" class="block text-sm font-medium leading-6 text-gray-900">Role</label>--}}
            {{--                                    <div class="mt-2">--}}
            {{--                                        <select id="role" name="role"--}}
            {{--                                                class="border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-900 dark:border-gray-700 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-indigo-600 dark:focus:border-indigo-600 mt-1">--}}
            {{--                                            <option selected>Select role</option>--}}
            {{--                                            @foreach($roles as $role)--}}
            {{--                                                <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>--}}
            {{--                                            @endforeach--}}
            {{--                                        </select>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
                                            <!-- Role dropdown -->
            {{--                                <div class="pt-4 pb-2">--}}
            {{--                                    <button type="submit"--}}
            {{--                                            class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">--}}
            {{--                                        Save--}}
            {{--                                    </button>--}}
            {{--                                </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                    <a  href="{{ route('users.index') }}"
                                        class="text-sm font-semibold leading-6 text-gray-900">
                                        Cancel
                                    </a>
                                    <button type="submit"
                                            class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
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
</x-app-layout>
