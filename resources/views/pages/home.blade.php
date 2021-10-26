@php
    $increment = 100;
@endphp
@extends('layouts.app')
@section('title')
    e - Learning Homepage
@endsection
@section('content')
    <div class="container mx-auto">
      {{-- Landing Page --}}
      <div class="flex justify-around gap-5 mt-20 items-center mb-32">
        <div class="flex-col">
          <h1 class="text-5xl font-bold leading-normal mb-3 text-gray-700" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200">Learn Everything <br> For Your Future Career</h1>
          <p class="text-gray-400 text-2xl leading-relaxed mb-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="100">Learn from experienced mentors in <br> the field and get an official certificate <br> to build a future career</p>
          <a href="{{ url('catalog') }}">
            <span class="bg-purple-600 rounded-full hover:bg-purple-700 text-white font-bold px-8 py-3 transition-all cursor-pointer">Learn Today</span>
          </a>
          <a href="{{ url('register') }}">
            <span class="border border-purple-600 rounded-full hover:bg-purple-600 text-purple-700 hover:text-white font-bold px-8 py-3 transition-all cursor-pointer">Sign Up for Free</span>
          </a>
        </div>
          <img src="{{ asset('/images/banner-1.jpg')}}" class="w-2/4 hidden md:block" data-aos="fade-left" data-aos-duration="2000">
      </div>
      {{-- Category --}}
      <div class="flex-col ml-5 my-7">
        <p class="text-purple-700 text-lg font-semibold mb-2">Start Learning Today</p>
        <h1 class="text-3xl font-bold text-gray-700 leading-snug">Meet Course By <br> Categories We Provide</h1>
      </div>
      <div class="grid grid-cols-12 gap-5 mx-5 mb-20">
        {{-- @foreach ($categories as $category) --}}
          <a href="{{ url('class') }}" class="col-span-3 p-7 text-black bg-gradient-to-br from-purple-800 to-pink-400 rounded-lg text-center hover:bg-gradient-to-br hover:from-purple-900 hover:to-pink-500" data-aos="fade-up" data-aos-delay="{{ $increment += 100 }}" data-aos-duration="1000">
            <div class="bg-gray-200 rounded-full w-24 p-5">
              <img src="/images/category-1.svg">
            </div>
            <div class="flex-col">
              <p class="text-white font-bold text-xl w-max mt-10">Artifical Illuminate Class</p>
              <div class="flex items-center space-x-3">
                <p class="text-gray-200 text-lg w-max">View Class</p>
                <i class='fas fa-angle-right text-xl text-white'></i>
              </div>
            </div>
          </a>
          <a href="{{ url('class') }}" class="col-span-3 p-7 text-black bg-gradient-to-br from-purple-800 to-pink-400 rounded-lg text-center hover:bg-gradient-to-br hover:from-purple-900 hover:to-pink-500" data-aos="fade-up" data-aos-delay="{{ $increment += 100 }}" data-aos-duration="1000">
            <div class="bg-gray-200 rounded-full w-24 p-5">
              <img src="/images/category-1.svg">
            </div>
            <div class="flex-col">
              <p class="text-white font-bold text-xl w-max mt-10">Artifical Illuminate Class</p>
              <div class="flex items-center space-x-3">
                <p class="text-gray-200 text-lg w-max">View Class</p>
                <i class='fas fa-angle-right text-xl text-white'></i>
              </div>
            </div>
          </a>
          <a href="{{ url('class') }}" class="col-span-3 p-7 text-black bg-gradient-to-br from-purple-800 to-pink-400 rounded-lg text-center hover:bg-gradient-to-br hover:from-purple-900 hover:to-pink-500" data-aos="fade-up" data-aos-delay="{{ $increment += 100 }}" data-aos-duration="1000">
            <div class="bg-gray-200 rounded-full w-24 p-5">
              <img src="/images/category-1.svg">
            </div>
            <div class="flex-col">
              <p class="text-white font-bold text-xl w-max mt-10">Artifical Illuminate Class</p>
              <div class="flex items-center space-x-3">
                <p class="text-gray-200 text-lg w-max">View Class</p>
                <i class='fas fa-angle-right text-xl text-white'></i>
              </div>
            </div>
          </a>
          <a href="{{ url('class') }}" class="col-span-3 p-7 text-black bg-gradient-to-br from-purple-800 to-pink-400 rounded-lg text-center hover:bg-gradient-to-br hover:from-purple-900 hover:to-pink-500" data-aos="fade-up" data-aos-delay="{{ $increment += 100 }}" data-aos-duration="1000">
            <div class="bg-gray-200 rounded-full w-24 p-5">
              <img src="/images/category-1.svg">
            </div>
            <div class="flex-col">
              <p class="text-white font-bold text-xl w-max mt-10">Artifical Illuminate Class</p>
              <div class="flex items-center space-x-3">
                <p class="text-gray-200 text-lg w-max">View Class</p>
                <i class='fas fa-angle-right text-xl text-white'></i>
              </div>
            </div>
          </a>
        {{-- @endforeach --}}
      </div>

      {{-- Popular Class --}}
      <div class="flex-col ml-5 mb-7 mt-40">
        <p class="text-purple-700 text-lg font-semibold mb-2">Popular Class</p>
        <h1 class="text-3xl font-bold text-gray-700 leading-snug">Let's Upgrade <br> The Skills We Have</h1>
      </div>
      <div class="grid grid-cols-8 gap-5 mx-5 mb-40">
        {{-- @foreach ($popularClass as $popular) --}}
          <div class="col-span-2 bg-white rounded-md shadow-lg p-7 flex-col">
            <a href="{{ url('detail-class') }}">
              <img src="/images/vue.png" class="shadow rounded-lg">
              <h1 class="font-bold text-xl mt-5 text-gray-700" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Mastering Blender 3D: Design Icon Set</h1>
            </a>
            <p class="text-gray-400 text-lg">$20.0</p>
            <div class="flex items-center justify-between">
              <div class="flex items-center mt-10">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
              </div>
              <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_lv_ez.svg" class="icon-level mt-8">
            </div>
            <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
            <div class="flex justify-between items-center">
              <p class="rounded-full bg-purple-500 hover:bg-purple-700 transition-all text-white px-3 py-2 font-bold">Freemium</p>
              <a href="{{ url('cart') }}" class="font-bold text-purple-500 text-lg hover:text-purple-700">Add to Cart <i class="fas fa-cart-arrow-down"></i></a>
            </div>
          </div>
          <div class="col-span-2 bg-white rounded-md shadow-lg p-7 flex-col">
            <a href="{{ url('detail-class') }}">
              <img src="/images/vue.png" class="shadow rounded-lg">
            </a>
            <h1 class="font-bold text-xl mt-5 text-gray-700" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Mastering Blender 3D: Design Icon Set</h1>
            <p class="text-gray-400 text-lg">$20.0</p>
            <div class="flex items-center justify-between">
              <div class="flex items-center mt-10">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
              </div>
              <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_lv_med.svg" class="icon-level mt-8">
            </div>
            <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
            <div class="flex justify-between items-center">
              <p class="rounded-full bg-purple-500 hover:bg-purple-700 transition-all text-white px-3 py-2 font-bold">Freemium</p>
              <a href="{{ url('cart') }}" class="font-bold text-purple-500 text-lg hover:text-purple-700">Add to Cart <i class="fas fa-cart-arrow-down"></i></a>
            </div>
          </div>
          <div class="col-span-2 bg-white rounded-md shadow-lg p-7 flex-col">
            <a href="{{ url('detail-class') }}">
              <img src="/images/vue.png" class="shadow rounded-lg">
            </a>
            <h1 class="font-bold text-xl mt-5 text-gray-700" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Mastering Blender 3D: Design Icon Set</h1>
            <p class="text-gray-400 text-lg">$20.0</p>
            <div class="flex items-center justify-between">
              <div class="flex items-center mt-10">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
              </div>
              <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_lv_med.svg" class="icon-level mt-8">
            </div>
            <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
            <div class="flex justify-between items-center">
              <p class="rounded-full bg-purple-500 hover:bg-purple-700 transition-all text-white px-3 py-2 font-bold">Freemium</p>
              <a href="{{ url('cart') }}" class="font-bold text-purple-500 text-lg hover:text-purple-700">Enroll Now <i class="fas fa-cart-arrow-down"></i></a>
            </div>
          </div>
          <div class="col-span-2 bg-white rounded-md shadow-lg p-7 flex-col">
            <a href="{{ url('detail-class') }}">
              <img src="/images/vue.png" class="shadow rounded-lg">
            </a>
            <h1 class="font-bold text-xl mt-5 text-gray-700" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Mastering Blender 3D: Design Icon Set</h1>
            <p class="text-gray-400 text-lg">$20.0</p>
            <div class="flex items-center justify-between">
              <div class="flex items-center mt-10">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
              </div>
              <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="" src="https://buildwithangga.com/themes/front/images/ic_lv_hard.svg" class="icon-level mt-8">
            </div>
            <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
            <div class="flex justify-between items-center">
              <p class="rounded-full bg-purple-500 hover:bg-purple-700 transition-all text-white px-3 py-2 font-bold">Freemium</p>
              <a href="{{ url('cart') }}" class="font-bold text-purple-500 text-lg hover:text-purple-700">Add to Cart <i class="fas fa-cart-arrow-down"></i></a>
            </div>
          </div>
        {{-- @endforeach --}}
      </div>
      
      {{-- Second Page --}}
      <div class="flex-col text-center mb-7 mt-40">
        <p class="text-purple-700 text-lg font-semibold mb-2">Boost Productivity</p>
        <h1 class="text-3xl font-bold text-gray-700 leading-snug">More Learning Method <br> Relaxing and Purposeful</h1>
      </div>
      <div class="flex-col mb-40">
        <img src="/images/banner-4.jpg" class="mx-auto mt-28 mb-20" style="max-height: 500px;">
        <div class="flex justify-around items-center mx-auto px-40">
          <div class="flex-col">
            <h1 class="mb-3 font-semibold text-purple-500 text-3xl text-center">666</h1>
            <p class="text-xl text-gray-700">Joined Member</p>
          </div>
          <div class="flex-col -mx-96">
            <h1 class="mb-3 font-semibold text-purple-500 text-3xl text-center">666</h1>
            <p class="text-xl text-gray-700">Total Mentor</p>
          </div>
          <div class="flex-col">
            <h1 class="mb-3 font-semibold text-purple-500 text-3xl text-center">666</h1>
            <p class="text-xl text-gray-700">Total Course</p>
          </div>
        </div>
      </div>

      {{-- Popular Course --}}
      <div class="flex-col ml-5 mb-7 mt-40">
        <p class="text-purple-700 text-lg font-semibold mb-2">Popular Course</p>
        <h1 class="text-3xl font-bold text-gray-700 leading-snug">Only in e - Learning, <br> Quality and Interactive!</h1>
      </div>
      <div class="grid grid-cols-8 gap-5 mx-5 mb-40">
        {{-- @foreach ($popularClass as $popular) --}}
          <div class="col-span-2 bg-white rounded-md flex-col shadow-lg relative">
            <img src="{{ asset('/images/laravel.png') }}" class="shadow rounded-t-md">
            <p class="text-white px-3 py-1 bg-purple-600 rounded-full absolute top-3 right-3">Category</p>
            <div class="px-7 pb-7 flex-col">
              <h1 class="font-bold text-xl mt-5 text-gray-700">Mastering Blender 3D: Design Icon Set</h1>
              <div class="flex items-center justify-between">
                <div class="flex items-center mt-10">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
                </div>
              </div>
              <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
              <div class="flex justify-between items-center">
                <a href="{{ url('detail-course') }}" class="font-bold text-purple-500 text-lg mx-auto hover:text-purple-700">View Detail</a>
              </div>
            </div>
          </div>
          <div class="col-span-2 bg-white rounded-md flex-col shadow-lg relative">
            <img src="{{ asset('/images/laravel.png') }}" class="shadow rounded-t-md">
            <p class="text-white px-3 py-1 bg-purple-600 rounded-full absolute top-3 right-3">Category</p>
            <div class="px-7 pb-7 flex-col">
              <h1 class="font-bold text-xl mt-5 text-gray-700">Mastering Blender 3D: Design Icon Set</h1>
              <div class="flex items-center justify-between">
                <div class="flex items-center mt-10">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
                </div>
              </div>
              <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
              <div class="flex justify-between items-center">
                <a href="{{ url('detail-course') }}" class="font-bold text-purple-500 text-lg mx-auto hover:text-purple-700">View Detail</a>
              </div>
            </div>
          </div>
          <div class="col-span-2 bg-white rounded-md flex-col shadow-lg relative">
            <img src="{{ asset('/images/laravel.png') }}" class="shadow rounded-t-md">
            <p class="text-white px-3 py-1 bg-purple-600 rounded-full absolute top-3 right-3">Category</p>
            <div class="px-7 pb-7 flex-col">
              <h1 class="font-bold text-xl mt-5 text-gray-700">Mastering Blender 3D: Design Icon Set</h1>
              <div class="flex items-center justify-between">
                <div class="flex items-center mt-10">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
                </div>
              </div>
              <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
              <div class="flex justify-between items-center">
                <a href="{{ url('detail-course') }}" class="font-bold text-purple-500 text-lg mx-auto hover:text-purple-700">View Detail</a>
              </div>
            </div>
          </div>
          <div class="col-span-2 bg-white rounded-md flex-col shadow-lg relative">
            <img src="{{ asset('/images/laravel.png') }}" class="shadow rounded-t-md">
            <p class="text-white px-3 py-1 bg-purple-600 rounded-full absolute top-3 right-3">Category</p>
            <div class="px-7 pb-7 flex-col">
              <h1 class="font-bold text-xl mt-5 text-gray-700">Mastering Blender 3D: Design Icon Set</h1>
              <div class="flex items-center justify-between">
                <div class="flex items-center mt-10">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <img src="https://buildwithangga.com/themes/front/images/ic_star.svg">
                  <p class="text-md text-gray-800 font-semibold mt-1 ml-2">(538)</p>
                </div>
              </div>
              <div class="border-b-2 border-gray-300 mb-8 mt-4"></div>
              <div class="flex justify-between items-center">
                <a href="{{ url('detail-course') }}" class="font-bold text-purple-500 text-lg mx-auto hover:text-purple-700">View Detail</a>
              </div>
            </div>
          </div>
          
        {{-- @endforeach --}}
      </div>

      {{-- Join Section --}}
      <div class="flex-col mt-60 mb-60">
        <img src="https://buildwithangga.com/themes/front/images/ic_mentor.svg" class="mb-14 h-40 mx-auto">
        <h1 class="text-4xl text-gray-800 font-bold text-center mb-7">Ready to Build Your Future?</h1>
        <p class="text-center text-lg text-gray-700 leading-relaxed mb-16">Belajar langsung dari mentor berpengalaman <br> di bidangnya tanpa batas waktu</p>
        <div class="flex">
          <a href="{{ url('register') }}" class="mx-auto py-3 font-semibold px-24 bg-purple-500 text-white rounded-full mb-20">Sign Up Now</a>
        </div>
      </div>  
    </div>
@endsection
