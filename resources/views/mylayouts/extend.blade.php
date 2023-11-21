<x-app-layout>
    <!-- component -->
    <div class="min-h-screen  flex flex-col relative    antialiased bg-gray-50 text-gray-800">
        <div class=" min-h-screen   flex flex-col top-0 left-0  w-56 bg-white h-full border-r">

            <div class="overflow-y-auto overflow-x-hidden ">
                <ul class="flex flex-col py-4  space-y-1">
                    <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="relative flex flex-row  items-center  hover:translate-x-2 transition-transform ease-in duration-200  h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </span>
                            @if (request()->segment(1) === 'dashboard')
                                <span
                                    class="ml-2  font-bold text-blue-700  text-md tracking-wide truncate">Dashboard</span>
                            @else
                                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="relative flex flex-row hover:translate-x-2 transition-transform ease-in duration-200  items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Patients</span>


                        </a>

                    </li>
                    <li>
                        <a href="#"
                            class="relative flex flex-row hover:translate-x-2 transition-transform ease-in duration-200  items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Reception</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('test.index') }}"
                            class="relative flex flex-row hover:translate-x-2 transition-transform ease-in duration-200  items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Laboratory</span>

                        </a>
                    </li>
                    <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-500">pots</div>
                        </div>
                    </li>

                    <li>
                        <a href="{{ route('test.create') }}" wire:navigate
                            class="relative flex flex-row hover:translate-x-2 transition-transform ease-in duration-200  items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
 

                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M15 9.783V4h1V2H8v2h1v5.783l-4.268 9.389a1.992 1.992 0 0 0 .14 1.911A1.99 1.99 0 0 0 6.553 22h10.895a1.99 1.99 0 0 0 1.681-.917c.37-.574.423-1.289.14-1.911L15 9.783zm-4.09.631c.06-.13.09-.271.09-.414V4h2v6c0 .143.03.284.09.414L15.177 15H8.825l2.085-4.586z"></path></svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate"> Tests</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{ route('testField.index') }}" wire:navigate
                            class="relative flex flex-row hover:translate-x-2 transition-transform ease-in duration-200  items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">


                                <svg height="25px" width="25px" version="1.1" id="_x32_"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512" xml:space="preserve">
                                    <style type="text/css">
                                        .st0 {
                                            fill: #000000;
                                        }
                                    </style>
                                    <g>
                                        <path class="st0" d="M424.712,0c-13.927-0.017-25.211,11.233-25.228,25.16c-0.016,13.91,11.25,25.193,25.16,25.21
                        c13.91,0.017,25.203-11.25,25.219-25.169C449.872,11.292,438.622,0.009,424.712,0z" />
                                        <path class="st0" d="M429.087,120.032c0.008-8.193-6.614-14.823-14.789-14.832c-8.192-0.008-14.83,6.622-14.839,14.806
                        c0,8.183,6.63,14.822,14.806,14.822C422.457,134.846,429.087,128.208,429.087,120.032z" />
                                        <path class="st0" d="M461.241,65.304c-9.781-0.026-17.736,7.888-17.736,17.668c-0.018,9.797,7.913,17.711,17.702,17.736
                        c9.764,0,17.719-7.906,17.719-17.694C478.942,73.242,471.02,65.304,461.241,65.304z" />
                                        <path class="st0" d="M78.238,395.333c-19.712,19.713-19.712,51.782,0,71.494c19.713,19.713,51.79,19.713,71.503,0l146.434-146.434
                        H153.186L78.238,395.333z" />
                                        <path class="st0" d="M332.374,121.181c-11.934-11.943-31.36-11.943-43.294,0c-7.72,7.72-10.439,18.564-8.175,28.496l-1.96,1.968
                        L56.752,373.839c-31.57,31.562-31.57,82.921,0,114.483c31.554,31.571,82.922,31.571,114.476,0l222.201-222.193l1.96-1.96
                        c9.932,2.264,20.785-0.456,28.505-8.175c11.934-11.943,11.943-31.36,0-43.294L332.374,121.181z M381.832,257.159l-57.474,57.482
                        L160.957,478.043c-25.946,25.937-67.99,25.937-93.935,0c-25.928-25.937-25.928-67.989,0-93.927l162.599-162.598l58.293-58.277
                        l2.787-2.804c0.388,0.422,0.778,0.828,1.182,1.232l91.52,91.52c0.397,0.405,0.81,0.794,1.225,1.182L381.832,257.159z
                        M413.606,245.715c-4.333,4.333-10.524,5.667-16.014,4.021l-4.164-4.164l-93.926-93.926l-4.164-4.164
                        c-1.656-5.49-0.312-11.689,4.02-16.022c6.276-6.275,16.461-6.275,22.736,0l91.511,91.51
                        C419.889,229.254,419.889,239.432,413.606,245.715z" />
                                    </g>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Test Fields</span>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- Your code goes here --}}

    </div>
    <div class="w-[85vw]">
        @yield('body')
    </div>

</x-app-layout>
