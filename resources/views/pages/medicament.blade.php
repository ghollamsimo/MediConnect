
<x-head></x-head>

<x-app-layout>
    <div class="w-full p-5 px-3 mt-0 mb-6 md:mb-0 md:flex-none lg:flex-none">
        <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                <div class="flex flex-wrap mt-0 justify-between -mx-3">
                    <div class="flex justify-between w-7/12  font-black font-mono max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                        <h6>All Medicament</h6>

                    </div>
                    <div class="w-fit max-w-full flex justify-end">
                        <a  data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="border px-4 py-4 rounded-xl">
                            <i class='bx bx-plus flex justify-end'></i>
                        </a>
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
                            <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Etat</th>
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

                                    <button id="dropdownMenuIconButton-{{$medic->id}}"
                                            value="{{$medic->id}}"
                                            data-dropdown-toggle="dropdownDots{{$medic->id}}" class="inline-flex items-center p-2 text-xs font-medium text-center text-gray-900 bg-white rounded-lg " type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div id="dropdownDots{{$medic->id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                                        <ul class="py-2 text-sm text-black dark:text-gray-200" aria-labelledby="dropdownMenuIconButton-{{$medic->id}}">
                                            <li>
                                                <a data-modal-target="edit-modal{{$medic->id}}" data-modal-toggle="edit-modal{{$medic->id}}"  class="block px-4 py-2 hover:bg-gray-100 text-black">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-black">Archive</a>
                                            </li>
                                        </ul>
                                        <div class="py-2">
                                            <a data-modal-target="popup-modal{{$medic->id}}" data-modal-toggle="popup-modal{{$medic->id}}" class="block px-4 py-2 text-sm  hover:bg-gray-100 text-black">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>




                            <!-- edit modal -->
                            <div id="edit-modal{{$medic->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow ">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 ">
                                                Edite Medicament
                                            </h3>
                                            <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="edit-modal{{$medic->id}}">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5">
                                            <form class="space-y-4" action=" {{route('edit_medicament', ['id' => $medic->id])}}">
                                                @csrf
                                                <div>
                                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">The Name</label>
                                                    <input type="text" name="titre" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Exemple" required>
                                                </div>
                                                <div>
                                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">The Price</label>
                                                    <input type="number" name="prix" id="password" placeholder="9999" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                                                </div>

                                                <div>
                                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">The Etat</label>
                                                    <input type="text" name="etat" id="password" placeholder="9999" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                                                </div>


                                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div id="popup-modal{{$medic->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow ">
                                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="popup-modal{{$medic->id}}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-4 md:p-5 text-center">
                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                                            <form method="post">
                                                <button data-modal-hide="popup-modal" name="delete" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                    Yes, I'm sure
                                                </button>
                                            </form>
                                            <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>






<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    Add New Medicament
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action=" {{route('Medicament')}}">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">The Name</label>
                        <input type="text" name="name" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Exemple" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">The Price</label>
                        <input type="number" name="price" id="password" placeholder="9999" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">The Etat</label>
                        <input type="text" name="archive" id="password" placeholder="9999" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                    </div>


                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>

                </form>
            </div>
        </div>
    </div>
</div>





