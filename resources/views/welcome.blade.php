<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="css/swiper.css">


    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<x-head></x-head>
<body class=" bg-[#141420]" >
<x-navbar></x-navbar>
        <x-hero></x-hero>

<section>
    <div class="container text-white mx-auto px-5">
        <div class="border-b border-white/10 pb-4 flex items-center justify-between pt-5">
            <h2 class="font-bold text-3xl">All Medcin</h2>
            <div class="slide-buttons gap-3 hidden min-[400px]:flex">
                <div
                    class="swiper-button-prev after:text-[20px] after:content-['prev'] px-4 static p-3 rounded-md border border-white/10 bg-[#20202b] transition-all hover:bg-indigo-600 hover:border-indigo-600 text-white">
                </div>
                <div
                    class="rotate-180 swiper-button-next after:text-[20px] after:content-['prev'] px-4 static p-3 rounded-md border border-white/10 bg-[#20202b] transition-all hover:bg-indigo-600 hover:border-indigo-600 text-white">
                </div>
            </div>
        </div>

        <div class="swiper-container relative mt-10">
            <div class="swiper">
                <div class="swiper-wrapper gap-4 flex">
                    @foreach($doctors as $doctor)
                        <div class="swiper-slide w-fit  items-slide rounded-lg bg-white/30 p-[2px] ">
                            <div class="flex items-center gap-3 bg-[#2c2c39] p-5 rounded-lg group">
                                <div class="slide-content">
                                    <span class="font-bold block">Medcin: <a href="{{route('doctorprofile')}}">{{$doctor->user_name}}</a></span>
                                    <span class="font-bold">Specialiter: <span class="text-blue-400">{{$doctor->speciality_name}}</span></span>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="swiper-pagination static mt-4"></div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container text-white mx-auto px-5">
        <div class=" pb-4 pt-5">
            <h1 class="font-bold text-3xl font-serif">Book An Appointment</h1>
            <span class="text-gray-300 w-4 text-md">Please feel welcome to contact our friendly reception staff with any general or medical enquiry. <span class="text-white last:w-fit">Our doctors will receive or return any urgent calls.</span>
                </span>
        </div>
        <div style="box-shadow: 10px 35px 50px rgb(114,114,114);" class="flex rounded-lg py-8 px-8">
            <form class="mx-auto gap-10 w-full" method="GET" action="{{ route('creer') }}">
                @csrf
                <div class="mb-5 gap-8 lg:flex-row md:flex sm:flex-col">
                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" class="bg-transparent border border-gray-300 placeholder-lime-50 text-black text-sm block w-full p-2.5" required>


                    <input type="text" name="name" placeholder="Your Name" class="bg-transparent text-white border border-gray-400 rounded-lg placeholder-lime-50 text-sm block w-full p-2.5" required>

                    <input type="text" name="email" placeholder="Your Email" class="bg-transparent border border-gray-400 rounded-lg placeholder-lime-50 text-white text-sm block w-full p-2.5" required>

                    <input type="date" name="date" placeholder="set Date" class="bg-transparent border border-gray-400 rounded-lg placeholder-lime-50 text-white text-sm block w-full p-2.5" required>

                    <select name="speciality_id" class="bg-transparent border border-gray-400 rounded-lg  placeholder-lime-50 text-white text-sm block w-full p-2.5">
                        @foreach($specialities as $speciality)
                            <option value="{{ $speciality->id }}">{{ $speciality->name}}</option>
                        @endforeach
                    </select>

                    <select name="doctor" class="bg-transparent border border-gray-400 rounded-lg  placeholder-lime-50 text-white text-sm block w-full p-2.5">
                        @foreach($doctors as $doctor)
                            <option value="{{$doctor->id}}">{{$doctor->user_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full mb-5">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                    <textarea id="message" rows="4" name="message" class="bg-transparent rounded border-gray-400 rounded-lg placeholder-lime-50 text-white text-sm block w-full p-2.5" placeholder="Write your thoughts here..."></textarea>
                </div>
                <button type="submit" class="py-3 px-4 w-full text-center text-white border-2 border-indigo-600 bg-indigo-600 rounded-md inline-block font-bold text-[15px] transition-all hover:bg-indigo-700 hover:border-indigo-700">Book Appointment Now</button>
            </form>
        </div>
    </div>
</section>


</body>
</html>
