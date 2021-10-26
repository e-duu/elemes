@php
    $increment = 100;
@endphp
@extends('layouts.app')
@section('title')
  e - Learning Catalog
@endsection
@section('content')
<div class="container mx-auto px-20">
  <div class="flex-col mt-20">
    <h1 class="text-4xl text-gray-800 font-bold text-center mb-7">Catalog Class</h1>
    <p class="text-center text-lg text-gray-700 leading-relaxed mb-16">Learn the latest knowledge from mentors who <br> experienced in the field</p>
  </div>

  {{-- Category --}}
      <div class="flex-col ml-5 my-7">
        <h1 class="text-3xl font-bold text-gray-700 leading-snug">Browse by Category</h1>
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

      <div class="flex-col ml-5 mb-7 mt-40">
        <h1 class="text-3xl font-bold text-gray-700 leading-snug">Latest Classs</h1>
      </div>
      <div class="grid grid-cols-9 gap-5 mx-5 mb-40">
        {{-- @foreach ($popularClass as $popular) --}}
          <div class="col-span-3 bg-white rounded-md shadow-lg p-7 flex-col">
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
          <div class="col-span-3 bg-white rounded-md shadow-lg p-7 flex-col">
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
          <div class="col-span-3 bg-white rounded-md shadow-lg p-7 flex-col">
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
          <div class="col-span-3 bg-white rounded-md shadow-lg p-7 flex-col">
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
          <div class="col-span-3 bg-white rounded-md shadow-lg p-7 flex-col">
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
          <div class="col-span-3 bg-white rounded-md shadow-lg p-7 flex-col">
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
    </div>
@endsection