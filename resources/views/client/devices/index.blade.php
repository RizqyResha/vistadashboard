@extends('client.layout.master')
@section('content')
    <div class="-mx-3">
        <div class="flex-none px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="py-6 px-3 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent grid grid-cols-2">
                    <div>
                        <h6 class="dark:text-white font-bold text-gray-600 text-2xl mb-5">Your Devices</h6>
                    </div>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <div class="">
                            <div class="border-b border-gray-200 dark:border-gray-700">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                                    <li class="mr-2">
                                        <a href="#" class="inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group" aria-current="page">
                                            All Devices
                                        </a>
                                    </li>
                                    <li class="mr-2">
                                        <a href="#" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                            Active
                                        </a>
                                    </li>
                                    <li class="mr-2">
                                        <a href="#" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                            Deactive
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex justify-end p-5">
                                <div class="flex items-center md:ml-auto md:pr-4">
                                    <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                                        <span class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                            <i class="fas fa-search"></i>
                                        </span>
                                        <input type="text" class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
                                    </div>
                                </div>
                                <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" class="text-white bg-gray-400 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Select Category <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>

                                <!-- Dropdown menu -->
                                <div id="multi-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lampu</a>
                                        </li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kipas</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Meter</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="grid grid-cols-4">
                                <div class="bg-white border border-gray-200 rounded-lg mx-2 mt-5">
                                    <div class="flex flex-col items-center pb-10">
                                        <div class="text-5xl p-3"><i class="fas fa-lightbulb"></i></div>
                                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Lampu Lounge Room A</h5>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">Lampu</span>
                                        <div class="flex items-center mt-5">
                                            <label class="relative cursor-pointer">
                                                <input type="checkbox" class="sr-only peer" />
                                                <div class="w-[53px] h-7 flex items-center bg-gray-300 rounded-full text-[9px] peer-checked:text-[#007bff] text-gray-300 font-extrabold after:flex after:items-center after:justify-center peer after:content-['Off'] peer-checked:after:content-['On'] peer-checked:after:translate-x-full after:absolute after:left-[2px] peer-checked:after:border-white after:bg-white after:border after:border-gray-300 after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-[#007bff]">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white border border-gray-200 rounded-lg mx-2 mt-5">
                                    <div class="flex flex-col items-center pb-10">
                                        <div class="text-5xl p-3"><i class="fas fa-lightbulb"></i></div>
                                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Lampu Guest Room A</h5>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">Lampu</span>
                                        <div class="flex items-center mt-5">
                                            <label class="relative cursor-pointer">
                                                <input type="checkbox" class="sr-only peer" />
                                                <div class="w-[53px] h-7 flex items-center bg-gray-300 rounded-full text-[9px] peer-checked:text-[#007bff] text-gray-300 font-extrabold after:flex after:items-center after:justify-center peer after:content-['Off'] peer-checked:after:content-['On'] peer-checked:after:translate-x-full after:absolute after:left-[2px] peer-checked:after:border-white after:bg-white after:border after:border-gray-300 after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-[#007bff]">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white border border-gray-200 rounded-lg mx-2 mt-5">
                                    <div class="flex flex-col items-center pb-10">
                                        <div class="text-5xl p-3"><i class="fa-solid fa-temperature-low"></i></div>
                                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Termometer</h5>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">Meter</span>
                                        <div class="mt-3 font-medium text-4xl">24°</div>
                                    </div>
                                </div>
                                <div class="bg-white border border-gray-200 rounded-lg mx-2 mt-5">
                                    <div class="flex flex-col items-center pb-10">
                                        <div class="text-5xl p-3"><i class="fa-solid fa-droplet"></i></div>
                                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Humidity Meter</h5>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">Meter</span>
                                        <div class="mt-3 font-medium text-4xl">68%</div>
                                    </div>
                                </div>
                                <div class="bg-white border border-gray-200 rounded-lg mx-2 mt-5">
                                    <div class="flex flex-col items-center pb-10">
                                        <div class="text-5xl p-3"><i class="fa-solid fa-fan"></i></div>
                                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Kipas Angin Kamar A</h5>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">Kipas</span>
                                        <!-- component -->
                                        <div class="grid  grid-cols-4 gap-2 rounded-xl bg-gray-200 p-2 mt-5">
                                            <div>
                                                <input type="radio" name="option" id="off" value="0" class="peer hidden" />
                                                <label for="off" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">OFF</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="option" id="1" value="1" class="peer hidden" checked />
                                                <label for="1" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">1</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="option" id="2" value="2" class="peer hidden" />
                                                <label for="2" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">2</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="option" id="3" value="3" class="peer hidden" />
                                                <label for="3" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">3</label>
                                            </div>
                                        </div>
                                        <span class="text-sm text-gray-500 dark:text-gray-400 mt-5">Mode Putar</span>
                                        <div class="flex items-center ">
                                            <label class="relative cursor-pointer">
                                                <input type="checkbox" class="sr-only peer" />
                                                <div class="w-[53px] h-7 flex items-center bg-gray-300 rounded-full text-[9px] peer-checked:text-[#007bff] text-gray-300 font-extrabold after:flex after:items-center after:justify-center peer after:content-['Off'] peer-checked:after:content-['On'] peer-checked:after:translate-x-full after:absolute after:left-[2px] peer-checked:after:border-white after:bg-white after:border after:border-gray-300 after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-[#007bff]">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white border border-gray-200 rounded-lg mx-2 mt-5">
                                    <div class="flex flex-col items-center pb-10">
                                        <div class="text-5xl p-3"><i class="fas fa-lightbulb"></i></div>
                                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Lampu Kitchen B</h5>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">Lampu</span>
                                        <div class="flex items-center mt-5">
                                            <label class="relative cursor-pointer">
                                                <input type="checkbox" class="sr-only peer" />
                                                <div class="w-[53px] h-7 flex items-center bg-gray-300 rounded-full text-[9px] peer-checked:text-[#007bff] text-gray-300 font-extrabold after:flex after:items-center after:justify-center peer after:content-['Off'] peer-checked:after:content-['On'] peer-checked:after:translate-x-full after:absolute after:left-[2px] peer-checked:after:border-white after:bg-white after:border after:border-gray-300 after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-[#007bff]">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
