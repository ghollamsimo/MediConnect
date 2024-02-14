<x-head></x-head>
<x-app-layout>

    <div class="py-12 ">
        <!-- cards -->
        <div class="w-full px-6 overflow-x-hidden py-6 mx-auto">
            <!-- row 1 -->
            <div class="flex flex-wrap -mx-3">
                <!-- card1 -->
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p class="mb-0 text-sm font-extrabold font-serif leading-normal">Total Client</p>
                                        <h5 class="mb-0 font-bold">
                                            {{$patientcount}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                        <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card2 -->
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p class="mb-0 font-sans text-sm font-semibold leading-normal">Total Medicaments</p>
                                        <h5 class="mb-0 font-bold">
                                            {{$medicamentcount}}

                                        </h5>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                        <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card3 -->
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p class="mb-0 font-sans text-sm font-semibold leading-normal">Total Doctors</p>
                                        <h5 class="mb-0 font-bold">
                                            {{$doctorcount}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                        <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card4 -->
                <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p class="mb-0 font-sans text-sm font-semibold leading-normal">Total Specialities</p>
                                        <h5 class="mb-0 font-bold">
                                            {{ $specialitiesCount }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                        <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- cards row 2 -->
            <div class="flex flex-wrap mt-6 -mx-3">
                <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap -mx-3">
                                <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                                    <div class="flex flex-col h-full">
                                        <p class="pt-2 mb-1 font-semibold">Built by developers</p>
                                        <h5 class="font-bold">Soft UI Dashboard</h5>
                                        <p class="mb-12">From colors, cards, typography to complex elements, you will find the full documentation.</p>
                                        <a class="mt-auto mb-0 text-sm font-semibold leading-normal group text-slate-500" href="javascript:;">
                                            Read More
                                            <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                                    <div class="h-full  rounded-xl">
                                        <div class="relative flex items-center rounded-xl justify-center h-full">
                                            <img class="relative z-20 rounded-xl w-full pt-6" src="img/health.jpg" alt="rocket" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
                    <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                        <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('img/medic.jpg')">
                            <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-600 to-slate-400 opacity-80"></span>
                            <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                                <h5 class="pt-2 mb-6 font-bold text-white">Work with the rockets</h5>
                                <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. It is all about who take the opportunity first.</p>
                                <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="javascript:;">
                                    Read More
                                    <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- cards row 3 -->


            <!-- cards row 4 -->

            <div class="flex flex-wrap my-6 -mx-3">
                <!-- card 1 -->

                <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
                    <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                            <div class="flex flex-wrap mt-0 -mx-3">
                                <div class="flex justify-between w-7/12 font-bold font-black font-mono max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                                    <h6>All Medicament</h6>

                                </div>
                                <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                                    <a href="/Medicament"><i class='bx bx-plus flex justify-end'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="flex-auto p-6 px-0 pb-2">
                            <div class="overflow-x-auto">
                                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                    <thead class="align-bottom">
                                    <tr>
                                        <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Nom</th>
                                        <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Price</th>
                                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Arcived</th>
                                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($medicament as $medic)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/small-logos/logo-xd.svg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="xd" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">{{$medic->name}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            {{$medic->price}}
                                        </td>
                                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                          {{$medic->archive}}
                                        </td>
                                        <td class="p-2 justify-center align-middle bg-transparent border-b whitespace-nowrap flex mx-auto">
                                            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-xs font-medium text-center text-gray-900 bg-white rounded-lg " type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                                    <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                                </svg>
                                            </button>

                                            <!-- Dropdown menu -->
                                            <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                                                <ul class="py-2 text-sm text-black dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                                    <li>
                                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-black">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-black">Archive</a>
                                                    </li>
                                                </ul>
                                                <div class="py-2">
                                                    <a href="#" class="block px-4 py-2 text-sm  hover:bg-gray-100 text-black">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 2 -->

                <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
                    <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                            <h6>Orders overview</h6>
                            <p class="text-sm leading-normal">
                                <i class="fa fa-arrow-up text-lime-500"></i>
                                <span class="font-semibold">24%</span> this month
                            </p>
                        </div>
                        <div class="flex-auto p-4">
                            <div class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                                <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                      <i class="relative z-10 leading-none text-transparent ni ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                    </span>
                                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                        <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">$2400, Design changes</h6>
                                        <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">22 DEC 7:20 PM</p>
                                    </div>
                                </div>
                                <div class="relative mb-4 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                      <i class="relative z-10 leading-none text-transparent ni ni-html5 leading-pro bg-gradient-to-tl from-red-600 to-rose-400 bg-clip-text fill-transparent"></i>
                    </span>
                                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                        <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">New order #1832412</h6>
                                        <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">21 DEC 11 PM</p>
                                    </div>
                                </div>
                                <div class="relative mb-4 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                      <i class="relative z-10 leading-none text-transparent ni ni-cart leading-pro bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text fill-transparent"></i>
                    </span>
                                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                        <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Server payments for April</h6>
                                        <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">21 DEC 9:34 PM</p>
                                    </div>
                                </div>
                                <div class="relative mb-4 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                      <i class="relative z-10 leading-none text-transparent ni ni-credit-card leading-pro bg-gradient-to-tl from-red-500 to-yellow-400 bg-clip-text fill-transparent"></i>
                    </span>
                                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                        <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">New card added for order #4395133</h6>
                                        <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">20 DEC 2:20 AM</p>
                                    </div>
                                </div>
                                <div class="relative mb-4 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                      <i class="relative z-10 leading-none text-transparent ni ni-key-25 leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 bg-clip-text fill-transparent"></i>
                    </span>
                                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                        <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Unlock packages for development</h6>
                                        <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">18 DEC 4:54 AM</p>
                                    </div>
                                </div>
                                <div class="relative mb-0 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                      <i class="relative z-10 leading-none text-transparent ni ni-money-coins leading-pro bg-gradient-to-tl from-gray-900 to-slate-800 bg-clip-text fill-transparent"></i>
                    </span>
                                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                        <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">New order #9583120</h6>
                                        <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">17 DEC</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="pt-4">
                <div class="w-full px-6 mx-auto">
                    <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                            <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                                ©
                                <script>
                                    document.write(new Date().getFullYear() + ",");
                                </script>
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                            <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end cards -->
    </div>
</x-app-layout>
