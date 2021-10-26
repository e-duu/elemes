@extends('layouts.sub')
@section('title')
  e - Learning Course
@endsection
@section('content')
  <div class="container mx-auto">
    <div class="flex-col mt-20">
      <h1 class="text-4xl text-gray-800 font-bold text-center mb-7">Course by Category</h1>
      <p class="text-center text-lg text-gray-700 leading-relaxed mb-16">Learn the latest knowledge from mentors who <br> experienced in the field</p>
    </div>

    <div class="grid grid-cols-12 gap-12 mt-10">
      <div class="col-span-2">
        <div class="flex-col">
          <div class="block">
            <h1 class="font-bold text-xl text-gray-700">Sort & Filter</h1>
            <div class="mt-2">
              <div>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="radio" value="1" checked>
                  <span class="ml-2 text-lg">Category</span>
                </label>
              </div>
              <div class="my-3">
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="radio" value="2">
                  <span class="ml-2 text-lg">Categories</span>
                </label>
              </div>
              <div class="my-3">
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="radio" value="3">
                  <span class="ml-2 text-lg">Categories</span>
                </label>
              </div>
              <div class="my-3">
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="radio" value="4">
                  <span class="ml-2 text-lg">Categories</span>
                </label>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-span-10">
        <div class="grid grid-cols-9 gap-5 mx-5 mb-40">
        {{-- @foreach ($popularClass as $popular) --}}
          <div class="col-span-3 bg-white rounded-md flex-col shadow-lg relative">
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
                <a href="{{ url('detail-course') }}" class="font-bold text-purple-500 text-lg mx-auto hover:text-purple-700">View Detail</i></a>
              </div>
            </div>
          </div>
          <div class="col-span-3 bg-white rounded-md flex-col shadow-lg relative">
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
                <a href="{{ url('detail-course') }}" class="font-bold text-purple-500 text-lg mx-auto hover:text-purple-700">View Detail</i></a>
              </div>
            </div>
          </div>
          <div class="col-span-3 bg-white rounded-md flex-col shadow-lg relative">
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
                <a href="{{ url('detail-course') }}" class="font-bold text-purple-500 text-lg mx-auto hover:text-purple-700">View Detail</i></a>
              </div>
            </div>
          </div>
          <div class="col-span-3 bg-white rounded-md flex-col shadow-lg relative">
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
                <a href="{{ url('detail-course') }}" class="font-bold text-purple-500 text-lg mx-auto hover:text-purple-700">View Detail</i></a>
              </div>
            </div>
          </div>
          
        {{-- @endforeach --}}
      </div>
      </div>
    </div>
    
  </div>
@endsection