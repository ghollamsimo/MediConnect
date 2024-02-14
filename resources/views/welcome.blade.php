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
                <div class="swiper-wrapper flex">
                    @foreach($doctors as $doctor)
                        <div class="swiper-slide items-slide rounded-lg bg-white/30 p-[2px] ">
                            <div class="flex items-center gap-3 bg-[#2c2c39] p-5 rounded-lg group">
                                <div class="slide-content">
                                    <span class="font-bold block">{{$doctor->user_name}}</span>
                                    <span class="font-bold">Specialiter :<span class="text-blue-500">{{$doctor->speciality_name}}</span></span>
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


</body>
</html>
