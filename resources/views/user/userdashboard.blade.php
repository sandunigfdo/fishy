<x-user_app-layout>
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
                                <h1 class="text-lg font-semibold leading-6 text-gray-900">Campaigns</h1>
                                <p class="mt-2 text-base text-gray-700">Ongoing Campaigns.</p>
                            </div>
                        </div>
                        <div class="mt-8 flow-root">
                            <div class="px-4 sm:px-6 lg:px-8 -mx-4 -my-2 sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle">
                                    <!-- Ongoing Campaign Info -->
                                    @foreach($ongoing_campaigns as $campaign)
                                        <p class="text-sm">
                                            Campaign : {{$campaign->name}}
                                        </p>

                                        <p class="text-sm">
                                           Link Clicks : {{$click_link_count[$campaign->id]}}
                                        </p>
                                        <p class="text-sm">
                                           Submit Data : {{$submit_data_count[$campaign->id]}}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-user_app-layout>
