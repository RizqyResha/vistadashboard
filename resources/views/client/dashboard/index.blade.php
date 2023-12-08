@extends('client.layout.master')
@section('content')
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Your Balance</p>
                                <h5 class="mb-2 font-bold dark:text-white">Rp.50.000</h5>
                                <p class="mb-0 dark:text-white dark:opacity-60">
                                    <a href="#"class="text-sm font-bold leading-normal text-blue-300">Top Up Now!</a>
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Vista Status</p>
                                <h5 class="mb-2.5 mt-2.5 text-3xl font-bold text-green-500 dark:text-white">ACTIVE</h5>
                                {{-- <p class="mb-0 dark:text-white dark:opacity-60">
                                    <span class="text-sm font-bold leading-normal text-emerald-500">&nbsp</span>
                                    &nbsp
                                </p> --}}
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                <i class="fas fa-robot text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">THIS WEEK USAGE</p>
                                <h5 class="mb-2 font-bold dark:text-white">3,462 WORDS</h5>
                                <p class="mb-0 dark:text-white dark:opacity-60">
                                    <span class="text-sm font-bold leading-normal text-red-600">-2%</span>
                                    since last quarter
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                <i class="fas fa-comments text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Total Active Devices</p>
                                <h5 class="mb-2.5 mt-2.5 text-3xl font-bold dark:text-white">12</h5>
                                {{-- <p class="mb-0 dark:text-white dark:opacity-60">
                                    <span class="text-sm font-bold leading-normal text-emerald-500">&nbsp</span>
                                    &nbsp
                                </p> --}}
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                                <i class="fas fa-lightbulb text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cards row 2 -->
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
            <div class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                    <h6 class="capitalize dark:text-white">Usage Overview</h6>
                    <p class="mb-0 text-sm leading-normal dark:text-white dark:opacity-60">
                        <i class="fa fa-arrow-up text-emerald-500"></i>
                        <span class="font-semibold">4% more</span> in 2022
                    </p>
                </div>
                <div class="flex-auto p-4">
                    <div>
                        <canvas id="chart-line2" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
            <div class="flex flex-col bg-white rounded p-4 w-full ">
                <div class="font-bold text-xl">Yogyakarta</div>
                <div class="text-sm text-gray-500"> {{ \Carbon\Carbon::now()->toFormattedDateString() }}</div>
                <div class="mt-6 text-6xl self-center inline-flex items-center justify-center rounded-lg text-indigo-400 h-24 w-24">
                    <svg class="w-32 h-32" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                    </svg>
                </div>
                <div class="flex flex-row items-center justify-center mt-6">
                    <div class="font-medium text-6xl">24°</div>
                    <div class="flex flex-col items-center ml-6">
                        <div>Cloudy</div>
                        <div class="mt-1">
                            <span class="text-sm"><i class="fas fa-long-arrow-up"></i></span>
                            <span class="text-sm font-light text-gray-500">28°C</span>
                        </div>
                        <div>
                            <span class="text-sm"><i class="fas fa-long-arrow-down"></i></span>
                            <span class="text-sm font-light text-gray-500">20°C</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-between mt-6">
                    <div class="flex flex-col items-center">
                        <div class="font-medium text-sm">Wind</div>
                        <div class="text-sm text-gray-500">9k/h</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="font-medium text-sm">Humidity</div>
                        <div class="text-sm text-gray-500">68%</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="font-medium text-sm">Visibility</div>
                        <div class="text-sm text-gray-500">10km</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- cards row 3 -->

    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 rounded-t-4">
                    <div class="flex justify-between">
                        <h6 class="mb-2 dark:text-white">Activity Log</h6>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40">
                        <tbody>
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                    <div class="flex items-center px-3 py-1">
                                        <div>
                                            <i class="fa-solid fa-lightbulb"></i>
                                        </div>
                                        <div class="ml-6">
                                            <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Device Name:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Lampu Kamar Tengah A</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Time: </p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">13:20 PM</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Status:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Di Nyalakan</h6>
                                    </div>
                                </td>
                                <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="flex-1 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Operator:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Vista</h6>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                    <div class="flex items-center px-3 py-1">
                                        <div>
                                            <i class="fa-solid fa-fan"></i>
                                        </div>
                                        <div class="ml-6">
                                            <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Device Name:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Kipas Angin A</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Time: </p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">14:22 PM</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Status:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Dimatikan</h6>
                                    </div>
                                </td>
                                <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="flex-1 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Operator:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">User</h6>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                    <div class="flex items-center px-3 py-1">
                                        <div>
                                            <i class="fa-solid fa-droplet"></i>
                                        </div>
                                        <div class="ml-6">
                                            <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Device Name:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Pelembab Udara</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Time: </p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">09:22 AM</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Status:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Di Nyalakan</h6>
                                    </div>
                                </td>
                                <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="flex-1 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Operator:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Vista</h6>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                    <div class="flex items-center px-3 py-1">
                                        <div>
                                            <i class="fa-solid fa-lightbulb"></i>
                                        </div>
                                        <div class="ml-6">
                                            <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Device Name:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Lampu Ruang Tamu A</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Time: </p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">15:20 PM</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Status:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Di Nyalakan</h6>
                                    </div>
                                </td>
                                <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="flex-1 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Operator:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Vista</h6>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                    <div class="flex items-center px-3 py-1">
                                        <div>
                                            <i class="fa-solid fa-lightbulb"></i>
                                        </div>
                                        <div class="ml-6">
                                            <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Device Name:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Lampu Kamar Depan B</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Time: </p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">13:20 PM</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Status:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Di Nyalakan</h6>
                                    </div>
                                </td>
                                <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="flex-1 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Operator:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Vista</h6>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 lg:w-5/12 lg:flex-none">
            <div class="border-black/12.5 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="p-4 pb-0 rounded-t-4">
                    <h6 class="mb-0 dark:text-white">Devices</h6>
                </div>
                <div class="flex-auto p-4">
                    <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                        <li class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                            <div class="flex items-center">
                                <div class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                    <i class="text-white fas fa-lightbulb relative top-0.75 text-xxs"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Lampu</h6>
                                    <span class="text-xs leading-tight dark:text-white/80">10 Tersedia, <span class="font-semibold">5 Aktif</span></span>
                                </div>
                            </div>
                            <div class="flex">
                                <button class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button>
                            </div>
                        </li>
                        <li class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                            <div class="flex items-center">
                                <div class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                    <i class="text-white fas fas fa-shirt relative top-0.75 text-xxs"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Pengering Pakaian</h6>
                                    <span class="text-xs leading-tight dark:text-white/80">1 Tersedia, <span class="font-semibold">1 Aktif</span></span>
                                </div>
                            </div>
                            <div class="flex">
                                <button class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button>
                            </div>
                        </li>
                        <li class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                            <div class="flex items-center">
                                <div class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                    <i class="text-white fas fas fa-door-open relative top-0.75 text-xxs"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Pintu Otomatis</h6>
                                    <span class="text-xs leading-tight dark:text-white/80">8 Tersedia, <span class="font-semibold">8 Aktif</span></span>
                                </div>
                            </div>
                            <div class="flex">
                                <button class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button>
                            </div>
                        </li>
                        <li class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                            <div class="flex items-center">
                                <div class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                    <i class="text-white fas fas fa-fan relative top-0.75 text-xxs"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Kipas Angin Otomatis</h6>
                                    <span class="text-xs leading-tight dark:text-white/80">4 Tersedia, <span class="font-semibold">2 Aktif</span></span>
                                </div>
                            </div>
                            <div class="flex">
                                <button class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('page-scripts')
    <!-- plugin for charts  -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script async>
        "use strict";
        var data = [
            1000,
            1200,
            1230,
            1203,
            1111,
            2300,
            2100,
            1900,
            2000,
            1500,
            2000,
            2500,
        ]
        var ctx1 = document.getElementById("chart-line2").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"],
                datasets: [{
                    label: "Statistics",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: data,
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
@endpush
