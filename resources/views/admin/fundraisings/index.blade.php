<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Fundraisings') }}
            </h2>
            <a href={{ route('admin.fundraisings.create') }}
                class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">


                @forelse($fundraisings as $fundraising)
                    <table>
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-md leading-normal font-bold">
                                <th class="py-3 px-6 text-left"></th>
                                <th class="py-3 px-6 text-left">Nama</th>
                                <th class="py-3 px-6 text-left">Kategori</th>
                                <th class="py-3 px-6 text-left">Target</th>
                                <th class="py-3 px-6 text-left">Donatur</th>
                                <th class="py-3 px-6 text-left">Fundraiser</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-md font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-1 text-left ">
                                    <div class="flex items-center">
                                        <img src={{ Storage::url($fundraising->thumbnail) }} alt="thumbnail"
                                            class="w-[180px] h-[120px] object-cover rounded-lg">
                                    </div>
                                </td>
                                <td class="p-2 text-left">
                                    {{ $fundraising->name }}
                                </td>
                                <td class="p-2 text-left">
                                    {{ $fundraising->category->name }}
                                </td>
                                <td class="p-2 text-left">
                                    {{ number_format($fundraising->target_amount, 0, ',', '.') }}
                                </td>
                                <td class="p-2 text-left">
                                    {{ $fundraising->donaturs->count() }}
                                </td>
                                <td class="p-2 text-left">
                                    {{ $fundraising->fundraiser->user->name }}
                                </td>
                                <td>
                                    <div class="hidden md:flex flex-row items-center gap-x-3">
                                        <a href="{{ route('admin.fundraisings.show', $fundraising) }}"
                                            class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                            View Details
                                        </a>
                                    </div>
                                </td>

                    </table>
                    {{-- <div class="item-card flex flex-col md:flex-row gap-y-10 justify-between md:items-center">
                        <div class="flex flex-row items-center gap-x-3">
                            <img src={{ Storage::url($fundraising->thumbnail) }} alt=""
                            class="rounded-2xl object-cover w-[120px] h-[90px]">
                            <div class="flex flex-col">
                                <h3 class="text-indigo-950 lg:text-lg md:text-sm sm:text-xs font-bold">
                                    {{ $fundraising->name }}
                                </h3>
                                <p class="text-slate-500 text-sm">{{
                                    $fundraising->category->name }}</p>
                            </div>
                        </div>
                        <div class="hidden md:flex flex-col">
                            <p class="text-slate-500 text-sm">Target Amount</p>
                            <h3 class="text-indigo-950 lg:text-lg md:text-sm sm:text-xs font-bold">
                                Rp
                                {{ number_format($fundraising->target_amount, 0, ',', '.') }}
                            </h3>
                        </div>
                        <div class="hidden md:flex flex-col">
                            <p class="text-slate-500 text-sm">Donaturs</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{
                                $fundraising->donaturs->count() }}</h3>
                        </div>
                        <div class="hidden md:flex flex-col">
                            <p class="text-slate-500 text-sm">Fundraiser</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{
                                $fundraising->fundraiser->user->name }}</h3>
                        </div>
                        <div class="hidden md:flex flex-row items-center gap-x-3">
                            <a href="{{ route('admin.fundraisings.show', $fundraising) }}"
                                class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                View Details
                            </a>
                        </div>
                    </div> --}}
                @empty
                    <p>No fundraising right now</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>