@extends('layouts.app')
@section('title')
  e - Learning About Us
@endsection
@section('content')
  <div class="container mx-auto">
    <div class="flex-col mt-20">
      <h1 class="text-4xl text-gray-800 font-bold text-center mb-7">Help People To Grow</h1>
      <p class="text-center text-lg text-gray-700 leading-relaxed mb-16">eLearning is a web course that <br> help people to learn anything of high quality <br> at a more affordable cost</p>
    </div>

    <div class="flex-col mb-40">
      <img src="{{ asset('images/banner-3.jpg') }}" class="mx-auto mt-28 mb-20" style="max-height: 500px;">
      <div class="flex justify-around items-center mx-auto px-40">
        <div class="flex-col">
          <h1 class="mb-3 font-semibold text-purple-600 text-3xl text-center">666</h1>
          <p class="text-xl text-gray-700">Joined Member</p>
        </div>
        <div class="flex-col -mx-96">
          <h1 class="mb-3 font-semibold text-purple-600 text-3xl text-center">666</h1>
          <p class="text-xl text-gray-700">Total Mentor</p>
        </div>
        <div class="flex-col">
          <h1 class="mb-3 font-semibold text-purple-600 text-3xl text-center">666</h1>
          <p class="text-xl text-gray-700">Total Course</p>
        </div>
      </div>
    </div>

    <div class="flex flex-row-reverse justify-around gap-8 mt-20 items-center mb-32">
      <div class="flex-col">
        <p class="text-purple-600 text-lg font-semibold mb-2">Start Learning Today</p>
        <h1 class="text-4xl font-bold leading-normal mb-3 text-gray-700" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200">Presenting Educational <br> Content By Experienced Mentors</h1>
        <p class="text-gray-400 text-xl leading-relaxed mb-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="100">We believe that skills and experiences are <br> the main key to success in building a career <br> especially in certain fields</p>
        <a href="{{ url('classes') }}">
          <span class="bg-purple-600 rounded-full hover:bg-purple-600 text-white font-bold px-8 py-3 transition-all cursor-pointer">Learn Today</span>
        </a>
      </div>
        <img src="{{ asset('https://buildwithangga.com/themes/front/images/mission_buildwithangga.png')}}" class="hidden md:block" data-aos="fade-left" data-aos-duration="2000" style="max-height: 500px"  >
    </div>

    <div class="flex justify-around gap-8 mt-20 items-center mb-32">
      <div class="flex-col">
        <p class="text-purple-600 text-lg font-semibold mb-2">Build The Future</p>
        <h1 class="text-4xl font-bold leading-normal mb-3 text-gray-700" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200">Building a Portfolio <br> For Work Supplies</h1>
        <p class="text-gray-400 text-xl leading-relaxed mb-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="100">A career in technology such as App Development, <br> User-Interface Designer, and more then us <br> need real work </p>
        <a href="{{ url('classes') }}">
          <span class="bg-purple-600 rounded-full hover:bg-purple-600 text-white font-bold px-8 py-3 transition-all cursor-pointer">Learn Today</span>
        </a>
      </div>
        <img src="{{ asset('https://buildwithangga.com/themes/front/images/portfolio_buildwithangga.png')}}" class="hidden md:block" data-aos="fade-left" data-aos-duration="2000" style="max-height: 500px"  >
    </div>
    
  </div>
@endsection