<x-app-layout>
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-lg font-semibold leading-6 text-gray-900">Ongoing Campaigns</h1>
                            </div>

                        </div>
                        <div class="mt-8 flow-root">
                            <div class="px-4 sm:px-6 lg:px-8 -mx-4 -my-2 sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle">
                                    <!-- Ongoing Campaign Info -->
{{--                                    @foreach($ongoing_campaigns as $campaign)--}}
{{--                                        <p class="text-sm">--}}
{{--                                            Campaign : {{$campaign->name}}--}}
{{--                                        </p>--}}

{{--                                        <p class="text-sm">--}}
{{--                                           Link Clicks : {{$click_link_count[$campaign->id]}}--}}
{{--                                        </p>--}}
{{--                                        <p class="text-sm">--}}
{{--                                           Submit Data : {{$submit_data_count[$campaign->id]}}--}}
{{--                                        </p>--}}
{{--                                    @endforeach--}}

                                    <!-- Stats -->
                                    <div>

                                        @foreach($ongoing_campaigns as $campaign)
                                            <div class="flex justify-between">
                                                <p class="text-base leading-6 text-gray-900">
                                                    {{ $campaign->name }}
                                                </p>
                                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                                    <a href="{{ route('analytics.index', $campaign->id) }}"
                                                       class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                        View Results
                                                    </a>
                                                </div>
                                            </div>
                                                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                                                    <div
                                                        class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                                                        <dt>
                                                            <div class="absolute rounded-md bg-yellow-500 p-3">
                                                                <svg class="h-6 w-6 text-white" fill="none"
                                                                     viewBox="0 0 24 24" stroke-width="1.5"
                                                                     stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59"/>
                                                                </svg>
                                                            </div>
                                                            <p class="ml-16 truncate text-sm font-medium text-gray-500">
                                                                Link Clicks
                                                            </p>
                                                        </dt>
                                                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                                                            <p class="text-2xl font-semibold text-gray-900">
                                                                {{ $click_link_count[$campaign->id] }}
                                                            </p>
                                                        </dd>
                                                    </div>
                                                    <div
                                                        class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                                                        <dt>
                                                            <div class="absolute rounded-md bg-red-400 p-3">
                                                                <svg class="h-6 w-6 text-white" fill="none"
                                                                     viewBox="0 0 24 24" stroke-width="1.5"
                                                                     stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                                                                </svg>
                                                            </div>
                                                            <p class="ml-16 truncate text-sm font-medium text-gray-500">
                                                                Submitted Data
                                                            </p>
                                                        </dt>
                                                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                                                            <p class="text-2xl font-semibold text-gray-900">
                                                                {{ $submit_data_count[$campaign->id] }}
                                                            </p>
                                                        </dd>

                                                    </div>
                                                    <div
                                                        class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                                                        <dt>
                                                            <div class="absolute rounded-md bg-green-500 p-3">
                                                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                                                     stroke-width="1.5" stroke="currentColor"
                                                                     aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z"/>
                                                                </svg>
                                                            </div>
                                                            <p class="ml-16 truncate text-sm font-medium text-gray-500">
                                                                Emails Sent
                                                            </p>
                                                        </dt>
                                                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                                                            <p class="text-2xl font-semibold text-gray-900">
                                                                {{ $email_sent_count[$campaign->id] }}
                                                            </p>
                                                        </dd>
                                                    </div>
                                                </dl>
                                         @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
